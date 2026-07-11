<?php
/**
 * Production-safe combined content migration for /where-to-stay-koh-tao/.
 *
 * Idempotent: replaces the intro, Sairee, Mae Haad and Chalok section span,
 * then leaves Tanote Bay onward untouched.
 */

if ( PHP_SAPI !== 'cli' ) {
	http_response_code( 403 );
	exit( 'CLI only' );
}

$wp_load = __DIR__ . '/wp-load.php';
if ( ! file_exists( $wp_load ) ) {
	echo "Cannot find wp-load.php\n";
	exit( 1 );
}

require_once $wp_load;

global $wpdb;

$page = $wpdb->get_row(
	$wpdb->prepare(
		"SELECT ID, post_content FROM {$wpdb->posts} WHERE post_type = 'page' AND post_name = %s AND post_status NOT IN ('trash', 'auto-draft') LIMIT 1",
		'where-to-stay-koh-tao'
	)
);

if ( ! $page ) {
	echo "Page not found: where-to-stay-koh-tao\n";
	exit( 1 );
}

function ktr_where_stay_wp_text_block( $id, $html ) {
	$widget = array(
		'visual' => false,
		'title'  => '',
		'text'   => $html,
		'legacy' => false,
	);
	$attrs  = array(
		'widget_data'  => wp_json_encode( $widget, JSON_UNESCAPED_SLASHES ),
		'pagelayer-id' => $id,
	);

	return '<!-- wp:pagelayer/pl_wp_text ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES ) . ' -->' . wp_json_encode( $widget, JSON_UNESCAPED_SLASHES ) . '<!-- /wp:pagelayer/pl_wp_text -->';
}

$intro_html = '<div class="kohtao-text">\r\n\r\n<p>Koh Tao offers a wide range of accommodation, from budget hostels and beach bungalows to boutique resorts and private villas. Choosing the right area to stay can make a big difference to your experience on the island.</p>\r\n\r\n<p>Here&rsquo;s a guide to the best areas in Koh Tao and what to expect from each.</p>\r\n\r\n</div>';
$sairee_html = '<h2>1. Sairee Beach &ndash; Best for Nightlife &amp; Convenience</h2>\r\n\r\n<div class="kohtao-text">\r\n\r\n<p><a href="/sairee-beach/">Sairee Beach</a> is the most popular area to stay in Koh Tao. It offers the widest range of accommodation, along with restaurants, bars and nightlife.</p>\r\n\r\n<p>This is a great choice if you want to be in the centre of the action and close to everything.</p>\r\n\r\n</div>';
$mae_haad_html = '<h2>2. Mae Haad &ndash; Best for the Pier, Budget Stays &amp; Convenience</h2>\r\n\r\n<div class="kohtao-text">\r\n\r\n<p>Mae Haad is the island&rsquo;s main arrival point and one of the most practical areas to stay in Koh Tao. It has plenty of budget hostels, guesthouses and resorts, making it popular with travellers arriving or departing by ferry who want everything within easy walking distance.</p>\r\n\r\n<p>It is not the best choice for nightlife or a classic beach holiday, but it is very convenient. There are shops, restaurants, caf&eacute;s, dive centres, pharmacies and other useful services within easy walking distance.</p>\r\n\r\n<p>Mae Haad is especially suitable for short stays, early ferry departures, late arrivals, budget travellers and people who prefer convenience over nightlife.</p>\r\n\r\n</div>';
$chalok_html = '<h2>3. Chalok Baan Kao &ndash; Relaxed &amp; Close to Diving</h2>\r\n\r\n<div class="kohtao-text">\r\n\r\n<p><a href="/chalok-bay/">Chalok Baan Kao</a> offers a quieter, more relaxed atmosphere compared to Sairee. It&rsquo;s popular with divers and those looking for a more laid-back stay.</p>\r\n\r\n<p>This area is close to several dive centres and offers easy access to some of Koh Tao&rsquo;s best dive sites.</p>\r\n\r\n<h3>Recommended places to stay in Chalok</h3>\r\n\r\n<p><a href="https://woodlawnvillas.com/" target="_blank" rel="noopener">Woodlawn Villas</a> is a peaceful option set slightly inland from Chalok Bay, with rooms, villas, family accommodation and a swimming pool. Chalok Reef Divers, an SSI dive centre, is based there, making it a good choice for travellers who want a quieter base with diving close at hand.</p>\r\n\r\n<p><a href="https://www.assavadiveresort.com/" target="_blank" rel="noopener">Assava Dive Resort</a> is a beachfront resort directly on Chalok Bay with accommodation, a swimming pool, restaurant and an on-site PADI dive centre. It suits travellers who want to stay and dive in one place without needing to travel around the island.</p>\r\n\r\n<p><a href="https://hydronautsdiving.com/" target="_blank" rel="noopener">Hydronauts Diving Resort</a> is a beachfront RAID dive resort offering accommodation, a training pool, restaurant, beach bar and diving packages. It suits divers looking for a dive-focused stay in Chalok Bay.</p>\r\n\r\n<p><em>Recommendations are based on location, accommodation style and local knowledge. Some businesses mentioned may be clients, partners or businesses we know personally.</em></p>\r\n\r\n</div>';

$replacement = ktr_where_stay_wp_text_block( 'hfd820', $intro_html ) . "\n"
	. '<!-- wp:pagelayer/pl_image {"id":1641,"id-size":"full","align":"center","img_hover":"normal","img_hover_delay":400,"caption_color":"#0986c0","pagelayer-id":"vbo7349"} /-->' . "\n"
	. ktr_where_stay_wp_text_block( 'ruu4247', $sairee_html ) . "\n"
	. ktr_where_stay_wp_text_block( 'ag5490', $mae_haad_html ) . "\n"
	. ktr_where_stay_wp_text_block( 'jai5674', $chalok_html ) . "\n";

$content = (string) $page->post_content;
$h1_end  = '<!-- /wp:pagelayer/pl_heading -->';
$start   = strpos( $content, $h1_end );

if ( false === $start ) {
	echo "Could not locate heading boundary\n";
	exit( 1 );
}

$start += strlen( $h1_end );
$end    = strpos( $content, '<!-- wp:pagelayer/pl_wp_text', $start );

while ( false !== $end ) {
	$remaining = substr( $content, $end, 1800 );
	if ( false !== strpos( $remaining, '4. Tanote Bay' ) ) {
		break;
	}
	$end = strpos( $content, '<!-- wp:pagelayer/pl_wp_text', $end + 1 );
}

if ( false === $end || $end <= $start ) {
	echo "Could not locate Tanote section boundary\n";
	exit( 1 );
}

$content = substr( $content, 0, $start ) . "\n" . $replacement . substr( $content, $end );

$result = $wpdb->update(
	$wpdb->posts,
	array(
		'post_content'      => $content,
		'post_modified'     => current_time( 'mysql' ),
		'post_modified_gmt' => current_time( 'mysql', true ),
	),
	array( 'ID' => (int) $page->ID ),
	array( '%s', '%s', '%s' ),
	array( '%d' )
);

if ( false === $result ) {
	echo "Database update failed\n";
	exit( 1 );
}

clean_post_cache( (int) $page->ID );
update_option( 'ktr_where_to_stay_polish_version', '2026-07-11-combined-mae-haad-chalok-recs', false );

echo "Updated /where-to-stay-koh-tao/ combined content migration\n";
