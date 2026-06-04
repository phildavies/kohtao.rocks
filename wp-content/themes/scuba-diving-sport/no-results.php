<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Scuba Diving Sport
 */
?>
<div class="col-12">
    <h2 class="entry-title-result mb-2">
        <?php echo esc_html(get_theme_mod('scuba_diving_sport_no_results_title', __('Nothing Found', 'scuba-diving-sport'))); ?>
    </h2>
</div>
<div class="col-12 mb-3">
    <?php if (is_home() && current_user_can('publish_posts')) : ?>
        <p>
            <?php printf(
                esc_html__('Ready to publish your first post? Get started %s.', 'scuba-diving-sport'),
                '<a href="' . esc_url(admin_url('post-new.php')) . '">' . esc_html__('here', 'scuba-diving-sport') . '</a>'
            ); ?>
        </p>
    <?php elseif (is_search()) : ?>
        <p class="mb-2">
            <?php echo esc_html(get_theme_mod('scuba_diving_sport_no_results_content', __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'scuba-diving-sport'))); ?>
        </p>
        <br />
        <div class="result-search">
            <?php get_search_form(); ?>
        </div>
    <?php else : ?>
        <p>
            <?php esc_html_e('Don\'t worry&hellip; it happens to the best of us.', 'scuba-diving-sport'); ?>
        </p>
        <br />
        <div class="error-btn-result">
            <a class="view-more-result" href="<?php echo esc_url(home_url()); ?>">
                <?php esc_html_e('Back to Home Page', 'scuba-diving-sport'); ?>
                <span class="screen-reader-text">
                    <?php esc_html_e('Back to Home Page', 'scuba-diving-sport'); ?>
                </span>
            </a>
        </div>
    <?php endif; ?>
</div>

