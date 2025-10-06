import {
  AlignmentToolbar,
  BlockControls,
  InspectorControls,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import { ColorPicker, PanelBody, SelectControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";
import "./edit.scss";

export default function Edit({ attributes, setAttributes }) {
  const { content, level, align, color } = attributes;
  const tagName = `h${level}`;

  return (
    <>
      <BlockControls>
        <AlignmentToolbar
          value={align}
          onChange={(newAlign) => {
            setAttributes({ align: newAlign });
          }}
        />
      </BlockControls>
      <InspectorControls>
        <PanelBody
          title={__("Heading settings", "custom-heading")}
          initialOpen={true}
        >
          <SelectControl
            label={__("Heading level", "gb-static")}
            value={level}
            options={[
              { label: "H1", value: 1 },
              { label: "H2", value: 2 },
              { label: "H3", value: 3 },
              { label: "H4", value: 4 },
              { label: "H5", value: 5 },
              { label: "H6", value: 6 },
            ]}
            onChange={(newLevel) => {
              setAttributes({ level: parseInt(newLevel) });
            }}
          />

          {/* ColorPicker */}
          <ColorPicker
            label={__("Heading color", "gb-static")}
            value={color}
            onChange={(newColor) => {
              setAttributes({ color: newColor });
            }}
          />
        </PanelBody>
      </InspectorControls>
      <div style={{}}>
        <RichText
          {...useBlockProps()}
          tagName={tagName}
          value={content}
          onChange={(updatedText) => {
            setAttributes({ content: updatedText });
          }}
          style={{ textAlign: align }}
        />
      </div>
    </>
  );
}
