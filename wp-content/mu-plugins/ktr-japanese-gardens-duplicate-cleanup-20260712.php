<?php
/**
 * Plugin Name: KohTao.Rocks Japanese Gardens Duplicate Cleanup 2026-07-12
 * Description: Guarded follow-up migration to draft the duplicate Japanese Gardens page and clean internal links. Does nothing unless explicitly triggered.
 *
 * One-time follow-up content migration dated 12 July 2026.
 *
 * Purpose:
 * - Draft the duplicate /japanese-gardens/ page without deleting it.
 * - Remove internal links to /japanese-gardens/.
 * - Preserve /koh-nang-yuan/ for island visits, shore snorkelling and visitor rules.
 * - Preserve /japanese-gardens-dive-site/ for dive-site information.
 *
 * IMPORTANT:
 * - Normal page loads do nothing.
 * - Do not rerun after later manual page edits without reviewing dry-run output.
 * - This migration matches pages by slug, refuses missing expected pages, and
 *   does not create pages, change menus, add redirects, upload media or run
 *   any broader content migration.
 *
 * Dry run:
 *   php -r "define('KTR_JAPANESE_GARDENS_CLEANUP_20260712','dry-run'); require 'wp-load.php';"
 *
 * Apply:
 *   php -r "define('KTR_JAPANESE_GARDENS_CLEANUP_20260712','apply'); require 'wp-load.php';"
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_japanese_gardens_cleanup_expected_slugs_20260712() {
    return array(
        'japanese-gardens',
        'koh-nang-yuan',
        'japanese-gardens-dive-site',
        'best-beaches-koh-tao',
        'diving-in-koh-tao',
    );
}

function ktr_japanese_gardens_cleanup_replacements_20260712() {
    return array(
        'koh-nang-yuan' => array(
            array(
                'description' => 'Remove duplicate Japanese Gardens beach-page link from Koh Nang Yuan related links.',
                'from' => '<p><a href="/japanese-gardens/">Japanese Gardens</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a></p>',
                'to' => '<p><a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a></p>',
            ),
        ),
        'japanese-gardens-dive-site' => array(
            array(
                'description' => 'Replace duplicate Japanese Gardens snorkelling page link with the Koh Nang Yuan visitor page.',
                'from' => '<p><a href="/japanese-gardens/">Japanese Gardens Snorkelling</a> | <a href="/koh-nang-yuan/">Koh Nang Yuan</a> | <a href="/twins/">Twins</a></p>',
                'to' => '<p><a href="/koh-nang-yuan/">Koh Nang Yuan</a> | <a href="/twins/">Twins</a></p>',
            ),
        ),
    );
}

function ktr_japanese_gardens_cleanup_get_page_20260712($slug) {
    $page = get_page_by_path($slug, OBJECT, 'page');
    if (!$page || $page->post_name !== $slug) {
        return null;
    }

    return $page;
}

function ktr_japanese_gardens_cleanup_run_20260712($mode = 'dry-run') {
    global $wpdb;

    $mode = ($mode === 'apply') ? 'apply' : 'dry-run';
    $report = array(
        'mode' => $mode,
        'status' => null,
        'checked_slugs' => ktr_japanese_gardens_cleanup_expected_slugs_20260712(),
        'missing' => array(),
        'changes' => array(),
        'unchanged' => array(),
        'refused' => array(),
    );

    foreach (ktr_japanese_gardens_cleanup_expected_slugs_20260712() as $slug) {
        if (!ktr_japanese_gardens_cleanup_get_page_20260712($slug)) {
            $report['missing'][] = $slug;
        }
    }

    if ($report['missing']) {
        $report['status'] = 'refused_missing_expected_pages';
        return $report;
    }

    $duplicate = ktr_japanese_gardens_cleanup_get_page_20260712('japanese-gardens');
    if ($duplicate->post_status !== 'draft') {
        $report['changes'][] = array(
            'slug' => 'japanese-gardens',
            'field' => 'post_status',
            'from' => $duplicate->post_status,
            'to' => 'draft',
        );
    } else {
        $report['unchanged'][] = array(
            'slug' => 'japanese-gardens',
            'field' => 'post_status',
            'value' => 'draft',
        );
    }

    foreach (ktr_japanese_gardens_cleanup_replacements_20260712() as $slug => $replacements) {
        $page = ktr_japanese_gardens_cleanup_get_page_20260712($slug);
        $content = $page->post_content;
        $new_content = $content;
        $page_changes = array();

        foreach ($replacements as $replacement) {
            $count = substr_count($new_content, $replacement['from']);
            if ($count > 1) {
                $report['refused'][] = array(
                    'slug' => $slug,
                    'reason' => 'replacement fragment appears more than once',
                    'description' => $replacement['description'],
                    'count' => $count,
                );
                continue;
            }

            if ($count === 1) {
                $new_content = str_replace($replacement['from'], $replacement['to'], $new_content);
                $page_changes[] = array(
                    'description' => $replacement['description'],
                    'from' => $replacement['from'],
                    'to' => $replacement['to'],
                );
                continue;
            }

            if (strpos($new_content, $replacement['to']) !== false) {
                $report['unchanged'][] = array(
                    'slug' => $slug,
                    'field' => 'post_content',
                    'description' => $replacement['description'],
                    'value' => 'already_updated',
                );
            } else {
                $report['refused'][] = array(
                    'slug' => $slug,
                    'reason' => 'expected fragment not found and replacement not already present',
                    'description' => $replacement['description'],
                );
            }
        }

        if ($page_changes) {
            $report['changes'][] = array(
                'slug' => $slug,
                'field' => 'post_content',
                'updates' => $page_changes,
            );
        }
    }

    if ($report['refused']) {
        $report['status'] = 'refused_unexpected_content_state';
        return $report;
    }

    if ($mode !== 'apply') {
        $report['status'] = 'dry_run_only_no_changes_applied';
        return $report;
    }

    foreach ($report['changes'] as $change) {
        if ($change['slug'] === 'japanese-gardens' && $change['field'] === 'post_status') {
            $wpdb->update(
                $wpdb->posts,
                array(
                    'post_status' => 'draft',
                    'post_modified' => current_time('mysql'),
                    'post_modified_gmt' => current_time('mysql', 1),
                ),
                array('ID' => $duplicate->ID),
                array('%s', '%s', '%s'),
                array('%d')
            );
            clean_post_cache($duplicate->ID);
            continue;
        }

        if ($change['field'] !== 'post_content') {
            continue;
        }

        $page = ktr_japanese_gardens_cleanup_get_page_20260712($change['slug']);
        $content = $page->post_content;
        foreach ($change['updates'] as $update) {
            $content = str_replace($update['from'], $update['to'], $content);
        }

        $wpdb->update(
            $wpdb->posts,
            array(
                'post_content' => $content,
                'post_modified' => current_time('mysql'),
                'post_modified_gmt' => current_time('mysql', 1),
            ),
            array('ID' => $page->ID),
            array('%s', '%s', '%s'),
            array('%d')
        );
        clean_post_cache($page->ID);
    }

    $report['status'] = $report['changes'] ? 'applied' : 'already_current';
    return $report;
}

function ktr_japanese_gardens_cleanup_output_20260712($report) {
    $json = wp_json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if (PHP_SAPI === 'cli') {
        echo $json . PHP_EOL;
        return;
    }

    wp_die('<pre>' . esc_html($json) . '</pre>');
}

function ktr_japanese_gardens_cleanup_maybe_run_20260712() {
    $mode = null;

    if (PHP_SAPI === 'cli' && defined('KTR_JAPANESE_GARDENS_CLEANUP_20260712')) {
        $mode = (string) KTR_JAPANESE_GARDENS_CLEANUP_20260712;
    } elseif (is_admin() && isset($_GET['ktr_japanese_gardens_cleanup_20260712'])) {
        if (!current_user_can('manage_options')) {
            wp_die('Not allowed', 403);
        }
        check_admin_referer('ktr_japanese_gardens_cleanup_20260712');
        $mode = sanitize_key(wp_unslash($_GET['ktr_japanese_gardens_cleanup_20260712']));
    }

    if ($mode === null) {
        return;
    }

    if ($mode !== 'dry-run' && $mode !== 'apply') {
        ktr_japanese_gardens_cleanup_output_20260712(array(
            'status' => 'invalid_mode',
            'allowed_modes' => array('dry-run', 'apply'),
        ));
        return;
    }

    ktr_japanese_gardens_cleanup_output_20260712(ktr_japanese_gardens_cleanup_run_20260712($mode));
}
add_action('plugins_loaded', 'ktr_japanese_gardens_cleanup_maybe_run_20260712', 99);
