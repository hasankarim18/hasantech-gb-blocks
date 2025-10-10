<?php
/**
 * Server-side render callback for Latest Post Block
 */


// Default attributes (fallbacks if not defined)
$sectionTitle = isset($attributes['sectionTitle']) ? $attributes['sectionTitle'] : '';
$postType = isset($attributes['postType']) ? $attributes['postType'] : 'post';
$postPerPage = isset($attributes['postPerPage']) ? intval($attributes['postPerPage']) : 3;
$showFeaturedImage = !empty($attributes['showFeaturedImage']);
$displayExcerpt = !empty($attributes['displayExcerpt']);

// Prepare query
$args = array(
    'post_type' => $postType,
    'posts_per_page' => $postPerPage,
    'post_status' => 'publish',
);

$query = new WP_Query($args);


?>
<div class="htgb_latest_post_1">
    <div class="htgb_latest_post_1_wrapper">
        <div class="htgb_latest_post_1_container">

            <?php if (!empty($sectionTitle)): ?>
                <h2 class="htgb_latest_post_1_section_title">
                    <?php echo esc_html($sectionTitle); ?>
                </h2>
            <?php endif; ?>

            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <div class="htgb_all_post_1_card">
                        <div class="htgb_all_post_1_features">
                            <?php if ($showFeaturedImage && has_post_thumbnail()): ?>
                                <div class="htgb_all_post_1_feature_img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="htgb_all_post_1_feature_content">
                                <h2>
                                    <i>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </i>
                                </h2>

                                <?php if ($displayExcerpt): ?>
                                    <div class="gb_latest_post_1__excerpt">
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        $trimmed_excerpt = wp_trim_words($excerpt, 20, '...'); // change 20 to any word limit
                                        echo esc_html($trimmed_excerpt);
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                    Read more...
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <div class="htgb_latest_post_1_no_posts">
                    <p>No posts found</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="htgb_latest_post_1_featured_posts">
            Featured posts
        </div>
    </div>
</div>
<?php



