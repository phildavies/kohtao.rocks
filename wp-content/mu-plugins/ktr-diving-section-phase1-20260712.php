<?php
/**
 * Plugin Name: KohTao.Rocks Diving Section Phase 1 Migration 2026-07-12
 * Description: Guarded local migration for the Phase 1 diving journey hub and four core diving visitor pages. Does nothing unless explicitly triggered.
 *
 * ONE-TIME APPROVED DIVING PHASE 1 MIGRATION DATED 12 JULY 2026.
 *
 * Purpose:
 * - Update /diving-in-koh-tao/ into the main diving journey hub while
 *   preserving the existing dive-site grid.
 * - Create or update the Phase 1 diving visitor pages:
 *   /try-scuba-koh-tao/
 *   /open-water-course-koh-tao/
 *   /fun-diving-koh-tao/
 *   /choosing-a-dive-school-koh-tao/
 *
 * IMPORTANT:
 * - Normal page loads do nothing.
 * - Do not run this from .cpanel.yml.
 * - Run only deliberately in dry-run or apply mode using the CLI commands below.
 * - Do not rerun casually after Phase 1 has been applied live.
 * - The four new page bodies are complete approved bodies for Phase 1. They
 *   must not be overwritten after later manual edits without reviewing dry-run
 *   output and approving the listed changes.
 * - Pages are matched by exact slug. Existing non-page conflicts are refused.
 * - This migration does not change menus, add redirects, delete old posts,
 *   change dive-site slugs, upload media, add prices, or verify current
 *   external business facts.
 *
 * Dry run:
 *   php -r "define('KTR_DIVING_SECTION_PHASE1_20260712','dry-run'); require 'wp-load.php';"
 *
 * Apply:
 *   php -r "define('KTR_DIVING_SECTION_PHASE1_20260712','apply'); require 'wp-load.php';"
 */

if (!defined('ABSPATH')) {
    exit;
}

function ktr_diving_phase1_page_specs_20260712() {
    $disclosure = 'KohTao.Rocks has worked with Chalok Reef Divers, so this is not a completely independent recommendation. We include it because we know the operation and its Chalok location, but visitors should still compare several centres and choose the environment that suits them.';

    return array(
        'try-scuba-koh-tao' => array(
            'title' => 'Try Scuba Diving in Koh Tao',
            'excerpt' => 'A practical beginner guide to Try Scuba and Discover Scuba Diving experiences on Koh Tao.',
            'seo_title' => 'Try Scuba Diving in Koh Tao | Beginner Guide',
            'seo_description' => 'What to expect from Try Scuba or Discover Scuba Diving on Koh Tao, who it suits, what to ask, and how it differs from an Open Water course.',
            'content' => <<<'HTML'
<h1>Try Scuba Diving in Koh Tao</h1>
<p>Try Scuba is for people who want to experience scuba diving in Koh Tao without signing up for a full certification course. It is a supervised introductory programme for complete beginners, usually run by an instructor in easy conditions.</p>
<p>You may also see it called Discover Scuba Diving, DSD or an introductory dive. The name depends on the training agency and dive centre, but the idea is similar: learn the basic safety points, practise simple skills and, where conditions and the programme allow, make a shallow open-water dive.</p>

<h2>Who Try Scuba Is For</h2>
<ul>
<li>Travellers who are curious about diving but not ready for a full course.</li>
<li>People with limited time on Koh Tao.</li>
<li>Beginners who want to see how breathing underwater feels before committing to certification.</li>
<li>Visitors who are comfortable in the water and able to follow instructor guidance.</li>
</ul>
<p>No previous diving certification is required. You still need to answer medical questions honestly, and some medical conditions require clearance before diving.</p>

<h2>Typical Structure</h2>
<p>Every dive centre has its own schedule, and conditions can change the plan, but a beginner experience normally includes:</p>
<ul>
<li><strong>Brief theory and safety explanation:</strong> how the equipment works, how to equalise, basic hand signals and what to do if water enters your mask or regulator.</li>
<li><strong>Shallow-water or confined-water introduction:</strong> time to practise breathing underwater and a few simple skills before going deeper.</li>
<li><strong>Supervised open-water diving:</strong> a shallow dive with an instructor where the programme and sea conditions allow.</li>
</ul>

<h2>Try Scuba or Open Water?</h2>
<p>Try Scuba is not a diving certification. It is a one-off introductory experience. If you want to dive independently with a buddy after your trip, take an <a href="/open-water-course-koh-tao/">Open Water course in Koh Tao</a> instead.</p>
<p>An Open Water course takes longer and includes more theory, skills, open-water training dives and assessment. It is the better route if you already know you want to become a certified diver.</p>

<h2>Good Beginner Dive Sites</h2>
<p>Beginner programmes usually use calm, shallow sites chosen by the dive centre on the day. Around Koh Tao, sites such as <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a>, <a href="/mango-bay-dive-site/">Mango Bay Dive Site</a>, <a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a>, <a href="/twins/">Twins</a> or <a href="/white-rock/">White Rock</a> may be suitable in the right conditions.</p>
<p>No site is guaranteed. Wind, visibility, boat traffic and student experience all matter.</p>

<h2>What To Ask Before Booking</h2>
<ul>
<li>How much time is spent in shallow water before the dive?</li>
<li>How many beginners are with each instructor?</li>
<li>Which language will the briefing and instruction be in?</li>
<li>What happens if the weather or visibility is poor?</li>
<li>What is included: equipment, instructor, boat, insurance and transfers?</li>
<li>What medical form do you need to complete?</li>
</ul>

<h2>What To Bring</h2>
<ul>
<li>Swimwear and a towel.</li>
<li>Reef-safe sun protection.</li>
<li>Water and any personal medication you normally carry.</li>
<li>Your medical information if you have a condition that may affect diving.</li>
</ul>

<h2>A Local Option</h2>
<p><a href="https://chalokreefdivers.com/courses-on-koh-tao/try-scuba-diving/" target="_blank" rel="noopener">Chalok Reef Divers</a> is one Chalok-based option for introductory diving, with a quieter south-island base than central Sairee. It is a useful example for visitors who prefer a smaller, calmer setting.</p>
<p><em>KohTao.Rocks has worked with Chalok Reef Divers, so this is not a completely independent recommendation. We include it because we know the operation and its Chalok location, but visitors should still compare several centres and choose the environment that suits them.</em></p>

<h2>Next Steps</h2>
<p>If you want to become certified, read the <a href="/open-water-course-koh-tao/">Open Water course guide</a>. For the bigger picture, start with <a href="/diving-in-koh-tao/">Diving in Koh Tao</a>.</p>
HTML
        ),
        'open-water-course-koh-tao' => array(
            'title' => 'Open Water Diving Courses in Koh Tao',
            'excerpt' => 'A practical guide to Open Water diving courses in Koh Tao, with questions to ask before booking.',
            'seo_title' => 'Open Water Course Koh Tao | Beginner Certification Guide',
            'seo_description' => 'Learn what an Open Water diving course includes on Koh Tao, how agencies differ, what to ask before booking, and how to choose a suitable dive school.',
            'content' => <<<'HTML'
<h1>Open Water Diving Courses in Koh Tao</h1>
<p>An Open Water course is the entry-level scuba certification for people who want to become qualified divers. Koh Tao is one of Thailand's busiest places to learn, with warm water, many dive schools and beginner-friendly dive sites close to the island.</p>
<p>The course is more involved than a one-off <a href="/try-scuba-koh-tao/">Try Scuba experience</a>. You learn theory, practise skills and complete open-water training dives with an instructor. Course length and daily schedule vary by school, training agency and weather.</p>

<h2>What Certification Allows</h2>
<p>After certification, Open Water divers can usually join recreational fun dives with a buddy within agency depth limits and local rules. Exact limits can vary by age and agency, so check the standards for the course you choose.</p>

<h2>Who It Is For</h2>
<ul>
<li>Beginners who want a recognised scuba certification.</li>
<li>Travellers who want to continue fun diving after Koh Tao.</li>
<li>People who are comfortable in the water and ready for a few days of learning.</li>
<li>Visitors who prefer structured training rather than a single introductory dive.</li>
</ul>

<h2>Common Course Components</h2>
<ul>
<li><strong>Theory:</strong> online or classroom learning covering equipment, pressure, dive planning, safety and the underwater environment.</li>
<li><strong>Confined-water or pool training:</strong> controlled practice of key skills before open-water dives.</li>
<li><strong>Open-water dives:</strong> supervised training dives at suitable sites where you apply the skills in real conditions.</li>
</ul>

<h2>PADI, SSI, RAID and Other Agencies</h2>
<p>Koh Tao has schools teaching through several recognised agencies. For most new divers, the instructor, safety culture, group size, language and learning environment matter more than the logo on the card. Ask how the course is taught, how many students are in the group and what support is available if you need more time.</p>

<h2>Medical and Swimming Considerations</h2>
<p>You will need to complete a diving medical questionnaire. Some answers may mean you need medical clearance before starting. You should also be able to swim and float comfortably enough for the course requirements. If you are unsure, ask the dive centre before booking.</p>

<h2>Questions To Ask Before Booking</h2>
<ul>
<li>How many students are normally in each group?</li>
<li>Which language will the course be taught in?</li>
<li>Where are the confined-water sessions held?</li>
<li>What is included: learning materials, certification, equipment, insurance, transfers and boat fees?</li>
<li>What happens if you need extra time?</li>
<li>Can accommodation be arranged, and where is it located?</li>
<li>How does the school avoid rushing the course?</li>
</ul>

<h2>Where You Might Dive</h2>
<p>Beginner course dives are usually planned around calm conditions and suitable training sites. <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a>, <a href="/twins/">Twins</a>, <a href="/white-rock/">White Rock</a>, <a href="/mango-bay-dive-site/">Mango Bay Dive Site</a> and <a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a> can all be relevant in the right conditions.</p>

<h2>After Certification</h2>
<p>Many new divers stay on Koh Tao for <a href="/fun-diving-koh-tao/">fun diving</a> or continue with advanced training. If you are planning a longer course, also read <a href="/where-to-stay-koh-tao/">Where to Stay in Koh Tao</a>; location makes a real difference to early starts, evening study and how relaxed the course feels.</p>

<h2>A Local Option</h2>
<p><a href="https://chalokreefdivers.com/courses-on-koh-tao/open-water-course/" target="_blank" rel="noopener">Chalok Reef Divers</a> is a Chalok-based dive centre and a useful example for visitors looking for small-group training away from the busiest Sairee nightlife. Its Chalok location also pairs naturally with nearby accommodation options.</p>
<p><em>KohTao.Rocks has worked with Chalok Reef Divers, so this is not a completely independent recommendation. We include it because we know the operation and its Chalok location, but visitors should still compare several centres and choose the environment that suits them.</em></p>

<h2>Plan Your First Course</h2>
<p>Compare this with <a href="/try-scuba-koh-tao/">Try Scuba</a>, read <a href="/choosing-a-dive-school-koh-tao/">how to choose a dive school in Koh Tao</a>, or return to the main <a href="/diving-in-koh-tao/">Diving in Koh Tao</a> hub.</p>
HTML
        ),
        'fun-diving-koh-tao' => array(
            'title' => 'Fun Diving in Koh Tao for Certified Divers',
            'excerpt' => 'How recreational fun diving works on Koh Tao for certified divers, including sites, conditions and what to ask.',
            'seo_title' => 'Fun Diving Koh Tao | Guide for Certified Divers',
            'seo_description' => 'A certified diver guide to fun diving in Koh Tao, including schedules, refresher dives, site choice, equipment, Chumphon Pinnacle, Sail Rock and HTMS Sattakut.',
            'content' => <<<'HTML'
<h1>Fun Diving in Koh Tao for Certified Divers</h1>
<p>Fun diving is for certified divers who want to join recreational dive trips around Koh Tao. The island has relaxed reef dives, shallow refreshers, wreck dives, deeper pinnacles and occasional special trips, but the best site on any day depends on conditions and the dive centre's boat plan.</p>

<h2>Who Can Fun Dive?</h2>
<p>You need proof of certification, either physical or digital. A logbook is useful, especially if you want to visit deeper or more challenging sites. If you have not dived for a while, expect the dive centre to recommend or require a refresher or scuba review before joining normal boat dives.</p>

<h2>How Dive Trips Usually Work</h2>
<ul>
<li>Morning and afternoon boats are common, but schedules vary by operator.</li>
<li>The number of dives depends on the trip, site choice and boat plan.</li>
<li>Guides normally group divers by certification, recent experience and comfort level.</li>
<li>Equipment rental is usually available, but check what is included before booking.</li>
<li>Night diving may be available with some operators and in suitable conditions.</li>
</ul>

<h2>How Sites Are Chosen</h2>
<p>No honest dive centre can promise a specific site every day. Wind, current, visibility, boat traffic, certification level and recent experience all matter. If you have a target site, tell the dive centre, but stay flexible.</p>

<h2>Good Sites for Easier Fun Dives</h2>
<p><a href="/white-rock/">White Rock</a>, <a href="/twins/">Twins</a>, <a href="/japanese-gardens-dive-site/">Japanese Gardens Dive Site</a>, <a href="/mango-bay-dive-site/">Mango Bay Dive Site</a> and <a href="/ao-leuk-dive-site/">Ao Leuk Dive Site</a> can all work well for relaxed dives, refreshers or newer certified divers when conditions suit.</p>

<h2>Headline Sites for Confident Divers</h2>
<p><a href="/chumphon-pinnacle/">Chumphon Pinnacle</a>, <a href="/sail-rock/">Sail Rock</a> and <a href="/sattakut-wreck/">HTMS Sattakut</a> are three of the best-known dive experiences connected with Koh Tao. They are not always the right choice for every diver on every day, so listen to the briefing and be honest about your recent experience.</p>
<ul>
<li><strong>Chumphon Pinnacle:</strong> offshore pinnacle, schooling fish and deeper profiles.</li>
<li><strong>Sail Rock:</strong> special trip style site with bigger water, the Chimney and large schools when conditions are good.</li>
<li><strong>HTMS Sattakut:</strong> Koh Tao's main wreck dive, best treated with good buoyancy and appropriate certification.</li>
</ul>

<h2>What To Bring</h2>
<ul>
<li>Certification card or app.</li>
<li>Logbook if you have one.</li>
<li>Swimwear, towel and reef-safe sun protection.</li>
<li>Any personal dive equipment you prefer to use.</li>
<li>Seasickness medication if you know you need it, taken early enough to work.</li>
</ul>

<h2>Choosing an Operator</h2>
<p>Ask how groups are organised, whether a guide is included, what equipment is available, how site decisions are made and what happens if conditions change. A good dive centre should ask about your certification, recent dives and comfort level before sending you to a challenging site.</p>

<h2>A Local Option</h2>
<p>Chalok Reef Divers is one Chalok-based option for recreational diving, useful for visitors staying in the south of the island or looking for a quieter base than central Sairee.</p>
<p><em>KohTao.Rocks has worked with Chalok Reef Divers, so this is not a completely independent recommendation. We include it because we know the operation and its Chalok location, but visitors should still compare several centres and choose the environment that suits them.</em></p>

<h2>Plan Your Dives</h2>
<p>Use the main <a href="/diving-in-koh-tao/">Diving in Koh Tao</a> hub to compare dive sites, read <a href="/choosing-a-dive-school-koh-tao/">how to choose a dive school</a>, or check <a href="/where-to-stay-koh-tao/">where to stay in Koh Tao</a> if you want to be close to your dive centre.</p>
HTML
        ),
        'choosing-a-dive-school-koh-tao' => array(
            'title' => 'How to Choose a Dive School in Koh Tao',
            'excerpt' => 'Independent, practical questions to ask before choosing a Koh Tao dive school for try dives, courses or fun diving.',
            'seo_title' => 'How to Choose a Dive School in Koh Tao',
            'seo_description' => 'Practical advice for choosing a Koh Tao dive school, including location, group size, instructor attention, safety culture, agencies, equipment and warning signs.',
            'content' => <<<'HTML'
<h1>How to Choose a Dive School in Koh Tao</h1>
<p>Koh Tao has many dive schools, and the best choice depends on what kind of trip you want. A first-time diver, a nervous learner, a certified fun diver and a future Divemaster may all need different environments.</p>
<p>Use this guide as a practical checklist before booking, especially if you are comparing a <a href="/try-scuba-koh-tao/">Try Scuba experience</a>, an <a href="/open-water-course-koh-tao/">Open Water course</a> or <a href="/fun-diving-koh-tao/">fun diving</a>.</p>

<h2>Location Matters</h2>
<ul>
<li><strong>Sairee:</strong> convenient for nightlife, restaurants and a social backpacker feel.</li>
<li><strong>Mae Haad:</strong> practical for the pier, short stays and easy arrivals or departures.</li>
<li><strong>Chalok:</strong> quieter south-island base with a more relaxed atmosphere.</li>
<li><strong>Quieter areas:</strong> peaceful, but check transport, boat departure point and evening food options.</li>
</ul>
<p>For longer courses, being close to the dive centre can make early starts and study time easier. See <a href="/where-to-stay-koh-tao/">Where to Stay in Koh Tao</a> for area context.</p>

<h2>Questions To Ask</h2>
<ul>
<li>How many students or divers are normally in each group?</li>
<li>Who will teach or guide you, and how experienced are they with your level?</li>
<li>Which language will the course or briefing be in?</li>
<li>Is there a pool or controlled confined-water setup?</li>
<li>What boat schedule do they normally use?</li>
<li>Which training agency do they teach through, and why?</li>
<li>What is included: equipment, learning materials, certification, insurance, transfers and accommodation?</li>
<li>How do they handle students who need more time?</li>
<li>How do they decide dive sites when weather or visibility changes?</li>
</ul>

<h2>Safety Culture</h2>
<p>A good school explains medical requirements clearly, checks recent experience for certified divers, gives proper briefings and does not make you feel awkward for asking questions. Equipment should look cared for, staff should be willing to explain what is included, and the pace should feel realistic.</p>

<h2>Course Agency</h2>
<p>PADI, SSI, RAID and other recognised agencies all have standards and international recognition. The agency matters, but the dive centre, instructor, group size and learning environment usually matter more for your real experience.</p>

<h2>Social or Quiet?</h2>
<p>Some travellers want a lively school with a big social scene. Others learn better somewhere quieter. Neither is automatically better. Match the school to your personality, your confidence in the water and the kind of Koh Tao trip you want.</p>

<h2>Warning Signs</h2>
<ul>
<li>Pressure to book immediately before your questions are answered.</li>
<li>Unclear inclusions or vague extra costs.</li>
<li>Very large groups without clear supervision.</li>
<li>Rushed schedules presented as the only option.</li>
<li>Poorly explained medical requirements.</li>
<li>Promises of specific dive sites regardless of weather or experience.</li>
</ul>

<h2>A Few Starting Points</h2>
<p><a href="https://chalokreefdivers.com/" target="_blank" rel="noopener">Chalok Reef Divers</a> is a useful starting point if you want a quieter Chalok base, small-group recreational training and a south-island setting. It will not be the perfect fit for every visitor, and Sairee or Mae Haad may suit you better if nightlife, pier access or a larger social scene is the priority.</p>
<p>Other established Koh Tao schools may also be a good fit depending on location, language, agency and atmosphere. Compare several centres before booking, especially for multi-day courses.</p>
<p><em>KohTao.Rocks has worked with Chalok Reef Divers, so this is not a completely independent recommendation. We include it because we know the operation and its Chalok location, but visitors should still compare several centres and choose the environment that suits them.</em></p>

<h2>Next Steps</h2>
<p>New divers can compare <a href="/try-scuba-koh-tao/">Try Scuba</a> with the <a href="/open-water-course-koh-tao/">Open Water course</a>. Certified divers can read the <a href="/fun-diving-koh-tao/">Fun Diving in Koh Tao</a> guide. For the full overview, return to <a href="/diving-in-koh-tao/">Diving in Koh Tao</a>.</p>
HTML
        ),
    );
}

function ktr_diving_phase1_hub_replacements_20260712() {
    $old_intro = <<<'HTML'
<h1>Diving in Koh Tao</h1>
<p>Koh Tao has beginner-friendly coral bays, classic training reefs, wreck dives, swim-throughs and deeper offshore pinnacles. This updated hub keeps the existing course and local-dive context while adding dedicated dive-site guides.</p>
<h2>Choose the Right Dive Site</h2>
<ul><li><strong>Beginners and refreshers:</strong> White Rock, Twins, Japanese Gardens, Mango Bay, Ao Leuk and Lighthouse Bay in calm conditions.</li><li><strong>Advanced and deeper dives:</strong> Chumphon Pinnacle, Southwest Pinnacle, Sail Rock, HTMS Sattakut, Green Rock and Shark Island when conditions suit.</li><li><strong>Beach and snorkelling crossover:</strong> Ao Leuk, Hin Wong Bay, Mango Bay and Japanese Gardens have separate visitor pages for non-divers.</li><li><strong>Conditions matter:</strong> currents, visibility and wind direction can change the best site choice on any given day.</li></ul>
HTML;

    $new_intro = <<<'HTML'
<h1>Diving in Koh Tao</h1>
<p>Koh Tao has beginner-friendly coral bays, classic training reefs, wreck dives, swim-throughs and deeper offshore pinnacles. Use this guide to choose the right next step: try diving once, get certified, join fun dives as a qualified diver, continue training or start thinking about professional-level diving.</p>
<p>The dive-site list below is still here, but the first question is what kind of diver you are today.</p>
<h2>Want to Try Diving?</h2>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/try-scuba-koh-tao/">Try Scuba</a></h3><p>A one-off introductory diving experience for complete beginners. No previous certification is required, and it is a good choice if you want to experience breathing underwater without completing a full course.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/open-water-course-koh-tao/">Open Water Course</a></h3><p>The entry-level certification for visitors who want to become qualified divers. Course length and exact schedule vary by school, agency and sea conditions.</p></article>
</div>
<h2>Already Certified?</h2>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3><a href="/fun-diving-koh-tao/">Fun Diving</a></h3><p>For qualified divers visiting Koh Tao. Bring proof of certification and be honest about your recent experience so the dive centre can match you to suitable sites.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Explore Koh Tao's Dive Sites</h3><p>Start with <a href="/chumphon-pinnacle/">Chumphon Pinnacle</a>, <a href="/sail-rock/">Sail Rock</a> and <a href="/sattakut-wreck/">HTMS Sattakut</a>, then use the full dive-site grid below to compare easier reefs, wreck dives, offshore pinnacles and condition-dependent sites.</p></article>
</div>
<h2>Continue Your Training</h2>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Advanced Diving</h3><p>Build confidence after Open Water with deeper dives, navigation, buoyancy and site choices such as Chumphon Pinnacle, Southwest Pinnacle or HTMS Sattakut when appropriate.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Rescue &amp; EFR</h3><p>A logical next step for divers who want stronger awareness, emergency thinking and better buddy skills before more independent diving.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Nitrox &amp; Specialty Courses</h3><p>Useful options can include Nitrox, buoyancy, deep, wreck or night diving, depending on your goals and current certification.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Technical Diving</h3><p>Technical and sidemount routes need specialist instruction, realistic self-assessment and current provider checks before booking.</p></article>
</div>
<h2>Become a Dive Professional</h2>
<p>Koh Tao is a popular place for longer-term professional training, especially Divemaster courses and instructor pathways. Quality, inclusions, mentoring, accommodation and the working environment vary considerably between centres, so compare carefully and speak to current trainees where possible.</p>
<div class="ktr-card-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin:24px 0;">
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Divemaster Training</h3><p>The first professional level for divers who want to assist courses, guide certified divers and spend longer on the island.</p></article>
<article class="ktr-card" style="border:1px solid #e5e5e5;border-radius:8px;padding:18px;background:#fff;"><h3>Instructor Training</h3><p>Instructor training requires careful provider checks. Do not choose only by speed or price; mentoring quality and real teaching preparation matter.</p></article>
</div>
<h2>Choose the Right Dive Site</h2>
<ul><li><strong>Beginners and refreshers:</strong> White Rock, Twins, Japanese Gardens Dive Site, Mango Bay, Ao Leuk and Lighthouse Bay in calm conditions.</li><li><strong>Advanced and deeper dives:</strong> Chumphon Pinnacle, Southwest Pinnacle, Sail Rock, HTMS Sattakut, Green Rock and Shark Island when conditions suit.</li><li><strong>Beach and snorkelling crossover:</strong> Ao Leuk, Hin Wong Bay, Mango Bay and Koh Nang Yuan have separate visitor pages for non-divers.</li><li><strong>Conditions matter:</strong> currents, visibility and wind direction can change the best site choice on any given day.</li></ul>
HTML;

    $old_next_steps = <<<'HTML'
<h2>Courses, Snorkelling and Next Steps</h2>
<p>New divers can start with <a href="/padi-open-water-course/">Open Water training</a>, try easier sites first, or compare surface options in <a href="/snorkeling-trips/">Snorkelling Trips</a>. For island context, see the <a href="/best-beaches-koh-tao/">beaches and bays guide</a>.</p>
HTML;

    $new_next_steps = <<<'HTML'
<h2>Courses, Snorkelling and Next Steps</h2>
<p>New divers can compare <a href="/try-scuba-koh-tao/">Try Scuba</a> with an <a href="/open-water-course-koh-tao/">Open Water course</a>. Certified divers can start with <a href="/fun-diving-koh-tao/">Fun Diving in Koh Tao</a>, and everyone should read <a href="/choosing-a-dive-school-koh-tao/">How to Choose a Dive School in Koh Tao</a> before booking.</p>
<p>If you are not ready for scuba, compare surface options in <a href="/snorkeling-trips/">Snorkelling Trips</a>. For island context, see the <a href="/best-beaches-koh-tao/">beaches and bays guide</a> and <a href="/where-to-stay-koh-tao/">Where to Stay in Koh Tao</a>.</p>
HTML;

    return array(
        array(
            'description' => 'Replace the old narrow intro with Phase 1 visitor journey sections before the dive-site grid.',
            'from' => $old_intro,
            'to' => $new_intro,
        ),
        array(
            'description' => 'Replace old course bridge with links to the new Phase 1 pages.',
            'from' => $old_next_steps,
            'to' => $new_next_steps,
        ),
    );
}

function ktr_diving_phase1_expected_existing_slugs_20260712() {
    return array(
        'diving-in-koh-tao',
        'chumphon-pinnacle',
        'sattakut-wreck',
        'sail-rock',
        'white-rock',
        'twins',
        'japanese-gardens-dive-site',
        'mango-bay-dive-site',
        'ao-leuk-dive-site',
        'where-to-stay-koh-tao',
    );
}

function ktr_diving_phase1_get_exact_slug_post_20260712($slug) {
    $posts = get_posts(array(
        'name' => $slug,
        'post_type' => array('page', 'post', 'attachment'),
        'post_status' => array('publish', 'draft', 'private', 'pending', 'future'),
        'numberposts' => 5,
        'suppress_filters' => true,
    ));

    $matches = array();
    foreach ($posts as $post) {
        if ($post->post_name === $slug) {
            $matches[] = $post;
        }
    }

    return $matches;
}

function ktr_diving_phase1_render_change_summary_20260712($slug, $field, $detail) {
    return array_merge(array('slug' => $slug, 'field' => $field), $detail);
}

function ktr_diving_phase1_run_20260712($mode = 'dry-run') {
    global $wpdb;

    $mode = ($mode === 'apply') ? 'apply' : 'dry-run';
    $page_specs = ktr_diving_phase1_page_specs_20260712();
    $report = array(
        'mode' => $mode,
        'status' => null,
        'checked_existing_slugs' => ktr_diving_phase1_expected_existing_slugs_20260712(),
        'phase1_slugs' => array_keys($page_specs),
        'missing' => array(),
        'refused' => array(),
        'changes' => array(),
        'unchanged' => array(),
        'notes' => array(
            'new_pages_are_published_locally_for_preview_validation',
            'old_posts_are_not_deleted_drafted_or_redirected',
            'menus_and_redirects_are_not_changed',
            'hub_update_uses_targeted_fragment_replacements_not_full_body_replacement',
        ),
    );

    foreach (ktr_diving_phase1_expected_existing_slugs_20260712() as $slug) {
        $matches = ktr_diving_phase1_get_exact_slug_post_20260712($slug);
        $page_matches = array_values(array_filter($matches, function ($post) {
            return $post->post_type === 'page';
        }));
        if (count($page_matches) !== 1) {
            $report['missing'][] = $slug;
        }
    }

    foreach ($page_specs as $slug => $spec) {
        $matches = ktr_diving_phase1_get_exact_slug_post_20260712($slug);
        if (count($matches) > 1) {
            $report['refused'][] = array('slug' => $slug, 'reason' => 'multiple exact slug matches');
            continue;
        }
        if ($matches && $matches[0]->post_type !== 'page') {
            $report['refused'][] = array('slug' => $slug, 'reason' => 'exact slug exists but is not a page', 'post_type' => $matches[0]->post_type);
            continue;
        }
    }

    if ($report['missing'] || $report['refused']) {
        $report['status'] = 'refused_preflight_failed';
        return $report;
    }

    $hub = ktr_diving_phase1_get_exact_slug_post_20260712('diving-in-koh-tao')[0];
    $hub_content = $hub->post_content;
    $hub_new_content = $hub_content;
    $hub_updates = array();

    foreach (ktr_diving_phase1_hub_replacements_20260712() as $replacement) {
        $count = substr_count($hub_new_content, $replacement['from']);
        if ($count > 1) {
            $report['refused'][] = array('slug' => 'diving-in-koh-tao', 'reason' => 'hub fragment appears more than once', 'description' => $replacement['description'], 'count' => $count);
            continue;
        }
        if ($count === 1) {
            $hub_new_content = str_replace($replacement['from'], $replacement['to'], $hub_new_content);
            $hub_updates[] = array('description' => $replacement['description']);
            continue;
        }
        if (strpos($hub_new_content, $replacement['to']) !== false) {
            $report['unchanged'][] = ktr_diving_phase1_render_change_summary_20260712('diving-in-koh-tao', 'post_content', array('description' => $replacement['description'], 'value' => 'already_updated'));
        } else {
            $report['refused'][] = array('slug' => 'diving-in-koh-tao', 'reason' => 'expected hub fragment not found and replacement not already present', 'description' => $replacement['description']);
        }
    }

    if ($hub_updates) {
        $report['changes'][] = ktr_diving_phase1_render_change_summary_20260712('diving-in-koh-tao', 'post_content', array(
            'update_type' => 'targeted_fragments',
            'updates' => $hub_updates,
        ));
    }

    foreach ($page_specs as $slug => $spec) {
        $matches = ktr_diving_phase1_get_exact_slug_post_20260712($slug);
        if (!$matches) {
            $report['changes'][] = ktr_diving_phase1_render_change_summary_20260712($slug, 'page', array('action' => 'create', 'post_status' => 'publish', 'title' => $spec['title']));
            continue;
        }

        $page = $matches[0];
        $page_changes = array();
        if ($page->post_title !== $spec['title']) {
            $page_changes[] = 'title';
        }
        if ($page->post_content !== $spec['content']) {
            $page_changes[] = 'content';
        }
        if ($page->post_excerpt !== $spec['excerpt']) {
            $page_changes[] = 'excerpt';
        }
        if ($page->post_status !== 'publish') {
            $page_changes[] = 'status';
        }

        if ($page_changes) {
            $report['changes'][] = ktr_diving_phase1_render_change_summary_20260712($slug, 'page', array('action' => 'update', 'post_id' => $page->ID, 'changes' => $page_changes, 'post_status' => 'publish'));
        } else {
            $report['unchanged'][] = ktr_diving_phase1_render_change_summary_20260712($slug, 'page', array('value' => 'already_current'));
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

    if ($hub_updates) {
        $wpdb->update(
            $wpdb->posts,
            array(
                'post_content' => $hub_new_content,
                'post_modified' => current_time('mysql'),
                'post_modified_gmt' => current_time('mysql', 1),
            ),
            array('ID' => $hub->ID),
            array('%s', '%s', '%s'),
            array('%d')
        );
        clean_post_cache($hub->ID);
    }

    foreach ($page_specs as $slug => $spec) {
        $matches = ktr_diving_phase1_get_exact_slug_post_20260712($slug);
        $now = current_time('mysql');
        $now_gmt = current_time('mysql', 1);

        if (!$matches) {
            $inserted = $wpdb->insert(
                $wpdb->posts,
                array(
                    'post_author' => 1,
                    'post_date' => $now,
                    'post_date_gmt' => $now_gmt,
                    'post_content' => $spec['content'],
                    'post_title' => $spec['title'],
                    'post_excerpt' => $spec['excerpt'],
                    'post_status' => 'publish',
                    'comment_status' => 'closed',
                    'ping_status' => 'closed',
                    'post_password' => '',
                    'post_name' => $slug,
                    'to_ping' => '',
                    'pinged' => '',
                    'post_modified' => $now,
                    'post_modified_gmt' => $now_gmt,
                    'post_content_filtered' => '',
                    'post_parent' => 0,
                    'guid' => home_url('/' . $slug . '/'),
                    'menu_order' => 0,
                    'post_type' => 'page',
                    'post_mime_type' => '',
                    'comment_count' => 0,
                ),
                array('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d', '%s', '%s', '%d')
            );
            if (!$inserted) {
                $report['refused'][] = array('slug' => $slug, 'reason' => 'direct_insert_failed', 'message' => $wpdb->last_error);
                continue;
            }
            $post_id = (int) $wpdb->insert_id;
        } else {
            $post_id = (int) $matches[0]->ID;
            $updated = $wpdb->update(
                $wpdb->posts,
                array(
                    'post_title' => $spec['title'],
                    'post_content' => $spec['content'],
                    'post_excerpt' => $spec['excerpt'],
                    'post_status' => 'publish',
                    'post_modified' => $now,
                    'post_modified_gmt' => $now_gmt,
                ),
                array('ID' => $post_id),
                array('%s', '%s', '%s', '%s', '%s', '%s'),
                array('%d')
            );
            if ($updated === false) {
                $report['refused'][] = array('slug' => $slug, 'reason' => 'direct_update_failed', 'message' => $wpdb->last_error);
                continue;
            }
        }

        update_post_meta($post_id, '_siteseo_titles_title', $spec['seo_title']);
        update_post_meta($post_id, '_siteseo_titles_desc', $spec['seo_description']);
        clean_post_cache($post_id);
    }

    if ($report['refused']) {
        $report['status'] = 'applied_with_errors';
        return $report;
    }

    $report['status'] = $report['changes'] ? 'applied' : 'already_current';
    return $report;
}

function ktr_diving_phase1_output_20260712($report) {
    $json = wp_json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if (PHP_SAPI === 'cli') {
        echo $json . PHP_EOL;
        return;
    }
    wp_die('<pre>' . esc_html($json) . '</pre>');
}

function ktr_diving_phase1_maybe_run_20260712() {
    $mode = null;

    if (PHP_SAPI === 'cli' && defined('KTR_DIVING_SECTION_PHASE1_20260712')) {
        $mode = (string) KTR_DIVING_SECTION_PHASE1_20260712;
    } elseif (is_admin() && isset($_GET['ktr_diving_section_phase1_20260712'])) {
        if (!current_user_can('manage_options')) {
            wp_die('Not allowed', 403);
        }
        check_admin_referer('ktr_diving_section_phase1_20260712');
        $mode = sanitize_key(wp_unslash($_GET['ktr_diving_section_phase1_20260712']));
    }

    if ($mode === null) {
        return;
    }

    if ($mode !== 'dry-run' && $mode !== 'apply') {
        ktr_diving_phase1_output_20260712(array(
            'status' => 'invalid_mode',
            'allowed_modes' => array('dry-run', 'apply'),
        ));
        return;
    }

    ktr_diving_phase1_output_20260712(ktr_diving_phase1_run_20260712($mode));
}
add_action('plugins_loaded', 'ktr_diving_phase1_maybe_run_20260712', 99);
