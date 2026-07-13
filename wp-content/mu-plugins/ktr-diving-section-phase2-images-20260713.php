<?php
/**
 * Plugin Name: KohTao.Rocks Diving Section Phase 2 Images 2026-07-13
 * Description: Guarded local image registration and assignment helper for the Phase 1 diving pages. Does nothing unless explicitly triggered.
 *
 * ONE-TIME APPROVED DIVING PHASE 2 IMAGE MIGRATION DATED 13 JULY 2026.
 *
 * IMPORTANT:
 * - Normal page loads do nothing.
 * - Do not run this from .cpanel.yml.
 * - Run only deliberately in dry-run or apply mode using the CLI commands below.
 * - Do not rerun casually after later manual image edits without reviewing
 *   dry-run output and approving the listed changes.
 * - Pages are matched by exact slug.
 * - Media is matched by attachment filename, not local attachment ID alone.
 * - This migration does not rewrite Phase 1 copy, change menus, add redirects,
 *   alter slugs, add prices, deploy files, push Git commits or upload live media.
 *
 * Dry run:
 *   php -r "define('KTR_DIVING_SECTION_PHASE2_IMAGES_20260713','dry-run'); require 'wp-load.php';"
 *
 * Apply:
 *   php -r "define('KTR_DIVING_SECTION_PHASE2_IMAGES_20260713','apply'); require 'wp-load.php';"
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_diving_phase2_image_media_specs_20260713() {
    return array(
        'try-scuba-koh-tao-beginner-skills.webp' => array(
            'title' => 'Try Scuba beginner skills practice',
            'alt' => 'Beginner diver practising underwater skills with an instructor',
            'source' => 'ktr-phase2-diving-images/try-scuba-koh-tao-beginner-skills.webp',
            'register' => true,
            'width' => 1024,
            'height' => 683,
        ),
        'fun-diving-koh-tao-reef-dive.webp' => array(
            'title' => 'Fun diving reef dive',
            'alt' => 'Certified diver exploring a coral reef',
            'source' => 'ktr-phase2-diving-images/fun-diving-koh-tao-reef-dive.webp',
            'register' => true,
            'width' => 1024,
            'height' => 683,
        ),
        'continuing-diving-training-koh-tao-group.webp' => array(
            'title' => 'Continuing diving training group',
            'alt' => 'Small group of divers underwater during continuing training',
            'source' => 'ktr-phase2-diving-images/continuing-diving-training-koh-tao-group.webp',
            'register' => true,
            'width' => 1024,
            'height' => 683,
        ),
        'diving-professional-training-koh-tao-boat.webp' => array(
            'title' => 'Dive boat training preparation',
            'alt' => 'Divers preparing to enter the water from a dive boat',
            'source' => 'ktr-phase2-diving-images/diving-professional-training-koh-tao-boat.webp',
            'register' => true,
            'width' => 1024,
            'height' => 683,
        ),
        'IMG_3338.jpg' => array(
            'title' => 'Checking dive equipment before the first dive on the Open Water course',
            'alt' => 'Open Water students checking scuba equipment before training',
            'source' => '2018/04/IMG_3338.jpg',
            'register' => false,
            'width' => 1235,
            'height' => 693,
        ),
        'DSC01853.jpg' => array(
            'title' => 'Discover Scuba Diving briefing',
            'alt' => 'Dive instructor briefing a small group on a boat',
            'source' => '2018/04/DSC01853.jpg',
            'register' => false,
            'width' => 1040,
            'height' => 693,
        ),
    );
}

function ktr_diving_phase2_image_page_specs_20260713() {
    return array(
        'try-scuba-koh-tao' => array(
            'primary' => 'try-scuba-koh-tao-beginner-skills.webp',
        ),
        'open-water-course-koh-tao' => array(
            'primary' => 'IMG_3338.jpg',
        ),
        'fun-diving-koh-tao' => array(
            'primary' => 'fun-diving-koh-tao-reef-dive.webp',
        ),
        'choosing-a-dive-school-koh-tao' => array(
            'primary' => 'DSC01853.jpg',
        ),
    );
}

function ktr_diving_phase2_hub_specs_20260713() {
    return array(
        array(
            'marker' => 'want-to-try-diving',
            'heading' => '<h2>Want to Try Diving?</h2>',
            'filename' => 'try-scuba-koh-tao-beginner-skills.webp',
        ),
        array(
            'marker' => 'already-certified',
            'heading' => '<h2>Already Certified?</h2>',
            'filename' => 'fun-diving-koh-tao-reef-dive.webp',
        ),
        array(
            'marker' => 'continue-your-training',
            'heading' => '<h2>Continue Your Training</h2>',
            'filename' => 'continuing-diving-training-koh-tao-group.webp',
        ),
        array(
            'marker' => 'become-a-dive-professional',
            'heading' => '<h2>Become a Dive Professional</h2>',
            'filename' => 'diving-professional-training-koh-tao-boat.webp',
        ),
    );
}

function ktr_diving_phase2_get_page_by_slug_20260713($slug) {
    $posts = get_posts(array(
        'name' => $slug,
        'post_type' => 'page',
        'post_status' => 'any',
        'numberposts' => 2,
    ));

    return count($posts) === 1 ? $posts[0] : null;
}

function ktr_diving_phase2_find_attachment_by_filename_20260713($filename) {
    global $wpdb;

    $like = '%/' . $wpdb->esc_like($filename);
    $rows = $wpdb->get_col($wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attached_file' AND (meta_value = %s OR meta_value LIKE %s)",
        $filename,
        $like
    ));

    $ids = array_values(array_unique(array_map('intval', $rows)));
    return $ids;
}

function ktr_diving_phase2_upload_base_20260713() {
    $uploads = wp_upload_dir();
    return array(
        'dir' => trailingslashit($uploads['basedir']),
        'url' => trailingslashit($uploads['baseurl']),
    );
}

function ktr_diving_phase2_register_attachment_20260713($filename, $spec, &$report, $mode) {
    $uploads = ktr_diving_phase2_upload_base_20260713();
    $relative = ltrim($spec['source'], '/');
    $path = $uploads['dir'] . $relative;

    if (!file_exists($path)) {
        $report['missing_media_files'][] = array('filename' => $filename, 'path' => $path);
        return null;
    }

    if ($mode !== 'apply') {
        $report['changes'][] = array('media' => $filename, 'action' => 'register_attachment', 'source' => $relative);
        return 0;
    }

    $filetype = wp_check_filetype($path);
    $attachment_id = wp_insert_attachment(array(
        'guid' => $uploads['url'] . $relative,
        'post_mime_type' => $filetype['type'],
        'post_title' => $spec['title'],
        'post_content' => '',
        'post_excerpt' => '',
        'post_status' => 'inherit',
    ), $path);

    if (is_wp_error($attachment_id)) {
        $report['refused'][] = array('media' => $filename, 'reason' => 'wp_insert_attachment_failed', 'message' => $attachment_id->get_error_message());
        return null;
    }

    update_post_meta($attachment_id, '_wp_attached_file', $relative);
    require_once ABSPATH . 'wp-admin/includes/image.php';
    $metadata = wp_generate_attachment_metadata($attachment_id, $path);
    if ($metadata) {
        wp_update_attachment_metadata($attachment_id, $metadata);
    }

    $report['changes'][] = array('media' => $filename, 'action' => 'registered_attachment', 'attachment_id' => (int) $attachment_id, 'source' => $relative);
    return (int) $attachment_id;
}

function ktr_diving_phase2_resolve_media_20260713(&$report, $mode) {
    $resolved = array();

    foreach (ktr_diving_phase2_image_media_specs_20260713() as $filename => $spec) {
        $ids = ktr_diving_phase2_find_attachment_by_filename_20260713($filename);
        if (count($ids) > 1) {
            $report['refused'][] = array('media' => $filename, 'reason' => 'multiple_attachments_with_same_filename', 'attachment_ids' => $ids);
            continue;
        }

        if (count($ids) === 0 && !empty($spec['register'])) {
            $id = ktr_diving_phase2_register_attachment_20260713($filename, $spec, $report, $mode);
            if ($id === null) {
                continue;
            }
            $ids = $id ? array($id) : array(0);
        }

        if (count($ids) === 0) {
            $report['missing_media'][] = array('filename' => $filename, 'source' => $spec['source']);
            continue;
        }

        $resolved[$filename] = (int) $ids[0];
    }

    return $resolved;
}

function ktr_diving_phase2_image_html_20260713($marker, $filename, $attachment_id, $spec) {
    $uploads = ktr_diving_phase2_upload_base_20260713();
    $src = $attachment_id ? wp_get_attachment_image_url($attachment_id, 'large') : $uploads['url'] . ltrim($spec['source'], '/');
    $alt = esc_attr($spec['alt']);
    $src = esc_url($src);
    $marker = sanitize_html_class($marker);
    $width = isset($spec['width']) ? (int) $spec['width'] : 0;
    $height = isset($spec['height']) ? (int) $spec['height'] : 0;
    $size_attrs = ($width > 0 && $height > 0) ? ' width="' . $width . '" height="' . $height . '"' : '';

    return "\n<!-- ktr-phase2-image:{$marker} -->\n" .
        '<figure class="ktr-phase2-image" style="margin:20px auto 26px;max-width:1024px;">' .
        '<img src="' . $src . '" alt="' . $alt . '"' . $size_attrs . ' loading="lazy" decoding="async" style="width:100%;height:auto;border-radius:8px;display:block;" />' .
        "</figure>\n<!-- /ktr-phase2-image:{$marker} -->\n";
}

function ktr_diving_phase2_insert_after_once_20260713($content, $needle, $insert, $marker, $slug, &$report) {
    $start_marker = '<!-- ktr-phase2-image:' . $marker . ' -->';
    $end_marker = '<!-- /ktr-phase2-image:' . $marker . ' -->';
    if (strpos($content, $start_marker) !== false) {
        $start = strpos($content, $start_marker);
        $end = strpos($content, $end_marker, $start);
        if ($end === false) {
            $report['refused'][] = array('slug' => $slug, 'reason' => 'image_block_end_marker_missing', 'marker' => $marker);
            return $content;
        }
        $end += strlen($end_marker);
        $existing = substr($content, $start, $end - $start);
        $target = trim($insert);
        if (trim($existing) === $target) {
            $report['unchanged'][] = array('slug' => $slug, 'field' => 'post_content', 'marker' => $marker, 'value' => 'image_block_already_present');
            return $content;
        }

        $report['changes'][] = array('slug' => $slug, 'field' => 'post_content', 'action' => 'update_image_block', 'marker' => $marker);
        return substr($content, 0, $start) . $target . substr($content, $end);
    }

    $count = substr_count($content, $needle);
    if ($count !== 1) {
        $report['refused'][] = array('slug' => $slug, 'reason' => 'content_anchor_count_unexpected', 'marker' => $marker, 'anchor' => $needle, 'count' => $count);
        return $content;
    }

    $report['changes'][] = array('slug' => $slug, 'field' => 'post_content', 'action' => 'insert_image_block', 'marker' => $marker);
    return str_replace($needle, $needle . $insert, $content);
}

function ktr_diving_phase2_update_post_content_direct_20260713($post_id, $content) {
    global $wpdb;

    $updated = $wpdb->update(
        $wpdb->posts,
        array(
            'post_content' => $content,
            'post_modified' => current_time('mysql'),
            'post_modified_gmt' => current_time('mysql', 1),
        ),
        array('ID' => (int) $post_id),
        array('%s', '%s', '%s'),
        array('%d')
    );

    if ($updated !== false) {
        clean_post_cache((int) $post_id);
    }

    return $updated;
}

function ktr_diving_phase2_run_20260713($mode = 'dry-run') {
    $mode = ($mode === 'apply') ? 'apply' : 'dry-run';
    $report = array(
        'mode' => $mode,
        'status' => null,
        'missing_pages' => array(),
        'missing_media' => array(),
        'missing_media_files' => array(),
        'refused' => array(),
        'changes' => array(),
        'unchanged' => array(),
        'notes' => array(
            'normal_page_loads_do_nothing',
            'pages_matched_by_slug',
            'media_matched_by_attachment_filename',
            'phase1_text_content_is_not_replaced',
            'menus_redirects_slugs_deployments_git_are_not_changed',
        ),
    );

    $media_specs = ktr_diving_phase2_image_media_specs_20260713();
    $media = ktr_diving_phase2_resolve_media_20260713($report, $mode);

    foreach (array_keys(ktr_diving_phase2_image_page_specs_20260713()) as $slug) {
        if (!ktr_diving_phase2_get_page_by_slug_20260713($slug)) {
            $report['missing_pages'][] = $slug;
        }
    }
    if (!ktr_diving_phase2_get_page_by_slug_20260713('diving-in-koh-tao')) {
        $report['missing_pages'][] = 'diving-in-koh-tao';
    }

    if ($report['missing_pages'] || $report['missing_media'] || $report['missing_media_files'] || $report['refused']) {
        $report['status'] = 'refused_preflight_failed';
        return $report;
    }

    foreach ($media as $filename => $attachment_id) {
        if (!$attachment_id) {
            continue;
        }
        $current_alt = (string) get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        $target_alt = $media_specs[$filename]['alt'];
        if ($current_alt !== $target_alt) {
            $report['changes'][] = array('media' => $filename, 'attachment_id' => $attachment_id, 'field' => 'alt_text', 'from' => $current_alt, 'to' => $target_alt);
            if ($mode === 'apply') {
                update_post_meta($attachment_id, '_wp_attachment_image_alt', $target_alt);
            }
        } else {
            $report['unchanged'][] = array('media' => $filename, 'attachment_id' => $attachment_id, 'field' => 'alt_text', 'value' => 'already_current');
        }
    }

    foreach (ktr_diving_phase2_image_page_specs_20260713() as $slug => $page_spec) {
        $page = ktr_diving_phase2_get_page_by_slug_20260713($slug);
        $filename = $page_spec['primary'];
        $attachment_id = $media[$filename];
        $current_thumb = (int) get_post_thumbnail_id($page->ID);
        if (!$attachment_id) {
            $report['changes'][] = array('slug' => $slug, 'field' => 'featured_image', 'from' => $current_thumb, 'to' => 'registered_attachment:' . $filename, 'filename' => $filename);
        } elseif ($current_thumb !== $attachment_id) {
            $report['changes'][] = array('slug' => $slug, 'field' => 'featured_image', 'from' => $current_thumb, 'to' => $attachment_id, 'filename' => $filename);
            if ($mode === 'apply') {
                set_post_thumbnail($page->ID, $attachment_id);
            }
        } else {
            $report['unchanged'][] = array('slug' => $slug, 'field' => 'featured_image', 'value' => 'already_current', 'filename' => $filename);
        }

        $marker = $slug . '-primary';
        $html = ktr_diving_phase2_image_html_20260713($marker, $filename, $attachment_id, $media_specs[$filename]);
        $new_content = ktr_diving_phase2_insert_after_once_20260713($page->post_content, '</h1>', $html, $marker, $slug, $report);
        if ($new_content !== $page->post_content && $mode === 'apply') {
            $updated = ktr_diving_phase2_update_post_content_direct_20260713($page->ID, $new_content);
            if ($updated === false) {
                global $wpdb;
                $report['refused'][] = array('slug' => $slug, 'reason' => 'direct_content_update_failed', 'message' => $wpdb->last_error);
            }
        }
    }

    $hub = ktr_diving_phase2_get_page_by_slug_20260713('diving-in-koh-tao');
    $hub_content = $hub->post_content;
    $hub_new_content = $hub_content;
    foreach (ktr_diving_phase2_hub_specs_20260713() as $hub_spec) {
        $filename = $hub_spec['filename'];
        $html = ktr_diving_phase2_image_html_20260713('hub-' . $hub_spec['marker'], $filename, $media[$filename], $media_specs[$filename]);
        $hub_new_content = ktr_diving_phase2_insert_after_once_20260713($hub_new_content, $hub_spec['heading'], $html, 'hub-' . $hub_spec['marker'], 'diving-in-koh-tao', $report);
    }
    if ($hub_new_content !== $hub_content && $mode === 'apply') {
        $updated = ktr_diving_phase2_update_post_content_direct_20260713($hub->ID, $hub_new_content);
        if ($updated === false) {
            global $wpdb;
            $report['refused'][] = array('slug' => 'diving-in-koh-tao', 'reason' => 'direct_content_update_failed', 'message' => $wpdb->last_error);
        }
    }

    if ($report['refused']) {
        $report['status'] = 'refused_unexpected_content_state';
        return $report;
    }

    $report['status'] = $report['changes'] ? ($mode === 'apply' ? 'applied' : 'dry_run_only_no_changes_applied') : 'already_current';
    return $report;
}

function ktr_diving_phase2_output_20260713($report) {
    $json = wp_json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if (PHP_SAPI === 'cli') {
        echo $json . PHP_EOL;
        return;
    }
    wp_die('<pre>' . esc_html($json) . '</pre>');
}

function ktr_diving_phase2_maybe_run_20260713() {
    $mode = null;

    if (PHP_SAPI === 'cli' && defined('KTR_DIVING_SECTION_PHASE2_IMAGES_20260713')) {
        $mode = (string) KTR_DIVING_SECTION_PHASE2_IMAGES_20260713;
    } elseif (is_admin() && isset($_GET['ktr_diving_section_phase2_images_20260713'])) {
        if (!current_user_can('manage_options')) {
            wp_die('Not allowed', 403);
        }
        check_admin_referer('ktr_diving_section_phase2_images_20260713');
        $mode = sanitize_key(wp_unslash($_GET['ktr_diving_section_phase2_images_20260713']));
    }

    if ($mode === null) {
        return;
    }

    if ($mode !== 'dry-run' && $mode !== 'apply') {
        ktr_diving_phase2_output_20260713(array(
            'status' => 'invalid_mode',
            'allowed_modes' => array('dry-run', 'apply'),
        ));
        return;
    }

    ktr_diving_phase2_output_20260713(ktr_diving_phase2_run_20260713($mode));
}
add_action('plugins_loaded', 'ktr_diving_phase2_maybe_run_20260713', 99);
