import { RichText, useBlockProps } from "@wordpress/block-editor";
import CustomLink from "./components/CustomLink";
import "./edit.scss";

export default function Save({ attributes }) {
  const blockProps = useBlockProps.save();
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
    align,
  } = attributes;

  return (
    <div {...blockProps}>
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
            <RichText.Content
              tagName="h2"
              style={{ textAlign: align, color: cardTextColor }}
              value={title}
            />
            <RichText.Content
              tagName="p"
              style={{ textAlign: align, color: cardTextColor }}
              value={paragraph}
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
