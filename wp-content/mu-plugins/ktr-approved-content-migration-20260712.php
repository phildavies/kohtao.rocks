<?php
/**
 * Plugin Name: KohTao.Rocks Approved Content Migration 2026-07-12
 * Description: Guarded one-time migration for approved Where to Stay, Beaches & Bays, and Dive Site content. Does nothing unless explicitly triggered.
 *
 * One-time approved content migration dated 12 July 2026.
 *
 * This file captures the approved local KohTao.Rocks content state for the
 * Where to Stay page, Beaches & Bays hub/pages, and Dive Site hub/pages.
 * It is intentionally guarded: normal page loads do nothing.
 *
 * IMPORTANT:
 * - Do not rerun this migration after later manual page edits unless the
 *   dry-run output has been reviewed and the listed page changes are approved.
 * - This migration replaces the stored post_content for the covered slugs.
 *   It is safe and repeatable for the approved state, but a later rerun can
 *   overwrite subsequent manual edits to those page bodies.
 * - The legacy Stage 2/Stage 3 helper scripts in tools/ are obsolete and must
 *   not be rerun; they contain older generator wording that this migration
 *   supersedes.
 * - Pages are matched by slug and missing pages cause a refusal report. This
 *   migration does not create pages, change menus, add redirects, upload media,
 *   or run on ordinary requests.
 *
 * Dry run:
 *   php -r "define('KTR_APPROVED_CONTENT_MIGRATION_20260712','dry-run'); require 'wp-load.php';"
 *
 * Apply:
 *   php -r "define('KTR_APPROVED_CONTENT_MIGRATION_20260712','apply'); require 'wp-load.php';"
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_approved_content_migration_pages_20260712() {
    return array (
  'where-to-stay-koh-tao' => 
  array (
    'title' => 'Where to Stay in Koh Tao',
    'content' => '<!-- wp:pagelayer/pl_post_props {"post_title":"Where to Stay in Koh Tao","post_status":"publish","post_date":"2026-03-17 07:42:06","post_author":"1","post_name":"where-to-stay-koh-tao","featured_image":"/wp-content/plugins/pagelayer/images/default-image.png","pagelayer-id":"t9f3271"} /-->
<!-- wp:pagelayer/pl_row {"stretch":"auto","col_gap":"10","width_content":"auto","row_height":"default","overlay_hover_delay":"400","row_shape_top_color":"#227bc3","row_shape_top_width":"100","row_shape_top_height":"100","row_shape_bottom_color":"#e44993","row_shape_bottom_width":"100","row_shape_bottom_height":"100","pagelayer-id":"y568425"} -->
<!-- wp:pagelayer/pl_col {"overlay_hover_delay":"400","pagelayer-id":"llw5278"} -->
<!-- wp:pagelayer/pl_heading {"text":"\\u003ch1\\u003eWhere to Stay in Koh Tao â€“ Best Areas \\u0026 Accommodation Guide\\u003c/h1\\u003e","heading_state":"normal","pagelayer-id":"wti4975"} --><h1>Where to Stay in Koh Tao â€“ Best Areas & Accommodation Guide</h1><!-- /wp:pagelayer/pl_heading -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<div class=\\\\\\"kohtao-text\\\\\\"><p>Koh Tao offers a wide range of accommodation, from budget hostels and beach bungalows to boutique resorts and private villas. Choosing the right area to stay can make a big difference to your experience on the island.</p><p>Here&rsquo;s a guide to the best areas in Koh Tao and what to expect from each.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"hfd820"} -->{"visual":false,"title":"","text":"<div class=\\"kohtao-text\\"><p>Koh Tao offers a wide range of accommodation, from budget hostels and beach bungalows to boutique resorts and private villas. Choosing the right area to stay can make a big difference to your experience on the island.</p><p>Here&rsquo;s a guide to the best areas in Koh Tao and what to expect from each.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_image {"id":1641,"id-size":"full","align":"center","img_hover":"normal","img_hover_delay":400,"caption_color":"#0986c0","pagelayer-id":"vbo7349"} /-->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>1. Sairee Beach &ndash; Best for Nightlife &amp; Convenience</h2><div class=\\\\\\"kohtao-text\\\\\\"><p><a href=\\\\\\"/sairee-beach/\\\\\\">Sairee Beach</a> is the most popular area to stay in Koh Tao. It offers the widest range of accommodation, along with restaurants, bars and nightlife.</p><p>This is a great choice if you want to be in the centre of the action and close to everything.</p><h3>Recommended places to stay in Sairee</h3><p><a href=\\\\\\"https://www.savagekohtao.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Savage Hostel Koh Tao</a> is a modern social hostel in central Sairee, with dormitory pods, private rooms and suites. It suits solo travellers, backpackers and anyone who wants nightlife close by, but the lively central location may not suit people looking for quiet evenings.</p><p><a href=\\\\\\"https://silversands-resort.com/en/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Silver Sands Resort</a> is a practical central Sairee resort with nightly rooms, bungalows and monthly accommodation options. It works well for couples, divers, longer stays and travellers who want the beach, restaurants and nightlife within easy reach.</p><p><a href=\\\\\\"https://www.saireecottageresort.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Sairee Cottage Resort</a> is a central beachfront resort with bungalows, rooms and family-friendly accommodation. It suits first-time visitors, couples and families who want the beach, restaurants, nightlife and dive centres within easy walking distance.</p><p><a href=\\\\\\"https://www.kohtaosimpleliferesort.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Simple Life Resort</a> is the original Simple Life property in central Sairee, close to both Sairee Village and the beach. It is a useful mid-range option for couples and first-time visitors who want a swimming pool and a convenient base; this recommendation is for Simple Life Resort, not Simple Life Talay or Simple Life Cliff View.</p><p><a href=\\\\\\"https://www.kohtaocabana.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Koh Tao Cabana</a> is a quieter higher-end resort at the northern end of Sairee, with villa-style accommodation including pool villas, cottages and treehouse options. It suits couples and special trips where access to Sairee is useful, but being away from the busiest central nightlife is part of the appeal.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"ruu4247"} -->{"visual":false,"title":"","text":"<h2>1. Sairee Beach &ndash; Best for Nightlife &amp; Convenience</h2><div class=\\"kohtao-text\\"><p><a href=\\"/sairee-beach/\\">Sairee Beach</a> is the most popular area to stay in Koh Tao. It offers the widest range of accommodation, along with restaurants, bars and nightlife.</p><p>This is a great choice if you want to be in the centre of the action and close to everything.</p><h3>Recommended places to stay in Sairee</h3><p><a href=\\"https://www.savagekohtao.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Savage Hostel Koh Tao</a> is a modern social hostel in central Sairee, with dormitory pods, private rooms and suites. It suits solo travellers, backpackers and anyone who wants nightlife close by, but the lively central location may not suit people looking for quiet evenings.</p><p><a href=\\"https://silversands-resort.com/en/\\" target=\\"_blank\\" rel=\\"noopener\\">Silver Sands Resort</a> is a practical central Sairee resort with nightly rooms, bungalows and monthly accommodation options. It works well for couples, divers, longer stays and travellers who want the beach, restaurants and nightlife within easy reach.</p><p><a href=\\"https://www.saireecottageresort.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Sairee Cottage Resort</a> is a central beachfront resort with bungalows, rooms and family-friendly accommodation. It suits first-time visitors, couples and families who want the beach, restaurants, nightlife and dive centres within easy walking distance.</p><p><a href=\\"https://www.kohtaosimpleliferesort.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Simple Life Resort</a> is the original Simple Life property in central Sairee, close to both Sairee Village and the beach. It is a useful mid-range option for couples and first-time visitors who want a swimming pool and a convenient base; this recommendation is for Simple Life Resort, not Simple Life Talay or Simple Life Cliff View.</p><p><a href=\\"https://www.kohtaocabana.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Koh Tao Cabana</a> is a quieter higher-end resort at the northern end of Sairee, with villa-style accommodation including pool villas, cottages and treehouse options. It suits couples and special trips where access to Sairee is useful, but being away from the busiest central nightlife is part of the appeal.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>2. Mae Haad &ndash; Best for the Pier, Budget Stays &amp; Convenience</h2><div class=\\\\\\"kohtao-text\\\\\\"><p>Mae Haad is the island&rsquo;s main arrival point and one of the most practical areas to stay in Koh Tao. It has plenty of budget hostels, guesthouses and resorts, making it popular with travellers arriving or departing by ferry who want everything within easy walking distance.</p><p>It is not the best choice for nightlife or a classic beach holiday, but it is very convenient. There are shops, restaurants, caf&eacute;s, dive centres, pharmacies and other useful services within easy walking distance.</p><p>Mae Haad is especially suitable for short stays, early ferry departures, late arrivals, budget travellers and people who prefer convenience over nightlife.</p><h3>Recommended places to stay in Mae Haad</h3><p><a href=\\\\\\"https://www.kohtaomontra.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Koh Tao Montra Resort</a> is a larger beachfront resort near Mae Haad pier, towards the Sairee side, with a pool, family accommodation and diving facilities. It suits families, divers and travellers wanting a more full-service stay while still being close to the arrival point.</p><p><a href=\\\\\\"https://www.luckekohtao.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">L&uuml;cke Boutique Hotel</a> is a small adults-only beachfront hotel in Mae Haad Bay, currently welcoming guests aged 16 and above. It suits couples and adults wanting a stylish stay close to the pier, restaurants and bars; the property notes that some nearby noise can be expected.</p><p><a href=\\\\\\"https://cliffview.kohtaosimpleliferesort.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Simple Life Cliff View Resort</a> sits between Mae Haad and southern Sairee, with suites and resort accommodation overlooking the bay. It suits couples, families needing larger units and travellers who want access to both Mae Haad and Sairee, with a quieter edge-of-area feel than central Mae Haad.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"ag5490"} -->{"visual":false,"title":"","text":"<h2>2. Mae Haad &ndash; Best for the Pier, Budget Stays &amp; Convenience</h2><div class=\\"kohtao-text\\"><p>Mae Haad is the island&rsquo;s main arrival point and one of the most practical areas to stay in Koh Tao. It has plenty of budget hostels, guesthouses and resorts, making it popular with travellers arriving or departing by ferry who want everything within easy walking distance.</p><p>It is not the best choice for nightlife or a classic beach holiday, but it is very convenient. There are shops, restaurants, caf&eacute;s, dive centres, pharmacies and other useful services within easy walking distance.</p><p>Mae Haad is especially suitable for short stays, early ferry departures, late arrivals, budget travellers and people who prefer convenience over nightlife.</p><h3>Recommended places to stay in Mae Haad</h3><p><a href=\\"https://www.kohtaomontra.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Koh Tao Montra Resort</a> is a larger beachfront resort near Mae Haad pier, towards the Sairee side, with a pool, family accommodation and diving facilities. It suits families, divers and travellers wanting a more full-service stay while still being close to the arrival point.</p><p><a href=\\"https://www.luckekohtao.com/\\" target=\\"_blank\\" rel=\\"noopener\\">L&uuml;cke Boutique Hotel</a> is a small adults-only beachfront hotel in Mae Haad Bay, currently welcoming guests aged 16 and above. It suits couples and adults wanting a stylish stay close to the pier, restaurants and bars; the property notes that some nearby noise can be expected.</p><p><a href=\\"https://cliffview.kohtaosimpleliferesort.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Simple Life Cliff View Resort</a> sits between Mae Haad and southern Sairee, with suites and resort accommodation overlooking the bay. It suits couples, families needing larger units and travellers who want access to both Mae Haad and Sairee, with a quieter edge-of-area feel than central Mae Haad.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>3. Chalok Baan Kao &ndash; Relaxed &amp; Close to Diving</h2><div class=\\\\\\"kohtao-text\\\\\\"><p><a href=\\\\\\"/chalok-bay/\\\\\\">Chalok Baan Kao</a> offers a quieter, more relaxed atmosphere compared to Sairee. It&rsquo;s popular with divers and those looking for a more laid-back stay.</p><p>This area is close to several dive centres and offers easy access to some of Koh Tao&rsquo;s best dive sites.</p><h3>Recommended places to stay in Chalok</h3><p><a href=\\\\\\"https://woodlawnvillas.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Woodlawn Villas</a> is a peaceful option set slightly inland from Chalok Bay, with rooms, villas, family accommodation and a swimming pool. Chalok Reef Divers, an SSI dive centre, is based there, making it a good choice for travellers who want a quieter base with diving close at hand.</p><p><a href=\\\\\\"https://www.assavadiveresort.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Assava Dive Resort</a> is a beachfront resort directly on Chalok Bay with accommodation, a swimming pool, restaurant and an on-site PADI dive centre. It suits travellers who want to stay and dive in one place without needing to travel around the island.</p><p><a href=\\\\\\"https://hydronautsdiving.com/\\\\\\" target=\\\\\\"_blank\\\\\\" rel=\\\\\\"noopener\\\\\\">Hydronauts Diving Resort</a> is a beachfront RAID dive resort offering accommodation, a training pool, restaurant, beach bar and diving packages. It suits divers looking for a dive-focused stay in Chalok Bay.</p><p><em>Accommodation recommendations on this page are based on location, accommodation style and local knowledge. Some businesses mentioned may be clients, partners or businesses we know personally.</em></p></div>\\",\\"legacy\\":false}","pagelayer-id":"jai5674"} -->{"visual":false,"title":"","text":"<h2>3. Chalok Baan Kao &ndash; Relaxed &amp; Close to Diving</h2><div class=\\"kohtao-text\\"><p><a href=\\"/chalok-bay/\\">Chalok Baan Kao</a> offers a quieter, more relaxed atmosphere compared to Sairee. It&rsquo;s popular with divers and those looking for a more laid-back stay.</p><p>This area is close to several dive centres and offers easy access to some of Koh Tao&rsquo;s best dive sites.</p><h3>Recommended places to stay in Chalok</h3><p><a href=\\"https://woodlawnvillas.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Woodlawn Villas</a> is a peaceful option set slightly inland from Chalok Bay, with rooms, villas, family accommodation and a swimming pool. Chalok Reef Divers, an SSI dive centre, is based there, making it a good choice for travellers who want a quieter base with diving close at hand.</p><p><a href=\\"https://www.assavadiveresort.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Assava Dive Resort</a> is a beachfront resort directly on Chalok Bay with accommodation, a swimming pool, restaurant and an on-site PADI dive centre. It suits travellers who want to stay and dive in one place without needing to travel around the island.</p><p><a href=\\"https://hydronautsdiving.com/\\" target=\\"_blank\\" rel=\\"noopener\\">Hydronauts Diving Resort</a> is a beachfront RAID dive resort offering accommodation, a training pool, restaurant, beach bar and diving packages. It suits divers looking for a dive-focused stay in Chalok Bay.</p><p><em>Accommodation recommendations on this page are based on location, accommodation style and local knowledge. Some businesses mentioned may be clients, partners or businesses we know personally.</em></p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>4. Tanote Bay &amp; East Coast &ndash; Scenic &amp; Peaceful</h2><div class=\\\\\\"kohtao-text\\\\\\"><p>The east coast of Koh Tao, including Tanote Bay, offers stunning views, quieter beaches and a more remote feel.</p><p>It&rsquo;s ideal if you want to escape the crowds and enjoy nature.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"6bk1980"} -->{"visual":false,"title":"","text":"<h2>4. Tanote Bay &amp; East Coast &ndash; Scenic &amp; Peaceful</h2><div class=\\"kohtao-text\\"><p>The east coast of Koh Tao, including Tanote Bay, offers stunning views, quieter beaches and a more remote feel.</p><p>It&rsquo;s ideal if you want to escape the crowds and enjoy nature.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>5. South Koh Tao &ndash; Quiet &amp; Secluded</h2><div class=\\\\\\"kohtao-text\\\\\\"><p>The southern part of Koh Tao offers a more peaceful experience, with smaller resorts and quieter beaches.</p><p>This is a good option if you want to relax and enjoy a slower pace of life.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"usc4526"} -->{"visual":false,"title":"","text":"<h2>5. South Koh Tao &ndash; Quiet &amp; Secluded</h2><div class=\\"kohtao-text\\"><p>The southern part of Koh Tao offers a more peaceful experience, with smaller resorts and quieter beaches.</p><p>This is a good option if you want to relax and enjoy a slower pace of life.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>Featured Stay in Koh Tao</h2><div class=\\\\\\"kohtao-text\\\\\\"><p>For a comfortable and relaxing stay in Koh Tao, <strong>Silver Sands Resort</strong> offers a great combination of location, comfort and value.</p><p>Located close to the beach and local amenities, it&rsquo;s a great base for exploring the island or combining your stay with diving and other activities.</p><a href=\\\\\\"https://silversands-resort.com/\\\\\\" target=\\\\\\"_blank\\\\\\" class=\\\\\\"gold-btn big-btn\\\\\\">Check Availability &rarr;</a></div>\\",\\"legacy\\":false}","pagelayer-id":"w281145"} -->{"visual":false,"title":"","text":"<h2>Featured Stay in Koh Tao</h2><div class=\\"kohtao-text\\"><p>For a comfortable and relaxing stay in Koh Tao, <strong>Silver Sands Resort</strong> offers a great combination of location, comfort and value.</p><p>Located close to the beach and local amenities, it&rsquo;s a great base for exploring the island or combining your stay with diving and other activities.</p><a href=\\"https://silversands-resort.com/\\" target=\\"_blank\\" class=\\"gold-btn big-btn\\">Check Availability &rarr;</a></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- wp:pagelayer/pl_wp_text {"widget_data":"{\\"visual\\":false,\\"title\\":\\"\\",\\"text\\":\\"<h2>Plan Your Koh Tao Trip</h2><div class=\\\\\\"kohtao-text\\\\\\"><p>Looking for more ideas? Explore our guides to <a href=\\\\\\"/things-to-do-koh-tao\\\\\\">things to do in Koh Tao</a>, <a href=\\\\\\"/best-beaches-koh-tao\\\\\\">the best beaches</a> or <a href=\\\\\\"/diving-in-koh-tao\\\\\\">scuba diving</a>.</p></div>\\",\\"legacy\\":false}","pagelayer-id":"4po7985"} -->{"visual":false,"title":"","text":"<h2>Plan Your Koh Tao Trip</h2><div class=\\"kohtao-text\\"><p>Looking for more ideas? Explore our guides to <a href=\\"/things-to-do-koh-tao\\">things to do in Koh Tao</a>, <a href=\\"/best-beaches-koh-tao\\">the best beaches</a> or <a href=\\"/diving-in-koh-tao\\">scuba diving</a>.</p></div>","legacy":false}<!-- /wp:pagelayer/pl_wp_text -->
<!-- /wp:pagelayer/pl_col -->
<!-- /wp:pagelayer/pl_row -->
',
  ),
  'best-beaches-koh-tao' => 
  array (
    'title' => 'Best Beaches in Koh Tao 2026 Guide - Top Spots, Maps & Tips',
    'content' => '<h1>Best Beaches and Bays in Koh Tao</h1>
<p>Koh Tao has lively west-coast sunset beaches, shallow south-coast bays, rocky east-coast snorkelling spots and boat-access coves. This guide keeps the existing Koh Tao Rocks beach advice and now links through to dedicated pages for each major beach and bay.</p>
<h2>Quick Planning Notes</h2>
<ul><li>If one side of Koh Tao is windy or choppy, the other side is often calmer.</li><li>Bring cash for access or parking fees at some beaches and viewpoints.</li><li>Use reef-safe sun protection and never stand on coral.</li><li>Remote bays can have steep or rough scooter access; take a taxi or boat if you are not confident.</li><li>Rocky entries are easier with reef shoes or careful footing, especially at Hin Wong and similar bays.</li></ul>
<h2>Beach and Bay Guides</h2>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/sairee-beach/">Sairee Beach</a></h3><p>Koh Tao&#039;s main beach area, sunsets, restaurants, dive schools and nightlife</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/ao-leuk-bay/">Ao Leuk Bay</a></h3><p>clear turquoise water, swimming and easy snorkelling from the beach; also a gentle bay used for beginner diving when calm</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/shark-bay/">Shark Bay / Thian Og</a></h3><p>blacktip reef sharks, occasional turtles, pale sand and resort-style snorkelling</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/hin-wong-bay/">Hin Wong Bay</a></h3><p>rocky east-coast bay, granite boulders and good snorkelling/diving in calm water</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/mango-bay/">Mango Bay</a></h3><p>remote-feeling north coast bay, clear water, boulders, snorkelling and beginner diving</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/chalok-bay/">Chalok Bay</a></h3><p>quiet south-island village/beach base, shallow bay, restaurants and dive schools</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/koh-nang-yuan/">Koh Nang Yuan</a></h3><p>viewpoint, sandbar, turquoise water and Japanese Gardens snorkelling</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/sai-nuan-beach/">Sai Nuan Beach</a></h3><p>quiet southwest beach, old-school Koh Tao feel, bungalows and relaxed shore snorkelling</p></article>
</div>

<h2>Snorkelling and Diving Crossovers</h2>
<p>Several beaches also work as snorkelling or beginner dive areas. See <a href="/snorkeling-trips/">Snorkelling Trips</a> and <a href="/diving-in-koh-tao/">Diving in Koh Tao</a> for the underwater side of the island.</p>
<h2>Preserved Local Advice</h2>
<p>Ao Leuk, Shark Bay, Tanote, Hin Wong and Mango Bay are all condition-dependent. Check the wind, tide and road access before setting off, especially if you are riding a scooter or visiting with children.</p>',
  ),
  'diving-in-koh-tao' => 
  array (
    'title' => 'Diving in Koh Tao',
    'content' => '<h1>Diving in Koh Tao</h1>
<p>Koh Tao has beginner-friendly coral bays, classic training reefs, wreck dives, swim-throughs and deeper offshore pinnacles. This updated hub keeps the existing course and local-dive context while adding dedicated dive-site guides.</p>
<h2>Choose the Right Dive Site</h2>
<ul><li><strong>Beginners and refreshers:</strong> White Rock, Twins, Japanese Gardens, Mango Bay, Ao Leuk and Lighthouse Bay in calm conditions.</li><li><strong>Advanced and deeper dives:</strong> Chumphon Pinnacle, Southwest Pinnacle, Sail Rock, HTMS Sattakut, Green Rock and Shark Island when conditions suit.</li><li><strong>Beach and snorkelling crossover:</strong> Ao Leuk, Hin Wong Bay, Mango Bay and Japanese Gardens have separate visitor pages for non-divers.</li><li><strong>Conditions matter:</strong> currents, visibility and wind direction can change the best site choice on any given day.</li></ul>
<h2>Koh Tao Dive Site Guides</h2>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a></h3><p>pretty shallow east/southeast bay dive with beach/snorkelling crossover</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/chumphon-pinnacle/">Chumphon Pinnacle</a></h3><p>headline offshore pinnacle, anemone-covered top, schooling fish and whale shark reputation</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/green-rock/">Green Rock Dive Site</a></h3><p>granite boulders, swim-throughs, deeper options and triggerfish</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/hin-wong-bay-dive-site/">Hin Wong Bay Dive Site</a></h3><p>rocky east-coast bay with granite boulders, coral pockets and snorkelling crossover</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/sattakut-wreck/">HTMS Sattakut Wreck Koh Tao</a></h3><p>Koh Tao&#039;s main wreck dive with guns, deck structure and artificial reef life</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a></h3><p>shallow coral garden at Koh Nang Yuan for beginner diving and snorkelling</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/laem-thian/">Laem Thian Dive Site</a></h3><p>quieter east-coast boulders, reef, swim-through/cave-style features and remote feel</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/lighthouse-bay/">Lighthouse Bay Dive Site</a></h3><p>quiet shallow north/east bay dive with coral, boulders and snorkelling crossover</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/mango-bay-dive-site/">Mango Bay Dive Site</a></h3><p>sheltered north-coast bay for beginner diving, snorkelling and training</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/junkyard-artificial-reef/">Pottery / Junkyard Artificial Reef</a></h3><p>artificial reef, conservation training, macro life and buoyancy practice</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/red-rock/">Red Rock Dive Site</a></h3><p>Nang Yuan pinnacle and route-style dive toward Japanese Gardens, with cave/swim-through option</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/sail-rock/">Sail Rock Thailand (From Koh Tao)</a></h3><p>Gulf of Thailand headline pinnacle, Chimney swim-through, huge schools and whale shark chance</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/shark-island/">Shark Island Dive Site</a></h3><p>current-swept reef, soft coral, schooling fish and more adventurous local diving</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/southwest-pinnacle/">Southwest Pinnacle Dive Site</a></h3><p>offshore granite pinnacles, schooling fish, deeper profiles and whale shark chances</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/twins/">Twins Dive Site</a></h3><p>beginner training, shallow-to-mid coral pinnacles and easy navigation near Koh Nang Yuan</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/white-rock/">White Rock Dive Site</a></h3><p>classic all-round Koh Tao reef site for courses, fun dives, night dives and refreshers</p></article>
</div>

<h2>Courses, Snorkelling and Next Steps</h2>
<p>New divers can start with <a href="/padi-open-water-course/">Open Water training</a>, try easier sites first, or compare surface options in <a href="/snorkeling-trips/">Snorkelling Trips</a>. For island context, see the <a href="/best-beaches-koh-tao/">beaches and bays guide</a>.</p>
<h2>Preserved Local Advice</h2>
<p>Deeper sites and wreck dives should be matched to certification level, current and comfort. Wreck penetration, swim-throughs and current-prone sites need proper buoyancy and a guide or instructor where appropriate.</p>',
  ),
  'sairee-beach' => 
  array (
    'title' => 'Sairee Beach',
    'content' => '<h1>Sairee Beach</h1>
<p>Koh Tao&#039;s main beach area, sunsets, restaurants, dive schools and nightlife</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> backpackers, divers doing courses, first-time visitors, sunset drinkers, solo travellers and people wanting convenience</li>
<li><strong>Not ideal for:</strong> quiet hideaways, remote nature, best snorkelling or people avoiding nightlife</li>
<li><strong>Vibe:</strong> busy, social, touristy, convenient, beach-bar and sunset focused</li>
<li><strong>Best time:</strong> late afternoon for sunset; morning for quiet walks</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> very easy from Mae Haad by taxi, scooter or walking if staying nearby</li>
<li><strong>Scooter access:</strong> one of the easier areas, but watch traffic, pedestrians, sand, dogs and night-time drinkers</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> normally no entrance fee</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes at higher tide; shallow at low tide</li>
<li><strong>Snorkelling:</strong> okay but not one of Koh Tao&#039;s best snorkel beaches</li>
<li><strong>Marine life:</strong> small reef fish, crabs, juvenile fish and occasional reef patches</li>
<li><strong>Coral:</strong> mixed and shallow; not the main attraction</li>
<li><strong>Conditions:</strong> often calm, but tide and west-side wind matter</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> lots of restaurants, bars, cafes, shops, dive schools, toilets and rentals through businesses</li>
<li><strong>Facilities:</strong> lots of restaurants, bars, cafes, shops, dive schools, toilets and rentals through businesses</li>
<li><strong>Child-friendly:</strong> daytime yes in quieter sections; central Sairee at night is more adult/bar-focused</li>
<li><strong>Bad weather:</strong> convenient in bad weather because facilities are nearby, but beach conditions vary</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> money/card, towel, sunscreen, water, sunglasses, mosquito spray for sunset</li>
<li><strong>Safety:</strong> boats, shallow rocks/coral, broken glass near party areas, scooter traffic and belongings on the beach</li>
<li><strong>Common misunderstanding:</strong> famous does not mean best snorkelling; it means most convenient and social</li>
<li><strong>Local tip:</strong> Go for sunset, food, drinks and people-watching rather than reef life.</li>
<li><strong>Visitor note:</strong> Sairee is where everyone ends up eventually; it is Koh Tao&#039;s social beach, not its wildest beach.</li>
</ul>
<h2>Local Advice</h2>
<p>Sairee is the easiest base for first-time visitors, dive courses, restaurants and sunset. It is lively at night, the north end is usually quieter, and scooter riders should take extra care around sand, pedestrians and late-night traffic.</p>
<h2>Nearby Places</h2>
<p>Mae Haad, Koh Nang Yuan, Mango Viewpoint, west coast sunset bars</p>
<p><a href="/best-beaches-koh-tao/">Best Beaches</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a> | <a href="/where-to-stay-koh-tao/">Where to Stay</a></p>',
  ),
  'ao-leuk-bay' => 
  array (
    'title' => 'Ao Leuk Bay',
    'content' => '<h1>Ao Leuk Bay</h1>
<p>clear turquoise water, swimming and easy snorkelling from the beach; also a gentle bay used for beginner diving when calm</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> snorkellers, swimmers, couples, families with supervision, beginner divers and visitors wanting a prettier east/southeast bay</li>
<li><strong>Not ideal for:</strong> nightlife, lots of restaurants, nervous scooter riders, or rough east-coast weather</li>
<li><strong>Vibe:</strong> pretty, chilled, scenic, snorkel-focused and slightly resort-style</li>
<li><strong>Best time:</strong> morning</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> moderately easy by scooter/taxi/boat, but the road has some steep sections</li>
<li><strong>Scooter access:</strong> not ideal for complete beginners; confident riders are usually fine</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> usually expect a small cash access or resort fee</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes, good when calm</li>
<li><strong>Snorkelling:</strong> yes, one of Koh Tao&#039;s better shore snorkel bays</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, wrasse, sergeant majors, coral patches and sometimes baby blacktip reef sharks</li>
<li><strong>Coral:</strong> easy to reach from shore along the sides of the bay; mixed health, shallow in places, so do not stand</li>
<li><strong>Conditions:</strong> best when east/southeast side is calm; poor in east swell</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> limited beach/resort restaurant facilities, toilets and sunbeds depending on access point</li>
<li><strong>Facilities:</strong> limited beach/resort restaurant facilities, toilets and sunbeds depending on access point</li>
<li><strong>Child-friendly:</strong> yes with supervision</li>
<li><strong>Bad weather:</strong> not ideal if east-coast weather is rough</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, water, towel, snorkel, reef-safe sunscreen, hat, dry bag and grippy sandals</li>
<li><strong>Safety:</strong> steep road, shallow coral, sea urchins, slippery rocks and boat/snorkel traffic</li>
<li><strong>Common misunderstanding:</strong> people expect guaranteed sharks or free public access; neither is guaranteed</li>
<li><strong>Local tip:</strong> Go in the morning, take cash, ride carefully and check the sea first.</li>
<li><strong>Visitor note:</strong> Ao Leuk can look average on a rough day and perfect on a calm one; judge it by conditions.</li>
</ul>
<h2>Local Advice</h2>
<p>Ao Leuk is one of Koh Tao&rsquo;s best all-round beach bays when conditions are calm. Expect a possible access fee, take care on the steep road, and choose a calmer side of the island if the east coast is rough.</p>
<h2>Nearby Places</h2>
<p>Tanote Bay, Sai Daeng, Shark Bay, Hin Ngam and south/east coast viewpoints</p>
<p><a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a> | <a href="/best-beaches-koh-tao/">Best Beaches</a></p>',
  ),
  'shark-bay' => 
  array (
    'title' => 'Shark Bay / Thian Og',
    'content' => '<h1>Shark Bay / Thian Og</h1>
<p>blacktip reef sharks, occasional turtles, pale sand and resort-style snorkelling</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> snorkellers, confident swimmers, couples and south Koh Tao visitors</li>
<li><strong>Not ideal for:</strong> easy free access, nightlife, cheap beach bars, or nervous swimmers scared by the word shark</li>
<li><strong>Vibe:</strong> scenic, quieter, resort-style and snorkel-focused</li>
<li><strong>Best time:</strong> early morning</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> moderate by scooter/taxi/boat; south Koh Tao roads are manageable but hilly</li>
<li><strong>Scooter access:</strong> possible for cautious riders, but taxis/boats are easier for nervous riders</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> expect a land access/resort fee unless visiting by boat or staying there</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes when calm</li>
<li><strong>Snorkelling:</strong> yes, one of Koh Tao&#039;s best-known shark/turtle snorkel areas</li>
<li><strong>Marine life:</strong> blacktip reef sharks, turtles, reef fish, parrotfish, butterflyfish, rays and coral patches</li>
<li><strong>Coral:</strong> shore access can be shallow/awkward; better areas may be easier by boat</li>
<li><strong>Conditions:</strong> depends on south/east wind and swell</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> resort restaurants/bars and facilities, but limited cheap/local choice</li>
<li><strong>Facilities:</strong> resort restaurants/bars and facilities, but limited cheap/local choice</li>
<li><strong>Child-friendly:</strong> beach can be child-friendly, snorkelling better for confident swimmers</li>
<li><strong>Bad weather:</strong> avoid when south/east side is rough</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, water, snorkel gear, towel, reef-safe sunscreen, dry bag, water shoes</li>
<li><strong>Safety:</strong> shallow coral, urchins, boats, current/chop and overconfident snorkellers</li>
<li><strong>Common misunderstanding:</strong> shark sightings are not guaranteed and land access is not always simple/free</li>
<li><strong>Local tip:</strong> Go early, take cash, do not chase wildlife and have a backup if it is choppy.</li>
<li><strong>Visitor note:</strong> Shark Bay is a chance of wildlife, not a zoo. Float quietly and let animals choose the encounter.</li>
</ul>
<h2>Local Advice</h2>
<p>Enter the water carefully, avoid standing on seagrass or coral, and give turtles and blacktip reef sharks plenty of space. Access is often through resorts or by boat, so bring cash and check the current arrangement before travelling.</p>
<h2>Nearby Places</h2>
<p>Chalok, Freedom Beach, John-Suwan Viewpoint, Sai Daeng and Ao Leuk</p>
<p><a href="/snorkeling-trips/">Snorkelling Trips</a> | <a href="/best-beaches-koh-tao/">Best Beaches</a> | <a href="/shark-island/">Shark Island Dive Site</a></p>',
  ),
  'hin-wong-bay' => 
  array (
    'title' => 'Hin Wong Bay',
    'content' => '<h1>Hin Wong Bay</h1>
<p>rocky east-coast bay, granite boulders and good snorkelling/diving in calm water</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> confident swimmers, snorkellers, freedivers, adventurous couples and quiet-bay seekers</li>
<li><strong>Not ideal for:</strong> small children, weak swimmers, nervous scooter riders or lazy sandy beach days</li>
<li><strong>Vibe:</strong> quiet, rocky, natural, east-coast and slightly rustic</li>
<li><strong>Best time:</strong> morning</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> steep by road; easier by taxi or boat</li>
<li><strong>Scooter access:</strong> not recommended for complete beginners</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> bring cash for parking/access/food; small charges possible</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes, but entry is rocky and water can get deep quickly</li>
<li><strong>Snorkelling:</strong> yes, especially around boulders and rocky sides</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, rabbitfish, fusiliers, blue-spotted rays and occasional turtles/blacktips</li>
<li><strong>Coral:</strong> best around boulders and sides; shore access possible for confident swimmers</li>
<li><strong>Conditions:</strong> excellent when calm; poor when east/northeast swell enters</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> a few small rustic cafes/bars, limited facilities</li>
<li><strong>Facilities:</strong> a few small rustic cafes/bars, limited facilities</li>
<li><strong>Child-friendly:</strong> not ideal for small kids; better for older confident swimmers</li>
<li><strong>Bad weather:</strong> avoid in rough east-coast weather</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, water, snorkel, towel, reef-safe sunscreen, grippy sandals, dry bag</li>
<li><strong>Safety:</strong> steep road, slippery rocks, sea urchins, sharp coral, deeper water and boat traffic</li>
<li><strong>Common misunderstanding:</strong> it is more rocky snorkelling bay than soft sandy beach</li>
<li><strong>Local tip:</strong> Go only if calm, ride carefully, and actually get in the water rather than judging from shore.</li>
<li><strong>Visitor note:</strong> Hin Wong rewards effort; it is less comfortable than Sairee but much wilder on the right day.</li>
</ul>
<h2>Local Advice</h2>
<p>Hin Wong is better for confident swimmers than lazy sandy beach days. Entry points can be rocky, the scooter road is not ideal for complete beginners, and reef shoes or careful water entry help.</p>
<h2>Nearby Places</h2>
<p>Mango Bay, Tanote Bay, Laem Thian, east coast viewpoints</p>
<p><a href="/hin-wong-bay-dive-site/">Hin Wong Bay Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a> | <a href="/laem-thian/">Laem Thian</a></p>',
  ),
  'mango-bay' => 
  array (
    'title' => 'Mango Bay',
    'content' => '<h1>Mango Bay</h1>
<p>remote-feeling north coast bay, clear water, boulders, snorkelling and beginner diving</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> snorkellers, divers, boat trips, confident swimmers and quiet-bay seekers</li>
<li><strong>Not ideal for:</strong> nervous scooter riders, easy beach access, nightlife or lots of facilities</li>
<li><strong>Vibe:</strong> remote, scenic, snorkel-focused and easier by boat than land</li>
<li><strong>Best time:</strong> morning</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> easy by boat, difficult by scooter/road</li>
<li><strong>Scooter access:</strong> not recommended for inexperienced riders</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> expect a land access fee if arriving by road; bring cash</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes when calm</li>
<li><strong>Snorkelling:</strong> yes, especially around rocky sides and coral patches</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, wrasse, damselfish, rays and occasional turtles/blacktips</li>
<li><strong>Coral:</strong> best around sides; many visitors enjoy it more by boat</li>
<li><strong>Conditions:</strong> depends on north/northeast swell</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> limited resort/cafe facilities, no village</li>
<li><strong>Facilities:</strong> limited resort/cafe facilities, no village</li>
<li><strong>Child-friendly:</strong> by boat yes with life jackets; by land not ideal</li>
<li><strong>Bad weather:</strong> avoid in north-coast rough weather</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, water, towel, snorkel, reef-safe sunscreen, grippy shoes, dry bag</li>
<li><strong>Safety:</strong> steep road, rocky access, slippery steps, boats, sea urchins and current/chop</li>
<li><strong>Common misunderstanding:</strong> photos don&#039;t show the difficult land access</li>
<li><strong>Local tip:</strong> Go by boat unless you are very confident on a scooter.</li>
<li><strong>Visitor note:</strong> From the water Mango Bay feels easy and perfect; from the road it can feel like a mission.</li>
</ul>
<h2>Local Advice</h2>
<p>Mango Bay is a remote north-coast snorkelling spot that is usually easier by boat than by land. Treat it as a boat-trip bay first unless you are confident with steep access roads and current local arrangements.</p>
<h2>Nearby Places</h2>
<p>Mango Viewpoint, Koh Nang Yuan, Japanese Gardens, Lighthouse Bay</p>
<p><a href="/mango-bay-dive-site/">Mango Bay Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a> | <a href="/lighthouse-bay/">Lighthouse Bay</a></p>',
  ),
  'chalok-bay' => 
  array (
    'title' => 'Chalok Bay',
    'content' => '<h1>Chalok Bay</h1>
<p>quiet south-island village/beach base, shallow bay, restaurants and dive schools</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> families, couples, divers, long-stay visitors and people avoiding Sairee nightlife</li>
<li><strong>Not ideal for:</strong> party-first travellers, best swimming at all tides, or top snorkelling straight from the beach</li>
<li><strong>Vibe:</strong> chilled, local, laid-back and practical</li>
<li><strong>Best time:</strong> higher tide; morning or late afternoon</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> very easy by Koh Tao standards on main roads</li>
<li><strong>Scooter access:</strong> one of the easier areas for inexperienced riders, but still watch traffic and hills</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> no normal entrance fee for main beach</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> good at higher tide, very shallow at low tide</li>
<li><strong>Snorkelling:</strong> not a main snorkel spot; nearby beaches are better</li>
<li><strong>Marine life:</strong> small reef fish, crabs, juvenile fish and sea cucumbers</li>
<li><strong>Coral:</strong> main bay is shallow/sandy with some mixed patches; better coral nearby</li>
<li><strong>Conditions:</strong> usually sheltered, but tide matters most</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> plenty of restaurants, cafes, bars, shops, dive schools and services</li>
<li><strong>Facilities:</strong> plenty of restaurants, cafes, bars, shops, dive schools and services</li>
<li><strong>Child-friendly:</strong> yes, generally family-friendly</li>
<li><strong>Bad weather:</strong> practical in bad weather because facilities are nearby</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash/card, towel, sunscreen, hat, sandals and mosquito spray</li>
<li><strong>Safety:</strong> boats, low-tide shallows, sharp shells/coral, sea urchins, dogs and scooters</li>
<li><strong>Common misunderstanding:</strong> it is a great base, not Koh Tao&#039;s best snorkel beach</li>
<li><strong>Local tip:</strong> Stay here for quiet convenience and south-island access; check tide before judging the beach.</li>
<li><strong>Visitor note:</strong> Chalok makes loads of sense as a base even if the beach itself is not wow at low tide.</li>
</ul>
<h2>Local Advice</h2>
<p>Chalok is a relaxed south-island base with cafes, dive schools and easier roads than the more remote bays. Swimming can be shallow at low tide, so timing makes a difference.</p>
<h2>Nearby Places</h2>
<p>Freedom Beach, Taa Toh, Shark Bay, John-Suwan, Sai Daeng</p>
<p><a href="/where-to-stay-koh-tao/">Where to Stay</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a> | <a href="/best-beaches-koh-tao/">Best Beaches</a></p>',
  ),
  'koh-nang-yuan' => 
  array (
    'title' => 'Koh Nang Yuan',
    'content' => '<h1>Koh Nang Yuan</h1>
<p>viewpoint, sandbar, turquoise water and Japanese Gardens snorkelling</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> first-time visitors, photographers, snorkellers, couples, families and beginner divers</li>
<li><strong>Not ideal for:</strong> quiet free beach days, local village vibe or avoiding crowds/fees</li>
<li><strong>Vibe:</strong> beautiful, touristy, managed and photogenic</li>
<li><strong>Best time:</strong> as early as public access allows</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> boat only from Koh Tao, Koh Phangan or Samui</li>
<li><strong>Scooter access:</strong> no scooter access</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> official day visitor entrance fee applies; bring cash and check current rules</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes around sandbar/beach when calm</li>
<li><strong>Snorkelling:</strong> yes, especially Japanese Gardens</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, anemonefish, clams and corals</li>
<li><strong>Coral:</strong> shallow and accessible but heavily visited, so reef etiquette is important</li>
<li><strong>Conditions:</strong> usually good in calm weather; boat operators judge conditions</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> island restaurant/resort/day-visitor facilities, limited choice and higher prices</li>
<li><strong>Facilities:</strong> island restaurant/resort/day-visitor facilities, limited choice and higher prices</li>
<li><strong>Child-friendly:</strong> yes with supervision; watch heat and viewpoint steps</li>
<li><strong>Bad weather:</strong> not ideal in bad weather or rough boat conditions</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, towel, hat, sunscreen, dry bag, own mask, water if allowed by rules</li>
<li><strong>Safety:</strong> heat, crowds, shallow coral, boats, slippery viewpoint steps</li>
<li><strong>Common misunderstanding:</strong> it is a managed private island experience, not a free empty beach</li>
<li><strong>Local tip:</strong> Go for the view and easy snorkelling, but expect people and rules.</li>
<li><strong>Visitor note:</strong> The photo is calmer than the reality; still worth seeing once.</li>
</ul>
<h2>Local Advice</h2>
<p>Koh Nang Yuan is beautiful but tightly managed, with an entrance fee and stricter environmental rules than most Koh Tao beaches. Rules can include no single-use plastic bottles and reef-protection restrictions, so check the current visitor rules before travelling.</p>
<h2>Nearby Places</h2>
<p>Japanese Gardens, Twins, Sairee, Mae Haad, Mango Bay</p>
<p><a href="/japanese-gardens/">Japanese Gardens</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a></p>',
  ),
  'sai-nuan-beach' => 
  array (
    'title' => 'Sai Nuan Beach',
    'content' => '<h1>Sai Nuan Beach</h1>
<p>quiet southwest beach, old-school Koh Tao feel, bungalows and relaxed shore snorkelling</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> couples, families wanting quiet, relaxed backpackers, snorkellers and beach walkers</li>
<li><strong>Not ideal for:</strong> nightlife, lots of shops/restaurants or guaranteed easy access</li>
<li><strong>Vibe:</strong> quiet, rustic, chilled and beach-bungalow style</li>
<li><strong>Best time:</strong> morning for quiet or late afternoon for light</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> by foot from Mae Haad/Jansom, by boat or via southwest roads</li>
<li><strong>Scooter access:</strong> not the worst, but not ideal for complete beginners on rough/steep access roads</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> access may be free or charged depending on route; bring cash</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes when tide/conditions are good</li>
<li><strong>Snorkelling:</strong> yes, relaxed shore snorkelling around rocks and sides</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, wrasse, crabs, coral patches and urchins</li>
<li><strong>Coral:</strong> easy from shore in patches, mixed health and shallow around rocks</li>
<li><strong>Conditions:</strong> often good when west/southwest is calm</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> small beach bars/bungalows, limited facilities</li>
<li><strong>Facilities:</strong> small beach bars/bungalows, limited facilities</li>
<li><strong>Child-friendly:</strong> generally yes in calm water, access may be harder with small kids</li>
<li><strong>Bad weather:</strong> depends on west/southwest swell; paths can be slippery after rain</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, water, towel, snorkel, reef-safe sunscreen, mosquito spray and grippy sandals</li>
<li><strong>Safety:</strong> slippery paths, rocks, shallow coral, urchins, boats and leaving too late on foot</li>
<li><strong>Common misunderstanding:</strong> quiet does not always mean free/easy; access and fees can vary</li>
<li><strong>Local tip:</strong> Go for a slow quiet beach stop, not facilities or nightlife.</li>
<li><strong>Visitor note:</strong> Sai Nuan still feels like old Koh Tao: simple beach, hammock, snorkel and do nothing.</li>
</ul>
<h2>Local Advice</h2>
<p>Sai Nuan has an old-island feel, with simple beach time, snorkelling and a slower pace. Southwest beaches can involve rougher or steeper access than central areas, so walking or boat access may suit some visitors better than scooters.</p>
<h2>Nearby Places</h2>
<p>Jansom Bay, Tao Thong, June Juea, Mae Haad, Chalok</p>
<p><a href="/best-beaches-koh-tao/">Best Beaches</a> | <a href="/where-to-stay-koh-tao/">Where to Stay</a></p>',
  ),
  'japanese-gardens' => 
  array (
    'title' => 'Japanese Gardens',
    'content' => '<h1>Japanese Gardens</h1>
<p>shallow coral snorkelling and beginner diving at Koh Nang Yuan</p>
<h2>Quick Summary</h2>
<ul>
<li><strong>Best for:</strong> snorkellers, first-time divers, families, Open Water students and calm-water reef seekers</li>
<li><strong>Not ideal for:</strong> quiet remote beaches, advanced divers wanting depth, or people avoiding fees/crowds</li>
<li><strong>Vibe:</strong> pretty, shallow, touristy, coral-garden and training-friendly</li>
<li><strong>Best time:</strong> as early as allowed</li>
</ul>
<h2>Access, Roads and Fees</h2>
<ul>
<li><strong>Getting there:</strong> boat only via Koh Nang Yuan, longtail, snorkel tour or dive boat</li>
<li><strong>Scooter access:</strong> no scooter access; only to departure point</li>
<li><strong>Parking:</strong> Usually limited scooter parking near access points or nearby businesses; it depends on route and season.</li>
<li><strong>Fees:</strong> Koh Nang Yuan entrance fee normally applies if landing on the island</li>
</ul>
<h2>Swimming and Snorkelling</h2>
<ul>
<li><strong>Swimming:</strong> yes around the beach/sandbar when calm</li>
<li><strong>Snorkelling:</strong> yes, excellent and beginner-friendly</li>
<li><strong>Marine life:</strong> reef fish, parrotfish, butterflyfish, angelfish, anemonefish, clams and hard corals</li>
<li><strong>Coral:</strong> shallow and easy to see; fragile and heavily visited, so float rather than stand</li>
<li><strong>Conditions:</strong> usually sheltered but still depends on wind/swell</li>
</ul>
<h2>Facilities and Who It Suits</h2>
<ul>
<li><strong>Food and shops:</strong> Koh Nang Yuan resort/day-visitor facilities; limited and more expensive than Koh Tao</li>
<li><strong>Facilities:</strong> Koh Nang Yuan resort/day-visitor facilities; limited and more expensive than Koh Tao</li>
<li><strong>Child-friendly:</strong> yes with supervision and life jackets for weak swimmers</li>
<li><strong>Bad weather:</strong> not good if boat ride/visibility is poor</li>
</ul>
<h2>Safety and Local Tips</h2>
<ul>
<li><strong>Bring:</strong> cash, towel, hat, reef-safe sunscreen, dry bag, own mask if possible</li>
<li><strong>Safety:</strong> shallow coral, boats, crowds, slippery viewpoint steps and heat</li>
<li><strong>Common misunderstanding:</strong> it is at Koh Nang Yuan, not mainland Koh Tao, and it can be crowded</li>
<li><strong>Local tip:</strong> Go for easy coral and the Nang Yuan scenery, but expect rules, fees and people.</li>
<li><strong>Visitor note:</strong> Float, don&#039;t stand. This is exactly the type of shallow reef tourists accidentally damage.</li>
</ul>
<h2>Local Advice</h2>
<p>Japanese Gardens is the snorkelling and Koh Nang Yuan visitor page, separate from the scuba dive-site page. Expect shallow coral, family-friendly snorkelling, crowds at busy times, entrance fees and reef-protection rules.</p>
<h2>Nearby Places</h2>
<p>Koh Nang Yuan viewpoint, Twins, Sairee, Mae Haad, Mango Bay</p>
<p><a href="/koh-nang-yuan/">Koh Nang Yuan</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/snorkeling-trips/">Snorkelling Trips</a></p>',
  ),
  'white-rock' => 
  array (
    'title' => 'White Rock Dive Site',
    'content' => '<h1>White Rock Dive Site</h1>
<p>classic all-round Koh Tao reef site for courses, fun dives, night dives and refreshers</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> beginners, Open Water students, fun divers, refreshers, photographers, fish ID and buoyancy practice</li>
<li><strong>Not ideal for:</strong> dramatic deep pinnacles, wrecks, guaranteed big fish or quiet empty dives</li>
<li><strong>Vibe:</strong> easy, relaxed, colourful, popular and very classic Koh Tao</li>
<li><strong>Must-do or easy local site:</strong> local classic rather than trophy site</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-22 m, with most dives around 10-18 m</li>
<li><strong>Beginners:</strong> yes, one of the better beginner-friendly local sites</li>
<li><strong>Open Water:</strong> yes, commonly used</li>
<li><strong>Advanced Open Water:</strong> yes, especially night, navigation, buoyancy, fish ID and naturalist</li>
<li><strong>Recommended certification:</strong> Open Water is enough; Advanced useful for night/deeper profiles</li>
<li><strong>Guide recommended:</strong> recommended for new/refreshing divers</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> coral reef, sand patches, granite boulders, bommies, reef slopes and small ledges</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, barracuda and lots of small reef life</li>
<li><strong>Special sightings:</strong> turtles, sea snakes, cuttlefish, Jenkins rays, nudibranchs, pipefish and occasional larger barracuda</li>
<li><strong>Macro life:</strong> yes, if divers slow down</li>
<li><strong>Bigger fish:</strong> moderate; barracuda/trevally possible but not a true pelagic site</li>
<li><strong>Coral and reef scenery:</strong> yes, good mixed reef scenery</li>
<li><strong>Photography:</strong> yes, good for beginner photo/video and night macro</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, often 10-20 m on good days</li>
<li><strong>Current:</strong> usually mild but possible</li>
<li><strong>Weather sensitivity:</strong> can be choppy or murky in bad conditions</li>
<li><strong>Shelter/exposure:</strong> local but somewhat exposed</li>
<li><strong>Wind and sea conditions:</strong> west/northwest conditions can affect it</li>
<li><strong>Hazards:</strong> boat traffic, crowds, buoy lines, current, triggerfish, depth creep and sharp coral</li>
<li><strong>Swim-throughs/caves:</strong> small overhangs/gaps only</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend on mooring, explore deeper reef/boulders first, work shallower and finish near line</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning, afternoon or night dive</li>
<li><strong>Boat time:</strong> 15-25 minutes from Sairee/Mae Haad; longer from Chalok</li>
<li><strong>Night diving:</strong> yes, one of Koh Tao&#039;s classic night sites</li>
<li><strong>Dive schools:</strong> yes, very commonly</li>
<li><strong>Busy with boats:</strong> yes, often</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes in calm conditions, often as a second try dive</li>
<li><strong>Refreshers:</strong> yes, excellent</li>
<li><strong>Deep dives:</strong> moderate</li>
<li><strong>Navigation:</strong> yes</li>
<li><strong>Buoyancy:</strong> yes</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist, navigation, night and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>White Rock is a classic Koh Tao all-rounder and a useful site for courses, refreshers and night dives.</p>
<h2>Nearby Paired Sites</h2>
<p>Twins, Japanese Gardens, Green Rock, Red Rock, HTMS Sattakut, Hin Pee Wee</p>
<p><a href="/twins/">Twins</a> | <a href="/sattakut-wreck/">HTMS Sattakut Wreck</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> its versatility</li>
<li><strong>Manage expectations:</strong> crowds and variable visibility</li>
<li><strong>Best thing:</strong> easy but still interesting</li>
<li><strong>Main downside:</strong> busy training traffic</li>
<li><strong>Tip:</strong> go slow, look under ledges, and don&#039;t dismiss it as just a training site</li>
</ul>
',
  ),
  'twins' => 
  array (
    'title' => 'Twins Dive Site',
    'content' => '<h1>Twins Dive Site</h1>
<p>beginner training, shallow-to-mid coral pinnacles and easy navigation near Koh Nang Yuan</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Open Water students, beginners, refreshers, navigation, buoyancy and relaxed reef dives</li>
<li><strong>Not ideal for:</strong> deep walls, wrecks, big-current adventure or guaranteed big fish</li>
<li><strong>Vibe:</strong> easy, predictable, busy and training-friendly</li>
<li><strong>Must-do or easy local site:</strong> easy local classic</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-18 m</li>
<li><strong>Beginners:</strong> yes, excellent</li>
<li><strong>Open Water:</strong> yes, very commonly</li>
<li><strong>Advanced Open Water:</strong> yes for navigation, buoyancy, fish ID and naturalist; not deep</li>
<li><strong>Recommended certification:</strong> Open Water or student with instructor</li>
<li><strong>Guide recommended:</strong> recommended for beginners</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> coral-covered boulders, sandy bottom, reef patches and three main pinnacle areas</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, juvenile fish and rays</li>
<li><strong>Special sightings:</strong> turtles, sea snakes, cuttlefish, nudibranchs, pipefish and larger barracuda as bonuses</li>
<li><strong>Macro life:</strong> yes, fairly good</li>
<li><strong>Bigger fish:</strong> not especially</li>
<li><strong>Coral and reef scenery:</strong> yes, pleasant shallow reef scenery</li>
<li><strong>Photography:</strong> yes, good for beginners and fish portraits</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, often decent but can be stirred by students</li>
<li><strong>Current:</strong> usually mild</li>
<li><strong>Weather sensitivity:</strong> rough weather can reduce visibility</li>
<li><strong>Shelter/exposure:</strong> fairly sheltered near Koh Nang Yuan</li>
<li><strong>Wind and sea conditions:</strong> north/west/northwest swell can affect it</li>
<li><strong>Hazards:</strong> boat traffic, other groups, shallow coral, triggerfish and poor buoyancy</li>
<li><strong>Swim-throughs/caves:</strong> no major swim-throughs</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend on line, tour pinnacles and sand edges, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning or afternoon</li>
<li><strong>Boat time:</strong> 15-25 minutes from Sairee/Mae Haad</li>
<li><strong>Night diving:</strong> can be good, though White Rock is more classic</li>
<li><strong>Dive schools:</strong> yes, one of the main school sites</li>
<li><strong>Busy with boats:</strong> yes, often very busy</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes in good conditions</li>
<li><strong>Refreshers:</strong> yes, excellent</li>
<li><strong>Deep dives:</strong> not really</li>
<li><strong>Navigation:</strong> yes, excellent</li>
<li><strong>Buoyancy:</strong> yes, excellent</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist, navigation and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Twins is a course-friendly dive site near Koh Nang Yuan, with easy navigation, buoyancy practice and beginner training conditions when visibility is good.</p>
<h2>Nearby Paired Sites</h2>
<p>Japanese Gardens, White Rock, Green Rock, Red Rock</p>
<p><a href="/white-rock/">White Rock</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/koh-nang-yuan/">Koh Nang Yuan</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> easy layout near Nang Yuan and great teaching structure</li>
<li><strong>Manage expectations:</strong> busy training groups</li>
<li><strong>Best thing:</strong> confidence-building easy reef</li>
<li><strong>Main downside:</strong> crowds and stirred-up sand</li>
<li><strong>Tip:</strong> use it to practise proper buoyancy, not just tick off a course dive</li>
</ul>
',
  ),
  'japanese-gardens-dive-site' => 
  array (
    'title' => 'Japanese Gardens Dive Site',
    'content' => '<h1>Japanese Gardens Dive Site</h1>
<p>shallow coral garden at Koh Nang Yuan for beginner diving and snorkelling</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> DSD, Open Water students, snorkellers, families, refreshers and nervous divers</li>
<li><strong>Not ideal for:</strong> advanced divers wanting depth or big fish</li>
<li><strong>Vibe:</strong> shallow, calm, pretty, touristy and training-heavy</li>
<li><strong>Must-do or easy local site:</strong> must-do for beginners/snorkellers, easy site for experienced divers</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 2-14/15 m</li>
<li><strong>Beginners:</strong> yes, one of the easiest</li>
<li><strong>Open Water:</strong> yes, commonly</li>
<li><strong>Advanced Open Water:</strong> only for buoyancy, fish ID, naturalist, photography or navigation</li>
<li><strong>Recommended certification:</strong> none for DSD with instructor; Open Water for certified dives</li>
<li><strong>Guide recommended:</strong> recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> shallow coral garden, reef patches, sand channels and bommies</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, clams, Christmas tree worms and juvenile reef fish</li>
<li><strong>Special sightings:</strong> turtles, sea snakes, cuttlefish, pipefish and small rays as bonuses</li>
<li><strong>Macro life:</strong> yes, for patient divers</li>
<li><strong>Bigger fish:</strong> no</li>
<li><strong>Coral and reef scenery:</strong> yes, the main attraction</li>
<li><strong>Photography:</strong> yes, good light and shallow scenes</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> often decent but can be stirred up</li>
<li><strong>Current:</strong> usually little to mild</li>
<li><strong>Weather sensitivity:</strong> bad weather can affect boat ride and visibility</li>
<li><strong>Shelter/exposure:</strong> generally sheltered</li>
<li><strong>Wind and sea conditions:</strong> Nang Yuan-side wind/swell can affect it</li>
<li><strong>Hazards:</strong> shallow coral, snorkellers, boats, crowds and poor finning</li>
<li><strong>Swim-throughs/caves:</strong> no major swim-throughs</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>shallow descent, slow reef tour, extended shallow finish</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning if possible</li>
<li><strong>Boat time:</strong> 15-25 minutes from Sairee/Mae Haad</li>
<li><strong>Night diving:</strong> possible but not classic</li>
<li><strong>Dive schools:</strong> yes, heavily used</li>
<li><strong>Busy with boats:</strong> yes</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes, one of the best</li>
<li><strong>Refreshers:</strong> yes</li>
<li><strong>Deep dives:</strong> no</li>
<li><strong>Navigation:</strong> basic only</li>
<li><strong>Buoyancy:</strong> yes, excellent</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>This page is scuba-focused and separate from the Japanese Gardens snorkelling page. Around Koh Nang Yuan, rules and crowds can affect the experience, but the site is useful for beginner dives and Open Water training.</p>
<h2>Nearby Paired Sites</h2>
<p>Twins, Red Rock, Green Rock, Mango Bay</p>
<p><a href="/japanese-gardens/">Japanese Gardens Snorkelling</a> | <a href="/koh-nang-yuan/">Koh Nang Yuan</a> | <a href="/twins/">Twins</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> very shallow, snorkel-friendly coral close to Nang Yuan</li>
<li><strong>Manage expectations:</strong> crowds and shallow reef pressure</li>
<li><strong>Best thing:</strong> safe-feeling first reef experience</li>
<li><strong>Main downside:</strong> busy and not advanced</li>
<li><strong>Tip:</strong> float and hover; never stand on the reef</li>
</ul>
',
  ),
  'mango-bay-dive-site' => 
  array (
    'title' => 'Mango Bay Dive Site',
    'content' => '<h1>Mango Bay Dive Site</h1>
<p>sheltered north-coast bay for beginner diving, snorkelling and training</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> beginners, DSD, Open Water students, refreshers, snorkellers and relaxed photographers</li>
<li><strong>Not ideal for:</strong> deep pinnacles, wrecks, big fish or challenging dives</li>
<li><strong>Vibe:</strong> easy, shallow, scenic bay</li>
<li><strong>Must-do or easy local site:</strong> nice easy local site</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 2-15 m, mostly 6-12 m</li>
<li><strong>Beginners:</strong> yes</li>
<li><strong>Open Water:</strong> yes</li>
<li><strong>Advanced Open Water:</strong> only for buoyancy, fish ID, naturalist, photography or navigation</li>
<li><strong>Recommended certification:</strong> Open Water or DSD with instructor</li>
<li><strong>Guide recommended:</strong> recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> sandy bay, coral gardens, rocky sides and shallow reef slopes</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, sea cucumbers and rays</li>
<li><strong>Special sightings:</strong> turtles, sea snakes, cuttlefish, pipefish, nudibranchs and occasional blacktips</li>
<li><strong>Macro life:</strong> moderate</li>
<li><strong>Bigger fish:</strong> no</li>
<li><strong>Coral and reef scenery:</strong> good beginner coral scenery</li>
<li><strong>Photography:</strong> yes, shallow light</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> often 10-20 m when calm</li>
<li><strong>Current:</strong> usually mild</li>
<li><strong>Weather sensitivity:</strong> north/northeast swell can make it choppy</li>
<li><strong>Shelter/exposure:</strong> sheltered bay but weather-sensitive</li>
<li><strong>Wind and sea conditions:</strong> north/northeast wind and swell</li>
<li><strong>Hazards:</strong> boats, snorkellers, shallow coral, sand, urchins</li>
<li><strong>Swim-throughs/caves:</strong> no major swim-throughs</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>skills/settling over sand then reef edge tour</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 20-35 minutes depending departure</li>
<li><strong>Night diving:</strong> possible but not classic</li>
<li><strong>Dive schools:</strong> yes</li>
<li><strong>Busy with boats:</strong> can be busy with snorkel boats</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes</li>
<li><strong>Refreshers:</strong> yes</li>
<li><strong>Deep dives:</strong> no</li>
<li><strong>Navigation:</strong> basic</li>
<li><strong>Buoyancy:</strong> yes</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Mango Bay Dive Site is separate from the beach page. It is a sheltered training bay with boat-access and snorkelling crossover, not a deep pinnacle or big-fish site.</p>
<h2>Nearby Paired Sites</h2>
<p>Japanese Gardens, Twins, Lighthouse Bay, Hin Wong</p>
<p><a href="/mango-bay/">Mango Bay</a> | <a href="/lighthouse-bay/">Lighthouse Bay</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> remote bay feel and easy boat access compared with hard road access</li>
<li><strong>Manage expectations:</strong> shallow simple diving</li>
<li><strong>Best thing:</strong> calm confidence-building reef</li>
<li><strong>Main downside:</strong> snorkel boats and shallow simplicity</li>
<li><strong>Tip:</strong> leave the sandy middle and move along the reef edges</li>
</ul>
',
  ),
  'ao-leuk-dive-site' => 
  array (
    'title' => 'Ao Leuk Dive Site',
    'content' => '<h1>Ao Leuk Dive Site</h1>
<p>pretty shallow east/southeast bay dive with beach/snorkelling crossover</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> beginners, DSD, Open Water students, refreshers, photographers and snorkellers</li>
<li><strong>Not ideal for:</strong> depth, wrecks, swim-throughs or big fish</li>
<li><strong>Vibe:</strong> easy, scenic, shallow reef bay</li>
<li><strong>Must-do or easy local site:</strong> nice easy local highlight for beginners</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 4-16 m</li>
<li><strong>Beginners:</strong> yes when calm</li>
<li><strong>Open Water:</strong> yes</li>
<li><strong>Advanced Open Water:</strong> yes for non-deep specialties</li>
<li><strong>Recommended certification:</strong> Open Water or DSD with instructor</li>
<li><strong>Guide recommended:</strong> recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> sandy bay, gentle reef slopes, coral patches and bommies</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, juvenile groupers, snappers and rays</li>
<li><strong>Special sightings:</strong> baby blacktips, turtles, cuttlefish, sea snakes and nudibranchs as bonuses</li>
<li><strong>Macro life:</strong> moderate</li>
<li><strong>Bigger fish:</strong> not really</li>
<li><strong>Coral and reef scenery:</strong> good shallow reef scenery</li>
<li><strong>Photography:</strong> yes, good natural light</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> beautiful when calm, poor when choppy</li>
<li><strong>Current:</strong> usually mild</li>
<li><strong>Weather sensitivity:</strong> east/southeast swell affects it quickly</li>
<li><strong>Shelter/exposure:</strong> sheltered in bay but exposed to east/southeast weather</li>
<li><strong>Wind and sea conditions:</strong> east/southeast wind and swell</li>
<li><strong>Hazards:</strong> snorkellers, boats, shallow coral, urchins, sand and current near mouth</li>
<li><strong>Swim-throughs/caves:</strong> no</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend over sand/reef edge, explore bay side, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 20-35 minutes; closer from south/Chalok side</li>
<li><strong>Night diving:</strong> possible in calm conditions</li>
<li><strong>Dive schools:</strong> yes</li>
<li><strong>Busy with boats:</strong> sometimes with snorkel/dive boats</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes</li>
<li><strong>Refreshers:</strong> yes</li>
<li><strong>Deep dives:</strong> no</li>
<li><strong>Navigation:</strong> basic</li>
<li><strong>Buoyancy:</strong> yes</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Ao Leuk Dive Site is distinct from Ao Leuk Bay. It works best in calm weather and is useful for beginner diving and snorkelling crossover when the east side is flat.</p>
<h2>Nearby Paired Sites</h2>
<p>Shark Island, Hin Ngam, Sai Daeng, Tanote, Hin Wong</p>
<p><a href="/ao-leuk-bay/">Ao Leuk Bay</a> | <a href="/hin-wong-bay-dive-site/">Hin Wong Bay Dive Site</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> one of the prettiest easy bay dives when east side is calm</li>
<li><strong>Manage expectations:</strong> condition-dependent and shallow</li>
<li><strong>Best thing:</strong> clear shallow reef on calm days</li>
<li><strong>Main downside:</strong> poor in east-side chop</li>
<li><strong>Tip:</strong> dive it when the east side is flat and go slowly along reef edges</li>
</ul>
',
  ),
  'hin-wong-bay-dive-site' => 
  array (
    'title' => 'Hin Wong Bay Dive Site',
    'content' => '<h1>Hin Wong Bay Dive Site</h1>
<p>rocky east-coast bay with granite boulders, coral pockets and snorkelling crossover</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> relaxed fun divers, confident beginners, photographers and snorkellers</li>
<li><strong>Not ideal for:</strong> flat sandy training, nervous DSDs or rough east-coast conditions</li>
<li><strong>Vibe:</strong> natural, rocky, scenic and exploratory</li>
<li><strong>Must-do or easy local site:</strong> nice scenic local site</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-16 m in the bay; nearby Hin Wong Pinnacle is separate and deeper</li>
<li><strong>Beginners:</strong> yes in calm conditions with guide</li>
<li><strong>Open Water:</strong> possible for later course dives</li>
<li><strong>Advanced Open Water:</strong> yes for photo, naturalist, buoyancy and navigation</li>
<li><strong>Recommended certification:</strong> Open Water in calm conditions</li>
<li><strong>Guide recommended:</strong> yes, route matters</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> granite boulders, rocky shoreline, coral pockets, sand/rubble and small overhangs</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, fusiliers and blue-spotted rays</li>
<li><strong>Special sightings:</strong> blacktip reef sharks, turtles, sea snakes, cuttlefish, Jenkins rays and nudibranchs</li>
<li><strong>Macro life:</strong> yes, around rubble and boulders</li>
<li><strong>Bigger fish:</strong> moderate at best</li>
<li><strong>Coral and reef scenery:</strong> good rocky reef scenery</li>
<li><strong>Photography:</strong> yes, boulders and reef pockets</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> very condition-dependent</li>
<li><strong>Current:</strong> usually mild in bay; more around edges</li>
<li><strong>Weather sensitivity:</strong> bad in east/northeast swell</li>
<li><strong>Shelter/exposure:</strong> partly sheltered bay, exposed to east/northeast</li>
<li><strong>Wind and sea conditions:</strong> east/northeast/north swell</li>
<li><strong>Hazards:</strong> rocks, urchins, boats, snorkellers, current around boulders and low visibility</li>
<li><strong>Swim-throughs/caves:</strong> small boulder gaps/overhangs only</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend in sheltered area, follow boulder/reef edge, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 20-40 minutes depending departure</li>
<li><strong>Night diving:</strong> possible but not standard</li>
<li><strong>Dive schools:</strong> yes, less than main training sites</li>
<li><strong>Busy with boats:</strong> can get snorkel boats</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> sometimes, not first choice</li>
<li><strong>Refreshers:</strong> yes for confident divers</li>
<li><strong>Deep dives:</strong> no for bay</li>
<li><strong>Navigation:</strong> moderate</li>
<li><strong>Buoyancy:</strong> yes for divers with basic control</li>
<li><strong>Specialties:</strong> photography, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Hin Wong Bay Dive Site is separate from the beach page. Expect rocky east-coast scenery, calm-condition dependence and a setting better suited to confident swimmers and divers than casual beach days.</p>
<h2>Nearby Paired Sites</h2>
<p>Mango Bay, Lighthouse Bay, Laem Thian, Tanote</p>
<p><a href="/hin-wong-bay/">Hin Wong Bay</a> | <a href="/laem-thian/">Laem Thian</a> | <a href="/lighthouse-bay/">Lighthouse Bay</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> more rugged than Mango/Japanese Gardens</li>
<li><strong>Manage expectations:</strong> conditions define the dive</li>
<li><strong>Best thing:</strong> boulder scenery</li>
<li><strong>Main downside:</strong> rough east side ruins it</li>
<li><strong>Tip:</strong> be clear whether the plan is Hin Wong Bay or Hin Wong Pinnacle</li>
</ul>
',
  ),
  'junkyard-artificial-reef' => 
  array (
    'title' => 'Pottery / Junkyard Artificial Reef',
    'content' => '<h1>Pottery / Junkyard Artificial Reef</h1>
<p>artificial reef, conservation training, macro life and buoyancy practice</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> eco divers, conservation students, macro lovers, refreshers, buoyancy and fish ID</li>
<li><strong>Not ideal for:</strong> big fish, pristine natural reef, deep dives or dramatic topography</li>
<li><strong>Vibe:</strong> quirky, shallow, educational and slow-paced</li>
<li><strong>Must-do or easy local site:</strong> niche, not first-day must-do</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> generally shallow, often 6-12 m</li>
<li><strong>Beginners:</strong> yes with supervision</li>
<li><strong>Open Water:</strong> yes, especially later dives</li>
<li><strong>Advanced Open Water:</strong> yes for buoyancy, naturalist, fish ID, photo and navigation</li>
<li><strong>Recommended certification:</strong> Open Water; good buoyancy needed for conservation areas</li>
<li><strong>Guide recommended:</strong> strongly recommended to understand what you are seeing</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> artificial reef structures, coral frames, rubble/sand, small natural rocks and restoration modules</li>
<li><strong>Common marine life:</strong> juvenile fish, damselfish, wrasse, gobies, blennies, shrimp, crabs, nudibranchs and small reef fish</li>
<li><strong>Special sightings:</strong> pipefish, seahorses if lucky, scorpionfish, cuttlefish, morays and unusual juveniles</li>
<li><strong>Macro life:</strong> yes, one of the better reasons to go</li>
<li><strong>Bigger fish:</strong> no</li>
<li><strong>Coral and reef scenery:</strong> good for seeing coral growth/restoration rather than pristine reef</li>
<li><strong>Photography:</strong> yes for macro and conservation content</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, often lower nearshore</li>
<li><strong>Current:</strong> usually mild</li>
<li><strong>Weather sensitivity:</strong> rain/runoff and west-side swell can reduce visibility</li>
<li><strong>Shelter/exposure:</strong> generally sheltered nearshore</li>
<li><strong>Wind and sea conditions:</strong> west/southwest conditions and runoff</li>
<li><strong>Hazards:</strong> sharp structures, fishing line, fragile coral frames, low visibility and boat traffic</li>
<li><strong>Swim-throughs/caves:</strong> structure gaps only if briefed; not overhead diving</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>slow shallow tour between structures, coral growth and macro life</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning or afternoon local trip</li>
<li><strong>Boat time:</strong> short local ride, often 5-20 minutes depending site</li>
<li><strong>Night diving:</strong> can be interesting for macro but not classic</li>
<li><strong>Dive schools:</strong> yes, especially eco-focused schools</li>
<li><strong>Busy with boats:</strong> less than main training sites</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> possible but not first choice</li>
<li><strong>Refreshers:</strong> yes</li>
<li><strong>Deep dives:</strong> no</li>
<li><strong>Navigation:</strong> yes, structures make landmarks</li>
<li><strong>Buoyancy:</strong> excellent</li>
<li><strong>Specialties:</strong> conservation, buoyancy, photography, fish ID, naturalist, navigation</li>
</ul>
<h2>Local Advice</h2>
<p>This is a conservation, buoyancy and macro-life site rather than a pristine natural reef. It is useful supporting content for eco-minded divers and refreshers.</p>
<h2>Nearby Paired Sites</h2>
<p>Pottery, Three Rocks, Jansom, Mae Haad Reef, White Rock</p>
<p><a href="/white-rock/">White Rock</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> human-made habitat and reef restoration angle</li>
<li><strong>Manage expectations:</strong> not pristine or dramatic</li>
<li><strong>Best thing:</strong> seeing marine life use human-made habitat</li>
<li><strong>Main downside:</strong> can look messy if unexplained</li>
<li><strong>Tip:</strong> go with someone who knows the structures and dive slowly</li>
</ul>
',
  ),
  'green-rock' => 
  array (
    'title' => 'Green Rock Dive Site',
    'content' => '<h1>Green Rock Dive Site</h1>
<p>granite boulders, swim-throughs, deeper options and triggerfish</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> confident Open Water, Advanced divers, fun divers, buoyancy and photography</li>
<li><strong>Not ideal for:</strong> nervous beginners, poor buoyancy or DSD</li>
<li><strong>Vibe:</strong> bouldery, adventurous, swim-through-heavy and sometimes currenty</li>
<li><strong>Must-do or easy local site:</strong> local must-do for confident divers</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-25/28 m</li>
<li><strong>Beginners:</strong> only confident beginners in good conditions</li>
<li><strong>Open Water:</strong> not usually primary OW training</li>
<li><strong>Advanced Open Water:</strong> yes, very suitable</li>
<li><strong>Recommended certification:</strong> Advanced preferred; confident OW with guide in good conditions</li>
<li><strong>Guide recommended:</strong> yes</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> large granite boulders, swim-throughs, rock passages, reef patches and ledges</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, triggerfish, sea snakes and morays</li>
<li><strong>Special sightings:</strong> Jenkins rays, turtles, cuttlefish, nudibranchs and larger barracuda</li>
<li><strong>Macro life:</strong> yes, cracks and rubble</li>
<li><strong>Bigger fish:</strong> moderate</li>
<li><strong>Coral and reef scenery:</strong> rocky reef scenery</li>
<li><strong>Photography:</strong> yes, swim-throughs and boulders</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable</li>
<li><strong>Current:</strong> can be moderate/strong</li>
<li><strong>Weather sensitivity:</strong> bad conditions make it unsuitable for beginners</li>
<li><strong>Shelter/exposure:</strong> fairly exposed</li>
<li><strong>Wind and sea conditions:</strong> north/west/northwest swell</li>
<li><strong>Hazards:</strong> triggerfish, current, depth, swim-throughs, separation and sharp rocks</li>
<li><strong>Swim-throughs/caves:</strong> yes, many swim-throughs; no caves in technical sense</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend on line, explore deeper boulders and selected swim-throughs, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning or afternoon</li>
<li><strong>Boat time:</strong> 20-30 minutes from Sairee/Mae Haad</li>
<li><strong>Night diving:</strong> possible but not standard</li>
<li><strong>Dive schools:</strong> yes for AOW/fun dives</li>
<li><strong>Busy with boats:</strong> can be busy</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> only confident refreshers</li>
<li><strong>Deep dives:</strong> yes, moderate</li>
<li><strong>Navigation:</strong> yes but challenging</li>
<li><strong>Buoyancy:</strong> yes for controlled divers</li>
<li><strong>Specialties:</strong> deep, photo, fish ID, naturalist, navigation and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Green Rock needs good buoyancy and sensible conditions, especially around swim-throughs, current and triggerfish territory. It is not ideal as a nervous-beginner site.</p>
<h2>Nearby Paired Sites</h2>
<p>Twins, Japanese Gardens, Red Rock, White Rock</p>
<p><a href="/red-rock/">Red Rock</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> boulder maze and swim-throughs</li>
<li><strong>Manage expectations:</strong> triggerfish/current possible</li>
<li><strong>Best thing:</strong> fun topography</li>
<li><strong>Main downside:</strong> can be stressful in current or low vis</li>
<li><strong>Tip:</strong> only use swim-throughs if buoyancy and conditions are right</li>
</ul>
',
  ),
  'red-rock' => 
  array (
    'title' => 'Red Rock Dive Site',
    'content' => '<h1>Red Rock Dive Site</h1>
<p>Nang Yuan pinnacle and route-style dive toward Japanese Gardens, with cave/swim-through option</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> confident OW, Advanced, photographers and natural navigation</li>
<li><strong>Not ideal for:</strong> first dives, poor buoyancy or people uncomfortable with swim-throughs</li>
<li><strong>Vibe:</strong> scenic, route-based and slightly adventurous</li>
<li><strong>Must-do or easy local site:</strong> worthwhile local route dive</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 3-22 m; pinnacle rises close to surface</li>
<li><strong>Beginners:</strong> confident newer divers only</li>
<li><strong>Open Water:</strong> not a standard training site</li>
<li><strong>Advanced Open Water:</strong> yes</li>
<li><strong>Recommended certification:</strong> confident OW; Advanced better</li>
<li><strong>Guide recommended:</strong> yes, route choice matters</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> small granite pinnacle, coastline reef, cracks, rubble, reef slopes and cave/swim-through features</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, rays and morays</li>
<li><strong>Special sightings:</strong> Jenkins rays, sea snakes, turtles, nudibranchs and pinktail triggerfish</li>
<li><strong>Macro life:</strong> yes</li>
<li><strong>Bigger fish:</strong> low to moderate</li>
<li><strong>Coral and reef scenery:</strong> yes along route</li>
<li><strong>Photography:</strong> yes, route and swim-through footage</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable</li>
<li><strong>Current:</strong> mild to moderate possible</li>
<li><strong>Weather sensitivity:</strong> rough Nang Yuan conditions make it harder</li>
<li><strong>Shelter/exposure:</strong> partly sheltered by Nang Yuan</li>
<li><strong>Wind and sea conditions:</strong> north/west/northwest swell</li>
<li><strong>Hazards:</strong> current, swim-through/cave route, separation, depth changes and boat traffic</li>
<li><strong>Swim-throughs/caves:</strong> yes, Nang Yuan Cave/swim-through if suitable</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend at pinnacle, explore cracks/deeper section, route toward Japanese Gardens if appropriate</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 15-25 minutes from Sairee/Mae Haad</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes for fun/AOW, not basic OW</li>
<li><strong>Busy with boats:</strong> can be busy near Nang Yuan</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> only confident refreshers</li>
<li><strong>Deep dives:</strong> moderate</li>
<li><strong>Navigation:</strong> yes</li>
<li><strong>Buoyancy:</strong> yes for controlled divers</li>
<li><strong>Specialties:</strong> navigation, photo, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Red Rock is often dived as a route-style Nang Yuan dive connected with Japanese Gardens. Buoyancy and swim-through judgement matter, especially if visibility is reduced.</p>
<h2>Nearby Paired Sites</h2>
<p>Japanese Gardens, Twins, Green Rock, White Rock</p>
<p><a href="/green-rock/">Green Rock</a> | <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a> | <a href="/koh-nang-yuan/">Koh Nang Yuan</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> pinnacle-to-coastline journey</li>
<li><strong>Manage expectations:</strong> not a huge pinnacle; guide/conditions matter</li>
<li><strong>Best thing:</strong> variety in one dive</li>
<li><strong>Main downside:</strong> small if route is not used</li>
<li><strong>Tip:</strong> don&#039;t force the swim-through if visibility or buoyancy isn&#039;t right</li>
</ul>
',
  ),
  'shark-island' => 
  array (
    'title' => 'Shark Island Dive Site',
    'content' => '<h1>Shark Island Dive Site</h1>
<p>current-swept reef, soft coral, schooling fish and more adventurous local diving</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Advanced, confident OW, photographers and divers wanting colour/fish/current</li>
<li><strong>Not ideal for:</strong> nervous beginners, DSD or calm sandy training</li>
<li><strong>Vibe:</strong> exposed, colourful, fishy and current-prone</li>
<li><strong>Must-do or easy local site:</strong> must-do local fun site for confident divers</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-25+ m</li>
<li><strong>Beginners:</strong> only confident beginners in excellent conditions</li>
<li><strong>Open Water:</strong> usually not standard OW training</li>
<li><strong>Advanced Open Water:</strong> yes</li>
<li><strong>Recommended certification:</strong> Advanced ideal; confident OW with guide in good conditions</li>
<li><strong>Guide recommended:</strong> yes</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> surface island/pinnacle, rocky slopes, soft coral, hard coral and reef edges</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, trevally, barracuda and triggerfish</li>
<li><strong>Special sightings:</strong> whale sharks, turtles, Jenkins rays, cobia, sea snakes and cuttlefish</li>
<li><strong>Macro life:</strong> moderate</li>
<li><strong>Bigger fish:</strong> yes by Koh Tao standards</li>
<li><strong>Coral and reef scenery:</strong> yes, one of the better colourful reef sites</li>
<li><strong>Photography:</strong> yes when visibility/current cooperate</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, often 5-20 m but can be better/worse</li>
<li><strong>Current:</strong> often, plan for it</li>
<li><strong>Weather sensitivity:</strong> southeast/east/south swell affects it</li>
<li><strong>Shelter/exposure:</strong> exposed, with sheltered sides depending current</li>
<li><strong>Wind and sea conditions:</strong> south/east/southeast swell</li>
<li><strong>Hazards:</strong> current, depth, surge, boat traffic, triggerfish and separation</li>
<li><strong>Swim-throughs/caves:</strong> not a main swim-through site</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>start sheltered side, deeper slope first, follow island contour, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning usually</li>
<li><strong>Boat time:</strong> 20-35 minutes; closer from south/Chalok</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes for fun/AOW</li>
<li><strong>Busy with boats:</strong> can be busy on good days</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> only confident refreshers</li>
<li><strong>Deep dives:</strong> yes, reasonably</li>
<li><strong>Navigation:</strong> yes but challenging</li>
<li><strong>Buoyancy:</strong> yes for controlled divers</li>
<li><strong>Specialties:</strong> deep, photo, fish ID, naturalist and current-awareness</li>
</ul>
<h2>Local Advice</h2>
<p>Shark Island can be colourful and full of fish in the right conditions, but current and exposure are part of the site. It is not a calm sandy training dive.</p>
<h2>Nearby Paired Sites</h2>
<p>Ao Leuk, Hin Ngam, Sai Daeng, Tanote, Laem Thian</p>
<p><a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a> | <a href="/sail-rock/">Sail Rock</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> more exposed and colourful than easy reefs</li>
<li><strong>Manage expectations:</strong> not actual guaranteed sharks; current possible</li>
<li><strong>Best thing:</strong> colour, fish and energy</li>
<li><strong>Main downside:</strong> current/exposure</li>
<li><strong>Tip:</strong> don&#039;t fight current; let the guide choose the sheltered side</li>
</ul>
',
  ),
  'southwest-pinnacle' => 
  array (
    'title' => 'Southwest Pinnacle Dive Site',
    'content' => '<h1>Southwest Pinnacle Dive Site</h1>
<p>offshore granite pinnacles, schooling fish, deeper profiles and whale shark chances</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Advanced divers, confident OW, fun divers, deep students and photographers</li>
<li><strong>Not ideal for:</strong> nervous beginners, DSD, seasick-prone visitors or shallow training</li>
<li><strong>Vibe:</strong> deeper, bigger, fishier and offshore</li>
<li><strong>Must-do or easy local site:</strong> must-do for certified fun divers when conditions are good</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 5-30 m, common dives 16-25 m</li>
<li><strong>Beginners:</strong> not for brand-new beginners</li>
<li><strong>Open Water:</strong> usually no</li>
<li><strong>Advanced Open Water:</strong> yes, excellent</li>
<li><strong>Recommended certification:</strong> Advanced recommended</li>
<li><strong>Guide recommended:</strong> yes</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> large granite pinnacles, boulder ridges, anemones, soft coral, ledges and sand</li>
<li><strong>Common marine life:</strong> fusiliers, barracuda, trevally, queenfish, batfish, groupers, snappers and morays</li>
<li><strong>Special sightings:</strong> whale sharks, cobia, Jenkins rays, great barracuda and sea snakes</li>
<li><strong>Macro life:</strong> yes but not main focus</li>
<li><strong>Bigger fish:</strong> yes</li>
<li><strong>Coral and reef scenery:</strong> yes, offshore pinnacle scenery</li>
<li><strong>Photography:</strong> yes, wide angle and schooling fish</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, good days 15-30 m+</li>
<li><strong>Current:</strong> common</li>
<li><strong>Weather sensitivity:</strong> offshore/exposed and condition-dependent</li>
<li><strong>Shelter/exposure:</strong> exposed</li>
<li><strong>Wind and sea conditions:</strong> southwest/west/south swell and current</li>
<li><strong>Hazards:</strong> depth, current, boat traffic, separation, NDL and fishing line</li>
<li><strong>Swim-throughs/caves:</strong> small gullies/overhangs only</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend line, deeper pinnacles first, work shallower over tops, safety stop line/SMB</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning/special trip</li>
<li><strong>Boat time:</strong> 40-60 minutes depending departure</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes for AOW/fun dives</li>
<li><strong>Busy with boats:</strong> can be busy, less than local sites</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> not first refresher</li>
<li><strong>Deep dives:</strong> yes</li>
<li><strong>Navigation:</strong> moderate</li>
<li><strong>Buoyancy:</strong> yes for experienced divers</li>
<li><strong>Specialties:</strong> deep, photo, fish ID, naturalist</li>
</ul>
<h2>Local Advice</h2>
<p>Southwest Pinnacle is one of Koh Tao&rsquo;s stronger offshore sites for deeper profiles, schools of fish and occasional whale shark chances.</p>
<h2>Nearby Paired Sites</h2>
<p>Shark Island, Hin Ngam, Ao Leuk, Sai Daeng</p>
<p><a href="/chumphon-pinnacle/">Chumphon Pinnacle</a> | <a href="/sail-rock/">Sail Rock</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> big offshore feeling without going to Sail Rock</li>
<li><strong>Manage expectations:</strong> whale sharks possible not guaranteed</li>
<li><strong>Best thing:</strong> big-site fishy feeling</li>
<li><strong>Main downside:</strong> distance and conditions</li>
<li><strong>Tip:</strong> watch depth/NDL and don&#039;t chase big animals</li>
</ul>
',
  ),
  'laem-thian' => 
  array (
    'title' => 'Laem Thian Dive Site',
    'content' => '<h1>Laem Thian Dive Site</h1>
<p>quieter east-coast boulders, reef, swim-through/cave-style features and remote feel</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> confident OW, Advanced, photographers and divers wanting quieter rocky sites</li>
<li><strong>Not ideal for:</strong> nervous beginners, rough east weather or poor buoyancy around boulders</li>
<li><strong>Vibe:</strong> natural, rocky, quieter and slightly adventurous</li>
<li><strong>Must-do or easy local site:</strong> nice condition-dependent local site</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> bay/caves often 5-18 m; wider area can be deeper</li>
<li><strong>Beginners:</strong> yes in bay/calm conditions</li>
<li><strong>Open Water:</strong> possible later course dives</li>
<li><strong>Advanced Open Water:</strong> yes</li>
<li><strong>Recommended certification:</strong> Open Water for bay, Advanced/confident for caves</li>
<li><strong>Guide recommended:</strong> yes</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> granite boulders, hard coral, reef patches, rubble, swim-throughs and cave-like gaps</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, morays and rays</li>
<li><strong>Special sightings:</strong> turtles, bumphead parrotfish, sea snakes, cuttlefish and Jenkins rays</li>
<li><strong>Macro life:</strong> yes</li>
<li><strong>Bigger fish:</strong> moderate/low</li>
<li><strong>Coral and reef scenery:</strong> good hard coral and boulder scenery</li>
<li><strong>Photography:</strong> yes for boulders and swim-throughs</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, good on calm east days</li>
<li><strong>Current:</strong> mild to moderate possible</li>
<li><strong>Weather sensitivity:</strong> east-side rough weather affects it strongly</li>
<li><strong>Shelter/exposure:</strong> bay sheltered, caves/point more exposed</li>
<li><strong>Wind and sea conditions:</strong> east/northeast/southeast swell</li>
<li><strong>Hazards:</strong> swim-throughs, poor buoyancy, sharp rocks, urchins, low visibility and boat traffic</li>
<li><strong>Swim-throughs/caves:</strong> yes, Laem Thian Caves style features if suitable</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend in bay/boulder line, explore reef and swim-throughs if appropriate, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 25-45 minutes depending departure</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes but less than main sites</li>
<li><strong>Busy with boats:</strong> usually quieter</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> not first choice</li>
<li><strong>Refreshers:</strong> yes for confident refreshers</li>
<li><strong>Deep dives:</strong> not first-choice deep site</li>
<li><strong>Navigation:</strong> yes for confident divers</li>
<li><strong>Buoyancy:</strong> yes for controlled divers</li>
<li><strong>Specialties:</strong> photo, fish ID, naturalist, navigation and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Remote-feeling east-coast areas need calm seas, good judgement and careful access planning. Check conditions before committing to Laem Thian.</p>
<h2>Nearby Paired Sites</h2>
<p>Tanote, Hin Wong, Ao Leuk, Shark Island, Lighthouse</p>
<p><a href="/hin-wong-bay-dive-site/">Hin Wong Bay Dive Site</a> | <a href="/lighthouse-bay/">Lighthouse Bay</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> rugged east-coast feel</li>
<li><strong>Manage expectations:</strong> caves not always suitable</li>
<li><strong>Best thing:</strong> quiet bouldery scenery</li>
<li><strong>Main downside:</strong> east-coast weather sensitivity</li>
<li><strong>Tip:</strong> confirm whether the plan is Laem Thian Bay or Caves</li>
</ul>
',
  ),
  'lighthouse-bay' => 
  array (
    'title' => 'Lighthouse Bay Dive Site',
    'content' => '<h1>Lighthouse Bay Dive Site</h1>
<p>quiet shallow north/east bay dive with coral, boulders and snorkelling crossover</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> beginners, refreshers, DSD in calm conditions, snorkellers and relaxed photographers</li>
<li><strong>Not ideal for:</strong> depth, wrecks, big fish or dramatic pinnacles</li>
<li><strong>Vibe:</strong> easy, shallow, quiet and bay-style</li>
<li><strong>Must-do or easy local site:</strong> nice easy local site</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 4-14 m</li>
<li><strong>Beginners:</strong> yes</li>
<li><strong>Open Water:</strong> yes</li>
<li><strong>Advanced Open Water:</strong> only non-deep specialties</li>
<li><strong>Recommended certification:</strong> Open Water or DSD with instructor</li>
<li><strong>Guide recommended:</strong> recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> shallow reef, boulders, rocky shoreline, sand/rubble and coral gardens</li>
<li><strong>Common marine life:</strong> reef fish, butterflyfish, angelfish, parrotfish, wrasse, rabbitfish, damselfish, fusiliers, snappers, groupers, moray eels, blue-spotted rays and anemonefish, rays and small reef life</li>
<li><strong>Special sightings:</strong> turtles, sea snakes, cuttlefish, pipefish and occasional blacktips</li>
<li><strong>Macro life:</strong> moderate</li>
<li><strong>Bigger fish:</strong> no</li>
<li><strong>Coral and reef scenery:</strong> pleasant shallow reef scenery</li>
<li><strong>Photography:</strong> yes, good natural light</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, good when calm</li>
<li><strong>Current:</strong> usually little to mild</li>
<li><strong>Weather sensitivity:</strong> north/east swell or rain can make it murky</li>
<li><strong>Shelter/exposure:</strong> fairly sheltered bay</li>
<li><strong>Wind and sea conditions:</strong> north/northeast/east swell</li>
<li><strong>Hazards:</strong> shallow coral, snorkellers, boats, urchins and low visibility</li>
<li><strong>Swim-throughs/caves:</strong> no major features</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>shallow descent, follow reef/boulder edge, finish near boat</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 20-40 minutes</li>
<li><strong>Night diving:</strong> possible but not standard</li>
<li><strong>Dive schools:</strong> yes when conditions suit</li>
<li><strong>Busy with boats:</strong> usually less than main sites</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> yes in calm conditions</li>
<li><strong>Refreshers:</strong> yes</li>
<li><strong>Deep dives:</strong> no</li>
<li><strong>Navigation:</strong> basic</li>
<li><strong>Buoyancy:</strong> yes</li>
<li><strong>Specialties:</strong> photo, fish ID, naturalist and buoyancy</li>
</ul>
<h2>Local Advice</h2>
<p>Lighthouse Bay is a quieter shallow bay-style dive with snorkelling crossover. It can be useful in the right conditions, but it is not a dramatic deep site.</p>
<h2>Nearby Paired Sites</h2>
<p>Mango Bay, Hin Wong, Laem Thian, Japanese Gardens</p>
<p><a href="/mango-bay-dive-site/">Mango Bay Dive Site</a> | <a href="/hin-wong-bay-dive-site/">Hin Wong Bay Dive Site</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> quieter alternative to busier beginner bays</li>
<li><strong>Manage expectations:</strong> not dramatic</li>
<li><strong>Best thing:</strong> relaxed uncrowded feel</li>
<li><strong>Main downside:</strong> can be underwhelming for advanced divers</li>
<li><strong>Tip:</strong> treat it as a slow shallow reef dive</li>
</ul>
',
  ),
  'chumphon-pinnacle' => 
  array (
    'title' => 'Chumphon Pinnacle',
    'content' => '<h1>Chumphon Pinnacle</h1>
<p>headline offshore pinnacle, anemone-covered top, schooling fish and whale shark reputation</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Advanced divers, confident OW, fun divers, deep students and big-fish lovers</li>
<li><strong>Not ideal for:</strong> nervous beginners, DSD, weak swimmers or shallow reef seekers</li>
<li><strong>Vibe:</strong> big, deep, fishy, exciting and busy</li>
<li><strong>Must-do or easy local site:</strong> must-do for certified divers</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 14-35 m; top around 14-16 m</li>
<li><strong>Beginners:</strong> not true beginners</li>
<li><strong>Open Water:</strong> not standard OW course</li>
<li><strong>Advanced Open Water:</strong> yes, classic Deep site</li>
<li><strong>Recommended certification:</strong> Advanced recommended; confident OW may do shallow top with guide</li>
<li><strong>Guide recommended:</strong> strongly recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> large submerged granite pinnacle, satellite rocks, fissures, anemone fields and deeper sand</li>
<li><strong>Common marine life:</strong> batfish, barracuda, trevally, fusiliers, queenfish, groupers, snappers and anemonefish</li>
<li><strong>Special sightings:</strong> whale sharks, cobia, great barracuda, Jenkins rays and sea snakes</li>
<li><strong>Macro life:</strong> yes but not main focus</li>
<li><strong>Bigger fish:</strong> yes, one of Koh Tao&#039;s best</li>
<li><strong>Coral and reef scenery:</strong> anemone/pinnacle scenery more than shallow coral garden</li>
<li><strong>Photography:</strong> excellent wide angle when visibility is good</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, can be excellent or planktonic</li>
<li><strong>Current:</strong> common</li>
<li><strong>Weather sensitivity:</strong> offshore/exposed and condition-dependent</li>
<li><strong>Shelter/exposure:</strong> exposed</li>
<li><strong>Wind and sea conditions:</strong> north/west/northwest/offshore swell</li>
<li><strong>Hazards:</strong> depth, current, blue-water ascent, NDL, crowds and fishing line</li>
<li><strong>Swim-throughs/caves:</strong> fissures/swim-through features if suitable</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend line, deeper side first, circle pinnacle/satellites, finish shallow on anemone top</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning</li>
<li><strong>Boat time:</strong> 35-50 minutes; longer from Chalok</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes for AOW/fun dives</li>
<li><strong>Busy with boats:</strong> yes, famous site</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> not first refresher</li>
<li><strong>Deep dives:</strong> yes, excellent</li>
<li><strong>Navigation:</strong> moderate</li>
<li><strong>Buoyancy:</strong> yes for refining, not learning</li>
<li><strong>Specialties:</strong> deep, photo, fish ID, naturalist</li>
</ul>
<h2>Local Advice</h2>
<p>Chumphon Pinnacle is one of Koh Tao&rsquo;s headline advanced dive sites, with a top around 14&ndash;16 m, deeper sections, possible current, big schools of fish and a strong whale shark reputation. Newly certified divers should go with an instructor or experienced guide when conditions allow.</p>
<h2>Nearby Paired Sites</h2>
<p>White Rock, Green Rock, Twins, Mango Bay</p>
<p><a href="/southwest-pinnacle/">Southwest Pinnacle</a> | <a href="/sail-rock/">Sail Rock</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> Koh Tao&#039;s iconic offshore fun dive</li>
<li><strong>Manage expectations:</strong> whale sharks not guaranteed and it can be busy</li>
<li><strong>Best thing:</strong> scale and possibility</li>
<li><strong>Main downside:</strong> busy/deep/currenty</li>
<li><strong>Tip:</strong> go early, watch depth, and don&#039;t burn no-deco time chasing fish</li>
</ul>
',
  ),
  'sattakut-wreck' => 
  array (
    'title' => 'HTMS Sattakut Wreck Koh Tao',
    'content' => '<h1>HTMS Sattakut Wreck Koh Tao</h1>
<p>Koh Tao&#039;s main wreck dive with guns, deck structure and artificial reef life</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Advanced divers, wreck students, deep students, photographers and wreck-curious fun divers</li>
<li><strong>Not ideal for:</strong> beginners, DSD, poor buoyancy or shallow coral lovers</li>
<li><strong>Vibe:</strong> wrecky, atmospheric, deeper and more serious</li>
<li><strong>Must-do or easy local site:</strong> must-do for Advanced/wreck-interested divers</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> about 18-30 m; deck around 24-26 m</li>
<li><strong>Beginners:</strong> no</li>
<li><strong>Open Water:</strong> no</li>
<li><strong>Advanced Open Water:</strong> yes, excellent for Deep/Wreck adventure</li>
<li><strong>Recommended certification:</strong> Advanced minimum recommended; Wreck specialty for penetration</li>
<li><strong>Guide recommended:</strong> strongly recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> steel wreck, deck, wheelhouse, guns, mast, sand bottom and nearby reef</li>
<li><strong>Common marine life:</strong> batfish, snappers, fusiliers, groupers, barracuda, trevally, lionfish, scorpionfish and morays</li>
<li><strong>Special sightings:</strong> Jenkins rays, great barracuda, sea snakes, cuttlefish and occasional whale shark nearby</li>
<li><strong>Macro life:</strong> yes around structure</li>
<li><strong>Bigger fish:</strong> moderate</li>
<li><strong>Coral and reef scenery:</strong> artificial reef growth, not coral garden</li>
<li><strong>Photography:</strong> excellent wreck wide-angle/video</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable and can feel dark at depth</li>
<li><strong>Current:</strong> mild to moderate possible</li>
<li><strong>Weather sensitivity:</strong> bad visibility/current makes it harder</li>
<li><strong>Shelter/exposure:</strong> somewhat exposed but close to Koh Tao</li>
<li><strong>Wind and sea conditions:</strong> west-side swell and general rough sea</li>
<li><strong>Hazards:</strong> depth, NDL, current, silt, sharp metal, entanglement, fishing line and penetration risk</li>
<li><strong>Swim-throughs/caves:</strong> wreck openings/swim-throughs for trained/briefed divers</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend line, explore wreck/deepest planned parts first, work shallower, safety stop line/SMB</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning or afternoon</li>
<li><strong>Boat time:</strong> 10-25 minutes from Sairee/Mae Haad; longer from Chalok</li>
<li><strong>Night diving:</strong> not standard</li>
<li><strong>Dive schools:</strong> yes for AOW/Wreck/Deep</li>
<li><strong>Busy with boats:</strong> yes, popular</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> not first refresher</li>
<li><strong>Deep dives:</strong> yes</li>
<li><strong>Navigation:</strong> moderate, guided wreck navigation</li>
<li><strong>Buoyancy:</strong> yes for controlled divers</li>
<li><strong>Specialties:</strong> wreck, deep, photography, fish ID and artificial reef naturalist</li>
</ul>
<h2>Local Advice</h2>
<p>The HTMS Sattakut was intentionally sunk as an artificial reef and sits deeper than beginner limits. Wreck penetration should only be done by trained wreck divers with the right plan, equipment and supervision.</p>
<h2>Nearby Paired Sites</h2>
<p>Hin Pee Wee, White Rock, Twins, Green Rock</p>
<p><a href="/white-rock/">White Rock</a> | <a href="/chumphon-pinnacle/">Chumphon Pinnacle</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> main accessible wreck around Koh Tao</li>
<li><strong>Manage expectations:</strong> compact wreck, depth limits and no casual penetration</li>
<li><strong>Best thing:</strong> ship structure and atmosphere</li>
<li><strong>Main downside:</strong> shorter bottom time and lower visibility</li>
<li><strong>Tip:</strong> do proper wreck training before going inside; watch depth and no-deco</li>
</ul>
',
  ),
  'sail-rock' => 
  array (
    'title' => 'Sail Rock Thailand (From Koh Tao)',
    'content' => '<h1>Sail Rock Thailand (From Koh Tao)</h1>
<p>Gulf of Thailand headline pinnacle, Chimney swim-through, huge schools and whale shark chance</p>
<h2>Overview</h2>
<ul>
<li><strong>Best for:</strong> Advanced divers, confident OW, fun divers, photographers and big-fish lovers</li>
<li><strong>Not ideal for:</strong> beginners, DSD, seasick-prone visitors or shallow sheltered reef seekers</li>
<li><strong>Vibe:</strong> big, open-water, exciting, deeper and special-trip feel</li>
<li><strong>Must-do or easy local site:</strong> must-do if conditions/trip available</li>
</ul>
<h2>Depth and Certification Level</h2>
<ul>
<li><strong>Depth:</strong> surface to about 30-40 m; many dives 15-30 m</li>
<li><strong>Beginners:</strong> not absolute beginners; confident OW only with guide/plan</li>
<li><strong>Open Water:</strong> usually no</li>
<li><strong>Advanced Open Water:</strong> yes, excellent</li>
<li><strong>Recommended certification:</strong> Advanced recommended; confident OW may do suitable shallower profile</li>
<li><strong>Guide recommended:</strong> strongly recommended</li>
</ul>
<h2>Marine Life and Underwater Scenery</h2>
<ul>
<li><strong>Landscape:</strong> large vertical offshore pinnacle, walls, ledges, cracks and Chimney swim-through</li>
<li><strong>Common marine life:</strong> barracuda, trevally, batfish, fusiliers, snapper, queenfish, groupers, morays and reef fish</li>
<li><strong>Special sightings:</strong> whale sharks, cobia, great barracuda, Jenkins rays, king mackerel and sea snakes</li>
<li><strong>Macro life:</strong> yes but not main reason</li>
<li><strong>Bigger fish:</strong> yes, one of the best in the Gulf</li>
<li><strong>Coral and reef scenery:</strong> pinnacle wall/encrusting coral rather than shallow garden</li>
<li><strong>Photography:</strong> excellent wide angle if visibility is good</li>
</ul>
<h2>Conditions and Hazards</h2>
<ul>
<li><strong>Visibility:</strong> variable, often 10-30 m but can be lower/higher</li>
<li><strong>Current:</strong> common</li>
<li><strong>Weather sensitivity:</strong> exposed, trips depend on sea conditions</li>
<li><strong>Shelter/exposure:</strong> fully exposed offshore pinnacle</li>
<li><strong>Wind and sea conditions:</strong> open-water swell and current</li>
<li><strong>Hazards:</strong> depth, current, boat traffic, crowded lines, Chimney, NDL and seasickness</li>
<li><strong>Swim-throughs/caves:</strong> yes, the Chimney vertical swim-through</li>
<li><strong>Wreck penetration:</strong> No, unless this is a wreck-specific page. For HTMS Sattakut only, penetration requires proper wreck training, equipment and supervision.</li>
</ul>
<h2>Typical Dive Profile</h2>
<p>descend line/sheltered side, deeper wall first, Chimney if suitable, circle rock, finish shallow</p>
<ul>
<li><strong>Morning/afternoon/full-day:</strong> morning/full-day special trip</li>
<li><strong>Boat time:</strong> about 1.5-2 hours each way from Koh Tao</li>
<li><strong>Night diving:</strong> not normal from Koh Tao</li>
<li><strong>Dive schools:</strong> yes as special trips for AOW/fun divers</li>
<li><strong>Busy with boats:</strong> yes with boats from Koh Tao/Phangan/Samui</li>
</ul>
<h2>Courses and Skills</h2>
<ul>
<li><strong>Try dives:</strong> no</li>
<li><strong>Refreshers:</strong> not first refresher</li>
<li><strong>Deep dives:</strong> yes</li>
<li><strong>Navigation:</strong> moderate</li>
<li><strong>Buoyancy:</strong> yes for experienced divers</li>
<li><strong>Specialties:</strong> deep, photo, fish ID, naturalist and current-awareness</li>
</ul>
<h2>Local Advice</h2>
<p>Sail Rock is usually a special full-day style trip from Koh Tao, famous for the chimney swim-through, big schools of fish and whale shark chances. It is more exposed than sheltered local bays, so conditions matter.</p>
<h2>Nearby Paired Sites</h2>
<p>often two dives on Sail Rock; sometimes Southwest/Shark Island/Samran depending operator</p>
<p><a href="/chumphon-pinnacle/">Chumphon Pinnacle</a> | <a href="/southwest-pinnacle/">Southwest Pinnacle</a> | <a href="/diving-in-koh-tao/">Diving in Koh Tao</a></p>
<h2>Local Tips</h2>
<ul>
<li><strong>What makes it different:</strong> the big special-trip site outside normal Koh Tao local schedule</li>
<li><strong>Manage expectations:</strong> whale sharks not guaranteed; long ride and crowds possible</li>
<li><strong>Best thing:</strong> scale, schools and chance of special encounters</li>
<li><strong>Main downside:</strong> travel time/exposure</li>
<li><strong>Tip:</strong> take seasick meds early and don&#039;t make it your first dive after a long break</li>
</ul>
',
  ),
);
}

function ktr_approved_content_migration_forbidden_terms_20260712() {
    return array(
        'Local Notes Preserved From Koh Tao Rocks',
        'Local Notes Preserved',
        'Notes Preserved From Koh Tao Rocks',
        'Preserve the existing',
        'Preserve existing',
        'Keep this as',
        'Mention current local',
        'only after checking',
        'worth recommending',
        'migration note',
        'editorial note',
        'content note',
        'internal note',
        '<h2>Nearby Businesses</h2>',
        '<h2>Q&A</h2>',
    );
}

function ktr_approved_content_migration_run_20260712($mode = 'dry-run') {
    global $wpdb;

    $mode = ($mode === 'apply') ? 'apply' : 'dry-run';
    $pages = ktr_approved_content_migration_pages_20260712();
    $report = array(
        'mode' => $mode,
        'version' => '2026-07-12-approved-content-cleanup',
        'covered_slugs' => array_keys($pages),
        'missing' => array(),
        'would_change' => array(),
        'changed' => array(),
        'unchanged' => array(),
        'refused' => array(),
    );

    foreach ($pages as $slug => $page) {
        $found = $wpdb->get_row($wpdb->prepare(
            "SELECT ID, post_title, post_name, post_type, post_status, post_content FROM {$wpdb->posts} WHERE post_name = %s AND post_type = 'page' AND post_status NOT IN ('trash','auto-draft') LIMIT 1",
            $slug
        ), ARRAY_A);

        if (!$found) {
            $report['missing'][] = $slug;
            continue;
        }

        foreach (ktr_approved_content_migration_forbidden_terms_20260712() as $term) {
            if (stripos($page['content'], $term) !== false) {
                $report['refused'][] = array('slug' => $slug, 'reason' => 'target content contains forbidden public-facing phrase', 'term' => $term);
            }
        }

        if ($found['post_content'] === $page['content']) {
            $report['unchanged'][] = $slug;
            continue;
        }

        $report['would_change'][] = array(
            'slug' => $slug,
            'post_id' => (int) $found['ID'],
            'current_sha1' => sha1($found['post_content']),
            'target_sha1' => sha1($page['content']),
            'current_length' => strlen($found['post_content']),
            'target_length' => strlen($page['content']),
        );
    }

    if (!empty($report['missing'])) {
        $report['status'] = 'refused_missing_pages_no_changes_applied';
        return $report;
    }

    if (!empty($report['refused'])) {
        $report['status'] = 'refused_forbidden_target_text_no_changes_applied';
        return $report;
    }

    if ($mode !== 'apply') {
        $report['status'] = 'dry_run_only_no_changes_applied';
        return $report;
    }

    foreach ($report['would_change'] as $change) {
        $slug = $change['slug'];
        $updated = $wpdb->update(
            $wpdb->posts,
            array(
                'post_content' => $pages[$slug]['content'],
                'post_modified' => current_time('mysql'),
                'post_modified_gmt' => current_time('mysql', true),
            ),
            array('ID' => $change['post_id']),
            array('%s', '%s', '%s'),
            array('%d')
        );
        if ($updated === false) {
            $report['refused'][] = array('slug' => $slug, 'reason' => 'database update failed');
        } else {
            $report['changed'][] = $slug;
        }
    }

    $report['status'] = empty($report['refused']) ? 'applied' : 'applied_with_errors';
    return $report;
}

function ktr_approved_content_migration_output_20260712($report) {
    $json = wp_json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if (PHP_SAPI === 'cli') {
        echo $json . PHP_EOL;
        return;
    }
    wp_die('<pre>' . esc_html($json) . '</pre>', 'KohTao.Rocks Approved Content Migration', array('response' => 200));
}

function ktr_approved_content_migration_maybe_run_20260712() {
    $mode = null;

    if (PHP_SAPI === 'cli' && defined('KTR_APPROVED_CONTENT_MIGRATION_20260712')) {
        $mode = (string) KTR_APPROVED_CONTENT_MIGRATION_20260712;
    } elseif (is_admin() && isset($_GET['ktr_approved_content_migration_20260712'])) {
        if (!current_user_can('manage_options')) {
            wp_die('Not allowed', 403);
        }
        check_admin_referer('ktr_approved_content_migration_20260712');
        $mode = sanitize_key(wp_unslash($_GET['ktr_approved_content_migration_20260712']));
    }

    if ($mode === null) {
        return;
    }

    if ($mode !== 'dry-run' && $mode !== 'apply') {
        ktr_approved_content_migration_output_20260712(array('status' => 'invalid_mode', 'allowed_modes' => array('dry-run', 'apply')));
        return;
    }

    ktr_approved_content_migration_output_20260712(ktr_approved_content_migration_run_20260712($mode));
}
add_action('plugins_loaded', 'ktr_approved_content_migration_maybe_run_20260712', 99);

