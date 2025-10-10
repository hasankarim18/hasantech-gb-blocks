import {
  InspectorControls,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import {
  Notice,
  PanelBody,
  RangeControl,
  Spinner,
  ToggleControl,
} from "@wordpress/components";
import { useSelect } from "@wordpress/data";
import { useEffect, useState } from "react";
import "./edit.scss";

export default function Edit({ attributes, setAttributes }) {
  const {
    sectionTitle,
    postType,
    postPerPage,
    showFeaturedImage,
    displayExcerpt,
  } = attributes;

  const [postTypeOptions, setPostTypeOptions] = useState([]);

  // -----------------------------
  // Fetch all post types
  // -----------------------------
  const postTypes = useSelect(
    (select) => select("core").getPostTypes({ per_page: -1 }),
    []
  );

  // -----------------------------
  // Fetch posts for selected postType
  // -----------------------------
  const posts = useSelect(
    (select) => {
      if (!postType) return null;
      return select("core").getEntityRecords("postType", postType, {
        per_page: postPerPage,
        _embed: true,
      });
    },
    [postType, postPerPage]
  );

  // -----------------------------
  // Prepare postType options for the select control
  // -----------------------------
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

  // -----------------------------
  // Correct usage: InspectorControls outside block wrapper
  // -----------------------------
  return (
    <>
      <InspectorControls>
        {/* Post Type Selector */}
        <PanelBody title="Post Type Settings" initialOpen={true}>
          {postTypeOptions.length > 0 ? (
            <select
              value={postType || ""}
              onChange={(e) => setAttributes({ postType: e.target.value })}
            >
              {postTypeOptions.map((pto) => (
                <option key={pto.value} value={pto.value}>
                  {pto.label}
                </option>
              ))}
            </select>
          ) : (
            <p>Loading post types...</p>
          )}
        </PanelBody>

        {/* Posts per page */}
        <PanelBody>
          <RangeControl
            value={postPerPage}
            onChange={(value) => setAttributes({ postPerPage: value })}
            min={1}
            max={50}
            label="Posts per page"
          />
        </PanelBody>

        {/* Show featured image */}
        <PanelBody>
          <ToggleControl
            checked={showFeaturedImage}
            onChange={(value) => setAttributes({ showFeaturedImage: value })}
            label="Show featured image"
          />
        </PanelBody>

        {/* Display excerpt */}
        <PanelBody>
          <ToggleControl
            checked={displayExcerpt}
            onChange={(value) => setAttributes({ displayExcerpt: value })}
            label="Display excerpt"
          />
        </PanelBody>
      </InspectorControls>

      {/* Main block wrapper */}
      <div {...useBlockProps({ className: "htgb_latest_post_1" })}>
        <div className="htgb_latest_post_1_wrapper">
          <div className="htgb_latest_post_1_container">
            {/* Block title */}
            <RichText
              onChange={(value) => setAttributes({ sectionTitle: value })}
              value={sectionTitle}
              tagName="h2"
              className="htgb_latest_post_1_section_title"
            />

            {/* Posts rendering */}
            {!posts ? (
              <Spinner />
            ) : posts.length === 0 ? (
              <Notice status="info">No posts found</Notice>
            ) : (
              posts.map((post, index) => (
                <div className="htgb_all_post_1_card" key={index}>
                  {(() => {
                    console.log(post);
                  })()}
                  <div className="htgb_all_post_1_features">
                    {/* SAFETY: Check if _embedded exists */}
                    {showFeaturedImage &&
                    post._embedded &&
                    post._embedded["wp:featuredmedia"]?.length > 0 ? (
                      <div className="htgb_all_post_1_feature_img">
                        <img
                          src={post._embedded["wp:featuredmedia"][0].source_url}
                          alt={post.title.rendered}
                        />
                      </div>
                    ) : null}

                    <div className="htgb_all_post_1_feature_content">
                      <h2>
                        <i>{post.title.rendered}</i>
                      </h2>

                      {displayExcerpt && post.excerpt?.rendered && (
                        <div
                          className="gb_latest_post_1__excerpt"
                          dangerouslySetInnerHTML={{
                            __html: post.excerpt.rendered,
                          }}
                        />
                      )}
                      <a
                        href={post.link}
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        Read more...
                      </a>
                    </div>
                  </div>
                </div>
              ))
            )}
          </div>
          {/* featured post collectin */}
          <div className="htgb_latest_post_1_featured_posts">
            Featured posts
          </div>
        </div>
      </div>
    </>
  );
}
