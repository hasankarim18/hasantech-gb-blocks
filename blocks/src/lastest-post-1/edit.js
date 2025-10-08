import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import { useSelect } from "@wordpress/data";
import { useEffect, useState } from "react";
import "./edit.scss";

export default function Edit({ attributes, setAttributes }) {
  const { postType, postPerPage, showFeaturedImage, displayExcerpt } =
    attributes;

  const [postTypeOptions, setPostTypeOptions] = useState([]);

  const postTypes = useSelect(
    (select) => select("core").getPostTypes({ per_page: -1 }),
    []
  );

  useEffect(() => {
    if (postTypes && Array.isArray(postTypes)) {
      const filtered = postTypes
        .filter((pt) => pt.viewable && pt.slug !== "attachment")
        .map((pt) => ({
          label: pt.labels.singular_name,
          value: pt.slug,
        }));
      setPostTypeOptions(filtered);
    }
  }, [postTypes]);

  console.log({ postTypeOptions });

  return (
    <div {...useBlockProps()} className="gb_latest_post_1">
      <InspectorControls></InspectorControls>
      <div>
        <h1>Latest posts</h1>
      </div>
    </div>
  );
}
