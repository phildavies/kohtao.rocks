<?php
/**
 * Plugin Name: KohTao.Rocks Diving Section Phase 3 Menu 2026-07-13
 * Description: Guarded local menu migration for the Diving dropdown visitor journey. Does nothing unless explicitly triggered.
 *
 * ONE-TIME APPROVED DIVING PHASE 3 MENU MIGRATION DATED 13 JULY 2026.
 *
 * Purpose:
 * - Keep the top-level DIVING item linked to /diving-in-koh-tao/.
 * - Replace the old three-item Diving dropdown with approved visitor journey
 *   links and non-clickable group labels.
 * - Add a stable ID to the existing "Koh Tao Dive Site Guides" H2 if needed.
 *
 * IMPORTANT:
 * - Normal page loads do not run the migration.
 * - Do not run this from .cpanel.yml.
 * - Run only deliberately in dry-run or apply mode using the CLI commands below.
 * - Pages and menu items are matched by stable slugs, URL paths and menu term
 *   data, not by local numeric menu-item IDs alone.
 * - This migration does not create course pages, add redirects, change slugs,
 *   replace page bodies, change approved page wording, deploy files, stage Git,
 *   commit, push or upload live.
 *
 * Dry run:
 *   php -r "define('KTR_DIVING_SECTION_PHASE3_MENU_20260713','dry-run'); require 'wp-load.php';"
 *
 * Apply:
 *   php -r "define('KTR_DIVING_SECTION_PHASE3_MENU_20260713','apply'); require 'wp-load.php';"
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_diving_phase3_menu_item_specs_20260713() {
    return array(
        array('kind' => 'label', 'title' => 'Start Diving'),
        array('kind' => 'page', 'title' => 'Try Scuba', 'slug' => 'try-scuba-koh-tao'),
        array('kind' => 'page', 'title' => 'Open Water Course', 'slug' => 'open-water-course-koh-tao'),
        array('kind' => 'page', 'title' => 'Choosing a Dive School', 'slug' => 'choosing-a-dive-school-koh-tao'),
        array('kind' => 'label', 'title' => 'Certified Divers'),
        array('kind' => 'page', 'title' => 'Fun Diving', 'slug' => 'fun-diving-koh-tao'),
        array('kind' => 'custom', 'title' => 'All Dive Sites', 'url' => '/diving-in-koh-tao/#koh-tao-dive-site-guides'),
        array('kind' => 'custom', 'title' => 'Chumphon Pinnacle', 'url' => '/chumphon-pinnacle/', 'slug' => 'chumphon-pinnacle'),
        array('kind' => 'custom', 'title' => 'HTMS Sattakut', 'url' => '/sattakut-wreck/', 'slug' => 'sattakut-wreck'),
        array('kind' => 'custom', 'title' => 'Sail Rock', 'url' => '/sail-rock/', 'slug' => 'sail-rock'),
    );
}

function ktr_diving_phase3_old_child_slugs_20260713() {
    return array('chumphon-pinnacle', 'sattakut-wreck', 'sail-rock');
}

function ktr_diving_phase3_menu_report_entry_20260713($type, $detail) {
    return array_merge(array('type' => $type), $detail);
}

function ktr_diving_phase3_url_path_20260713($url) {
    $url = (string) $url;
    if ($url === '') {
        return '';
    }

    $parts = wp_parse_url($url);
    $path = isset($parts['path']) ? $parts['path'] : $url;
    $fragment = isset($parts['fragment']) ? '#' . $parts['fragment'] : '';
    $path = '/' . trim($path, '/');
    if ($path === '/') {
        return '/';
    }
    return trailingslashit($path) . $fragment;
}

function ktr_diving_phase3_get_page_by_slug_20260713($slug) {
    $posts = get_posts(array(
        'name' => $slug,
        'post_type' => 'page',
        'post_status' => 'publish',
        'numberposts' => 2,
    ));

    return count($posts) === 1 ? $posts[0] : null;
}

function ktr_diving_phase3_get_menu_20260713(&$report) {
    $locations = get_nav_menu_locations();
    if (empty($locations['primary'])) {
        $report['refused'][] = array('reason' => 'primary_menu_location_missing');
        return null;
    }

    $menu = wp_get_nav_menu_object((int) $locations['primary']);
    if (!$menu || is_wp_error($menu)) {
        $report['refused'][] = array('reason' => 'primary_menu_not_resolved', 'location_value' => (int) $locations['primary']);
        return null;
    }

    if ($menu->slug !== 'main-menu' && $menu->name !== 'Main Menu') {
        $report['refused'][] = array('reason' => 'unexpected_primary_menu', 'term_id' => (int) $menu->term_id, 'name' => $menu->name, 'slug' => $menu->slug);
        return null;
    }

    return $menu;
}

function ktr_diving_phase3_get_menu_items_20260713($menu_id) {
    $items = wp_get_nav_menu_items($menu_id, array('post_status' => 'any'));
    return is_array($items) ? $items : array();
}

function ktr_diving_phase3_find_diving_parent_20260713($items, &$report) {
    $matches = array();
    foreach ($items as $item) {
        if ((int) $item->menu_item_parent !== 0) {
            continue;
        }
        $path = ktr_diving_phase3_url_path_20260713($item->url);
        if (strcasecmp($item->title, 'Diving') === 0 && $path === '/diving-in-koh-tao/') {
            $matches[] = $item;
        }
    }

    if (count($matches) !== 1) {
        $report['refused'][] = array('reason' => 'diving_parent_match_count_unexpected', 'count' => count($matches));
        return null;
    }

    return $matches[0];
}

function ktr_diving_phase3_item_signature_20260713($item) {
    $classes = is_array($item->classes) ? $item->classes : array();
    if (in_array('ktr-menu-group-label', $classes, true)) {
        return 'label:' . strtolower($item->title);
    }
    $path = ktr_diving_phase3_url_path_20260713($item->url);
    return 'link:' . strtolower($item->title) . '|' . $path;
}

function ktr_diving_phase3_expected_signatures_20260713() {
    $signatures = array();
    foreach (ktr_diving_phase3_menu_item_specs_20260713() as $spec) {
        if ($spec['kind'] === 'label') {
            $signatures[] = 'label:' . strtolower($spec['title']);
        } elseif ($spec['kind'] === 'custom') {
            $signatures[] = 'link:' . strtolower($spec['title']) . '|' . $spec['url'];
        } else {
            $signatures[] = 'link:' . strtolower($spec['title']) . '|/' . $spec['slug'] . '/';
        }
    }
    return $signatures;
}

function ktr_diving_phase3_analyse_children_20260713($children) {
    $actual = array_map('ktr_diving_phase3_item_signature_20260713', $children);
    $expected = ktr_diving_phase3_expected_signatures_20260713();
    return array(
        'actual' => $actual,
        'expected' => $expected,
        'matches_expected' => $actual === $expected,
    );
}

function ktr_diving_phase3_validate_targets_20260713(&$report) {
    $required = array(
        'diving-in-koh-tao',
        'try-scuba-koh-tao',
        'open-water-course-koh-tao',
        'choosing-a-dive-school-koh-tao',
        'fun-diving-koh-tao',
        'chumphon-pinnacle',
        'sattakut-wreck',
        'sail-rock',
    );

    $pages = array();
    foreach ($required as $slug) {
        $page = ktr_diving_phase3_get_page_by_slug_20260713($slug);
        if (!$page) {
            $report['missing_pages'][] = $slug;
            continue;
        }
        $pages[$slug] = $page;
    }

    return $pages;
}

function ktr_diving_phase3_add_anchor_if_needed_20260713($pages, &$report, $mode) {
    if (empty($pages['diving-in-koh-tao'])) {
        return;
    }

    $page = $pages['diving-in-koh-tao'];
    $content = $page->post_content;
    $target = '<h2 id="koh-tao-dive-site-guides" style="scroll-margin-top:100px;">Koh Tao Dive Site Guides</h2>';

    if (strpos($content, 'id="koh-tao-dive-site-guides"') !== false) {
        $report['unchanged'][] = ktr_diving_phase3_menu_report_entry_20260713('hub_anchor', array('value' => 'already_present'));
        return;
    }

    $needle = '<h2>Koh Tao Dive Site Guides</h2>';
    $count = substr_count($content, $needle);
    if ($count !== 1) {
        $report['refused'][] = array('reason' => 'hub_anchor_heading_count_unexpected', 'count' => $count);
        return;
    }

    $report['changes'][] = ktr_diving_phase3_menu_report_entry_20260713('hub_anchor', array('action' => 'add_id_to_existing_h2'));

    if ($mode !== 'apply') {
        return;
    }

    global $wpdb;
    $updated = $wpdb->update(
        $wpdb->posts,
        array(
            'post_content' => str_replace($needle, $target, $content),
            'post_modified' => current_time('mysql'),
            'post_modified_gmt' => current_time('mysql', 1),
        ),
        array('ID' => (int) $page->ID),
        array('%s', '%s', '%s'),
        array('%d')
    );

    if ($updated === false) {
        $report['refused'][] = array('reason' => 'hub_anchor_update_failed', 'message' => $wpdb->last_error);
        return;
    }

    clean_post_cache((int) $page->ID);
}

function ktr_diving_phase3_menu_item_args_20260713($spec, $parent_id, $pages) {
    $base = array(
        'menu-item-parent-id' => (int) $parent_id,
        'menu-item-status' => 'publish',
        'menu-item-description' => '',
        'menu-item-attr-title' => '',
        'menu-item-target' => '',
        'menu-item-xfn' => '',
    );

    if ($spec['kind'] === 'label') {
        return array_merge($base, array(
            'menu-item-title' => $spec['title'],
            'menu-item-type' => 'custom',
            'menu-item-url' => '#',
            'menu-item-classes' => 'ktr-menu-group-label',
        ));
    }

    if ($spec['kind'] === 'custom') {
        return array_merge($base, array(
            'menu-item-title' => $spec['title'],
            'menu-item-type' => 'custom',
            'menu-item-url' => $spec['url'],
            'menu-item-classes' => '',
        ));
    }

    return array_merge($base, array(
        'menu-item-title' => $spec['title'],
        'menu-item-type' => 'post_type',
        'menu-item-object' => 'page',
        'menu-item-object-id' => (int) $pages[$spec['slug']]->ID,
        'menu-item-classes' => '',
    ));
}

function ktr_diving_phase3_rebuild_children_20260713($menu_id, $parent_id, $children, $pages, &$report, $mode) {
    foreach ($children as $child) {
        $report['changes'][] = ktr_diving_phase3_menu_report_entry_20260713('menu_item', array('action' => 'remove_old_or_nonmatching_child', 'item_id' => (int) $child->ID, 'title' => $child->title, 'url' => $child->url));
        if ($mode === 'apply') {
            wp_delete_post((int) $child->ID, true);
        }
    }

    foreach (ktr_diving_phase3_menu_item_specs_20260713() as $spec) {
        $report['changes'][] = ktr_diving_phase3_menu_report_entry_20260713('menu_item', array('action' => 'create_child', 'title' => $spec['title'], 'kind' => $spec['kind']));
        if ($mode === 'apply') {
            $new_id = wp_update_nav_menu_item((int) $menu_id, 0, ktr_diving_phase3_menu_item_args_20260713($spec, $parent_id, $pages));
            if (is_wp_error($new_id)) {
                $report['refused'][] = array('reason' => 'menu_item_create_failed', 'title' => $spec['title'], 'message' => $new_id->get_error_message());
            }
        }
    }
}

function ktr_diving_phase3_run_20260713($mode = 'dry-run') {
    $mode = ($mode === 'apply') ? 'apply' : 'dry-run';
    $report = array(
        'mode' => $mode,
        'status' => null,
        'menu' => null,
        'diving_parent' => null,
        'missing_pages' => array(),
        'refused' => array(),
        'changes' => array(),
        'unchanged' => array(),
        'notes' => array(
            'normal_page_loads_do_not_run_migration',
            'menu_matched_by_primary_location_and_main_menu_slug',
            'diving_parent_matched_by_title_and_url',
            'flat_dropdown_with_nonclickable_group_labels',
            'no_continue_training_or_go_pro_links_added',
        ),
    );

    $pages = ktr_diving_phase3_validate_targets_20260713($report);
    $menu = ktr_diving_phase3_get_menu_20260713($report);
    if ($menu) {
        $report['menu'] = array('term_id' => (int) $menu->term_id, 'name' => $menu->name, 'slug' => $menu->slug, 'location' => 'primary');
    }

    if ($report['missing_pages'] || $report['refused'] || !$menu) {
        $report['status'] = 'refused_preflight_failed';
        return $report;
    }

    $items = ktr_diving_phase3_get_menu_items_20260713((int) $menu->term_id);
    $parent = ktr_diving_phase3_find_diving_parent_20260713($items, $report);
    if (!$parent) {
        $report['status'] = 'refused_preflight_failed';
        return $report;
    }
    $report['diving_parent'] = array('item_id' => (int) $parent->ID, 'title' => $parent->title, 'url' => $parent->url);

    $children = array_values(array_filter($items, function ($item) use ($parent) {
        return (int) $item->menu_item_parent === (int) $parent->ID;
    }));

    $analysis = ktr_diving_phase3_analyse_children_20260713($children);
    if ($analysis['matches_expected']) {
        $report['unchanged'][] = ktr_diving_phase3_menu_report_entry_20260713('menu_children', array('value' => 'already_current'));
    } else {
        $seen = array_count_values($analysis['actual']);
        foreach ($seen as $signature => $count) {
            if ($count > 1) {
                $report['refused'][] = array('reason' => 'duplicate_existing_diving_child_signature', 'signature' => $signature, 'count' => $count);
            }
        }

        if (!$report['refused']) {
            ktr_diving_phase3_rebuild_children_20260713((int) $menu->term_id, (int) $parent->ID, $children, $pages, $report, $mode);
        }
    }

    ktr_diving_phase3_add_anchor_if_needed_20260713($pages, $report, $mode);

    if ($report['refused']) {
        $report['status'] = 'refused_unexpected_state';
        return $report;
    }

    $report['status'] = $report['changes'] ? ($mode === 'apply' ? 'applied' : 'dry_run_only_no_changes_applied') : 'already_current';
    return $report;
}

function ktr_diving_phase3_output_20260713($report) {
    $json = wp_json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if (PHP_SAPI === 'cli') {
        echo $json . PHP_EOL;
        return;
    }
    wp_die('<pre>' . esc_html($json) . '</pre>');
}

function ktr_diving_phase3_maybe_run_20260713() {
    $mode = null;

    if (PHP_SAPI === 'cli' && defined('KTR_DIVING_SECTION_PHASE3_MENU_20260713')) {
        $mode = (string) KTR_DIVING_SECTION_PHASE3_MENU_20260713;
    } elseif (is_admin() && isset($_GET['ktr_diving_section_phase3_menu_20260713'])) {
        if (!current_user_can('manage_options')) {
            wp_die('Not allowed', 403);
        }
        check_admin_referer('ktr_diving_section_phase3_menu_20260713');
        $mode = sanitize_key(wp_unslash($_GET['ktr_diving_section_phase3_menu_20260713']));
    }

    if ($mode === null) {
        return;
    }

    if ($mode !== 'dry-run' && $mode !== 'apply') {
        ktr_diving_phase3_output_20260713(array(
            'status' => 'invalid_mode',
            'allowed_modes' => array('dry-run', 'apply'),
        ));
        return;
    }

    ktr_diving_phase3_output_20260713(ktr_diving_phase3_run_20260713($mode));
}
add_action('init', 'ktr_diving_phase3_maybe_run_20260713', 99);

function ktr_diving_phase3_menu_group_link_attributes_20260713($atts, $item) {
    $classes = is_array($item->classes) ? $item->classes : array();
    if (!in_array('ktr-menu-group-label', $classes, true)) {
        return $atts;
    }

    unset($atts['href']);
    $atts['role'] = 'presentation';
    $atts['aria-disabled'] = 'true';
    $atts['tabindex'] = '-1';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ktr_diving_phase3_menu_group_link_attributes_20260713', 10, 2);

function ktr_diving_phase3_menu_group_styles_20260713() {
    ?>
    <style id="ktr-diving-phase3-menu-styles">
        .pagelayer-wp_menu-ul .ktr-menu-group-label > a {
            cursor: default;
            font-weight: 700;
            opacity: .78;
            text-transform: uppercase;
            letter-spacing: 0;
            font-size: .86em;
        }
        .pagelayer-wp_menu-ul .ktr-menu-group-label > a:hover,
        .pagelayer-wp_menu-ul .ktr-menu-group-label > a:focus {
            text-decoration: none;
        }
    </style>
    <?php
}
add_action('wp_head', 'ktr_diving_phase3_menu_group_styles_20260713', 40);
