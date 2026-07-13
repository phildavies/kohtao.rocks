<?php
/**
 * Plugin Name: KohTao.Rocks Diving Phase 2 Featured Image Display Fix 2026-07-13
 * Description: Suppresses PopularFX's automatic front-end featured-image block above the H1 on four approved Phase 2 diving pages while keeping featured-image metadata intact.
 *
 * ONE-TIME APPROVED DIVING PHASE 2 DISPLAY FIX DATED 13 JULY 2026.
 *
 * Purpose:
 * - Keep WordPress featured images assigned for metadata, archives and sharing.
 * - Keep the approved inline image beneath each H1.
 * - Suppress only the PopularFX automatic single-page featured-image output
 *   above the content on the four approved Phase 2 diving pages.
 *
 * This file does not run a database migration, replace page bodies, change
 * menus, add redirects, alter slugs, change prices, deploy files, push Git
 * commits or modify the Diving hub journey images.
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_diving_phase2_featured_image_fix_target_slugs_20260713() {
    return array(
        'try-scuba-koh-tao',
        'open-water-course-koh-tao',
        'fun-diving-koh-tao',
        'choosing-a-dive-school-koh-tao',
    );
}

function ktr_diving_phase2_featured_image_fix_should_suppress_20260713() {
    if (is_admin() || (defined('REST_REQUEST') && REST_REQUEST) || wp_doing_ajax() || !is_page()) {
        return false;
    }

    $post = get_queried_object();
    if (!$post || empty($post->post_name)) {
        return false;
    }

    return in_array($post->post_name, ktr_diving_phase2_featured_image_fix_target_slugs_20260713(), true);
}

if (!function_exists('popularfx_post_thumbnail')) :
    /**
     * PopularFX pluggable thumbnail renderer with a narrow front-end suppression
     * for four approved Phase 2 diving pages.
     */
    function popularfx_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) {
            if (ktr_diving_phase2_featured_image_fix_should_suppress_20260713()) {
                return;
            }
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

            <?php
        } else {
            ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                    the_post_thumbnail(
                        'post-thumbnail',
                        array(
                            'alt' => the_title_attribute(
                                array(
                                    'echo' => false,
                                )
                            ),
                        )
                    );
                ?>
            </a>

            <?php
        }
    }
endif;
