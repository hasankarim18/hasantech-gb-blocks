import {
  AlignmentToolbar,
  InspectorControls,
  MediaUpload,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import { Button, ColorPicker, PanelBody } from "@wordpress/components";
import CustomLink from "./components/CustomLink";
import "./edit.scss";

export default function Edit({ attributes, setAttributes, supports }) {
  const {
    title,
    paragraph,
    image,
    buttonText,
    buttonLink,
    cardBackground,
    cardTextColor,
    borderRadius,
    boxShadow,
    boxShadowOnHover,
    authorName,
    authorImage,
    authorLink,
    date,
    titleAlign,
    paragraphAlign,
    buttonAlign,
    align,
  } = attributes;

  return (
    <div {...useBlockProps()}>
      {/* <BlockControls>
        <AlignmentToolbar
          value={align}
          onChange={(value) => setAttributes({ align: value })}
        />
      </BlockControls> */}
      <InspectorControls>
        <PanelBody title="Image Upload">
          <MediaUpload
            onSelect={(media) => {
              setAttributes({ image: media.url });
            }}
            allowedTypes={["image"]}
            value={image}
            render={({ open }) => (
              <Button onClick={open}>
                {image ? "Change Image" : "Upload Image"}
              </Button>
            )}
          />
          {image ? <img width={100} height={100} src={image} /> : null}
        </PanelBody>
        <PanelBody title="Title Alignment">
          <AlignmentToolbar
            value={titleAlign}
            onChange={(value) => setAttributes({ titleAlign: value })}
          />
        </PanelBody>
        <PanelBody title="Paragraph Alignment">
          <AlignmentToolbar
            value={paragraphAlign}
            onChange={(value) => setAttributes({ paragraphAlign: value })}
          />
        </PanelBody>
        <PanelBody title="Text Color">
          <ColorPicker
            label="Text color"
            value={cardTextColor}
            onChange={(value) => setAttributes({ cardTextColor: value })}
          />
        </PanelBody>
      </InspectorControls>
      <div
        style={{
          background:
            "radial-gradient(circle,rgba(82, 60, 69, 1) 0%, rgba(14, 61, 115, 1) 100%)",
        }}
        className="hgb-card-1"
      >
        <div className="hgb-card-1-wrapper">
          <div className="hgb-card-1-image">
            <img src={image} alt="cute girs" />
          </div>
          {/* content */}
          <div className="hgb_card_1_contents">
            <RichText
              style={{ textAlign: titleAlign, color: cardTextColor }}
              value={title}
              onChange={(value) => setAttributes({ title: value })}
              tagName="h2"
            />
            <RichText
              style={{ textAlign: paragraphAlign, color: cardTextColor }}
              value={paragraph}
              onChange={(value) => setAttributes({ paragraph: value })}
              tagName="p"
            />

            <div>
              <CustomLink href="#"> View Details </CustomLink>
            </div>
            <div className="hgb_card_1_author">
              <img src="https://cdn.pixabay.com/photo/2025/09/24/17/10/squirrel-9853377_960_720.jpg" />
              <div>
                <div className="hgb_card_1_author_name">Author Name</div>
                <div className="hgb_card_1_author_date">Date</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
