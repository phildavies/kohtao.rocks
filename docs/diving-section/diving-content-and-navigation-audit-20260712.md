# KohTao.Rocks Diving Content and Navigation Audit

Date: 12 July 2026  
Scope: local WordPress database and tracked project sources only  
Status: planning document only; no page, menu, redirect, commit, push or deploy action

## Executive Summary

The current `/diving-in-koh-tao/` page is mostly a dive-site hub. It has a useful list of dive-site cards and good local safety/context copy, but it does not yet serve the four main diving visitor journeys clearly:

1. Start Diving
2. Certified Divers
3. Continue Training
4. Go Pro

The strongest immediate path is to keep `/diving-in-koh-tao/` as the main hub, add journey sections to that existing slug, and reuse or rebuild the older diving posts into cleaner page-level guides. A separate dive-sites hub is not needed yet because `/diving-in-koh-tao/` already contains the dive-site list and the current menu only features three dive sites.

## Data Sources Checked

- WordPress posts/pages in the local database, including published and draft content.
- WordPress nav menu records.
- Active theme/menu settings.
- Tracked source files under `docs/`, `wp-content/mu-plugins/`, and `tools/`.
- Existing migration source, including the approved content migration and obsolete stage helpers.

No web search was performed. Current external business status for Tech Diving Thailand and Go Pro Asia still needs separate verification before recommendation.

## Existing Page Inventory

| Title | Slug | ID | Type | Status | Primary Topic | Journey | Menu | Hub/Internal Visibility | Quality | Recommendation | Overlap / Notes | Business Emphasis |
|---|---:|---:|---|---|---|---|---|---|---|---|---|---|
| Diving in Koh Tao | diving-in-koh-tao | 1401 | page | publish | Main diving hub / dive-site list | All / Certified Divers | Top-level Diving | Linked from menu; links all dive-site pages and Open Water post | Usable but incomplete | Improve | Currently behaves mainly as dive-site hub | None direct |
| Chumphon Pinnacle | chumphon-pinnacle | 1557 | page | publish | Dive site | Certified Divers | Diving submenu | Linked from hub and menu | Strong | Keep | Child of Diving page; protected slug must remain | None |
| HTMS Sattakut Wreck Koh Tao | sattakut-wreck | 1561 | page | publish | Wreck dive site | Certified Divers / Continue Training | Diving submenu | Linked from hub and menu | Strong | Keep | Child of Diving page; protected slug must remain | None |
| Sail Rock Thailand (From Koh Tao) | sail-rock | 1565 | page | publish | Offshore dive site | Certified Divers | Diving submenu | Linked from hub and menu | Strong | Keep | Child of Diving page; protected slug must remain | None |
| White Rock Dive Site | white-rock | 1914 | page | publish | Dive site | Certified Divers | No | Linked from hub and related pages | Strong | Keep | Useful beginner/refresher site | None |
| Twins Dive Site | twins | 1915 | page | publish | Dive site | Certified Divers / Start Diving | No | Linked from hub and related pages | Strong | Keep | Good beginner/course site | None |
| Japanese Gardens Dive Site | japanese-gardens-dive-site | 1916 | page | publish | Dive/snorkel training site | Start Diving / Certified Divers | No | Linked from hub, Koh Nang Yuan and related pages | Strong | Keep | Distinct from drafted `/japanese-gardens/` | None |
| Mango Bay Dive Site | mango-bay-dive-site | 1917 | page | publish | Dive site | Start Diving / Certified Divers | No | Linked from hub | Strong | Keep | Overlaps with visitor bay page but intent is distinct | None |
| Ao Leuk Dive Site | ao-leuk-dive-site | 1918 | page | publish | Dive site | Start Diving / Certified Divers | No | Linked from hub | Strong | Keep | Overlaps with beach page but intent is distinct | None |
| Hin Wong Bay Dive Site | hin-wong-bay-dive-site | 1919 | page | publish | Dive site | Certified Divers | No | Linked from hub | Strong | Keep | Overlaps with bay page but intent is distinct | None |
| Pottery / Junkyard Artificial Reef | junkyard-artificial-reef | 1920 | page | publish | Artificial reef / conservation dive | Certified Divers / Continue Training | No | Linked from hub | Strong | Keep | Useful for buoyancy/conservation context | None |
| Green Rock Dive Site | green-rock | 1921 | page | publish | Advanced-ish dive site | Certified Divers | No | Linked from hub | Strong | Keep | Safety-sensitive site | None |
| Red Rock Dive Site | red-rock | 1922 | page | publish | Route dive | Certified Divers | No | Linked from hub | Strong | Keep | Related to Nang Yuan / Japanese Gardens | None |
| Shark Island Dive Site | shark-island | 1923 | page | publish | Current-prone dive site | Certified Divers | No | Linked from hub | Strong | Keep | Important condition caveats | None |
| Southwest Pinnacle Dive Site | southwest-pinnacle | 1924 | page | publish | Offshore pinnacle | Certified Divers | No | Linked from hub | Strong | Keep | Candidate featured site but less menu-critical than Sattakut | None |
| Laem Thian Dive Site | laem-thian | 1925 | page | publish | East-coast dive site | Certified Divers | No | Linked from hub | Strong | Keep | Remote/condition dependent | None |
| Lighthouse Bay Dive Site | lighthouse-bay | 1926 | page | publish | Shallow bay-style dive | Start Diving / Certified Divers | No | Linked from hub | Strong | Keep | Crossover snorkelling context | None |
| Japanese Gardens | japanese-gardens | 1913 | page | draft | Duplicate visitor/snorkel page | N/A | No | Not linked after cleanup | Duplicate | Keep draft | Role covered by Koh Nang Yuan and Japanese Gardens Dive Site | None |
| Discover Scuba Diving - Try Scuba Diving on Koh Tao | discover-scuba-diving | 1357 | post | publish | Try dive / DSD | Start Diving | No | Not linked from current hub | Strong but should be page | Reuse/rebuild as page | Best source for Try Scuba content | Links to CRD Open Water page |
| PADI Open Water course | padi-open-water-course | 1320 | post | publish | Beginner certification | Start Diving | No | Linked from current hub once | Outdated / business-heavy | Replace or rebuild | PADI-only naming; mentions Fifty Six, Scuba Shack, Big Blue, La Bombona | Multiple school mentions; not aligned with current CRD-first plan |
| Scuba Diving Koh Tao | scuba-diving | 1349 | post | publish | Dive schools and courses guide | Main / Start Diving | No | Not linked from current hub | Usable but overlaps | Merge/improve | Overlaps with `/diving-in-koh-tao/` and choosing-a-school concept | Chalok Reef Divers linked |
| Diving & Snorkeling on Koh Tao | diving-and-snorkeling | 1382 | post | publish | Mixed snorkelling/diving guide | Main / Start Diving | No | Not linked from current hub | Usable but mixed | Merge selectively | Duplicates snorkelling and diving hubs | Links CRD Open Water |
| Is Koh Tao the Best Place to Learn Scuba Diving in Thailand? | is-koh-tao-the-best-place-to-learn-scuba-diving-in-thailand | 1777 | post | publish | Choosing/learning context | Start Diving | No | Not linked from hub | Strong support article | Keep/improve | Good source for choosing-a-school page | Links CRD Open Water |
| Fun Diving | fun-diving | 1358 | post | publish | Certified diver trips | Certified Divers | No | Not linked from hub | Usable but thin | Rebuild as page | Should become certified-diver landing page | None |
| PADI Advanced Open Water course | padi-advanced-open-water-course | 1325 | post | publish | Advanced training | Continue Training | No | Not linked from hub | Usable but old | Rebuild as page | PADI-only framing; should be agency-neutral | None obvious |
| EFR + PADI Rescue Diver course | efr-padi-rescue-diver-course | 1323 | post | publish | Rescue/EFR | Continue Training | No | Not linked from hub | Thin/outdated | Rebuild as page | Awkward copy and minimal structure | None |
| More PADI courses | more-padi-courses | 1337 | post | draft | Course directory | Continue Training / Go Pro | No | Not linked | Outdated draft | Keep draft / do not reuse directly | Old Davy Jones Locker links and broad course list | Davy Jones Locker links |
| Divemaster Training on Koh Tao | divemaster-training | 1378 | post | publish | Divemaster | Go Pro | No | Not linked from hub | Strong | Reuse/rebuild as page | Good source for Go Pro section | Recommends dive schools section; details need review |
| Chalok Reef Divers \| Chalok Baan Kao \| Koh Tao | chalok-reef-divers-chalok-baan-kao-koh-tao | 1389 | post | publish | Business profile | Business recommendation | No | Not linked from hub | Business page | Keep but disclose | Useful source for CRD recommendations | Strong CRD emphasis |
| Woodlawn Villas Koh Tao - Boutique Resort & Diving Packages with Chalok Reef Divers | woodlawn-villas-koh-tao-boutique-resort-diving-packages-with-chalok-reef-divers | 1392 | post | publish | Accommodation + diving package | Business / Where to Stay | No | Not linked from diving hub | Business page | Keep outside diving menu | Accommodation intent, not core diving architecture | CRD and Woodlawn emphasis |
| Koh Tao Travel Guide | koh-tao-travel-guide | 6 | page | publish | Site-wide travel guide | Main support | Travel Guide top menu | Mentions diving | Strong | Keep | Can link to rebuilt hub | General |
| Where to Stay in Koh Tao | where-to-stay-koh-tao | 1409 | page | publish | Accommodation | Support | Stay top menu | Mentions diving and CRD in Chalok | Strong | Keep | Cross-link future dive training pages | CRD/Woodlawn/Assava/Hydronauts with transparency |
| Snorkeling Trips | snorkeling-trips | 1353 | post | publish | Snorkelling | Support | Not in main menu | Linked from dive hub and beach pages | Strong but very long | Keep | Should remain snorkelling, not diving hub | None central |

## Current `/diving-in-koh-tao/` Audit

Current title: `Diving in Koh Tao`  
Current H1: `Diving in Koh Tao`  
Post ID: 1401  
Status: published  
Current behavior: mixed page, but mostly a dive-site hub.

### Current Section Order

1. H1: Diving in Koh Tao
2. Intro paragraph
3. Choose the Right Dive Site
4. Koh Tao Dive Site Guides
5. Dive-site card grid with 16 cards
6. Courses, Snorkelling and Next Steps
7. Preserved Local Advice

### Current Introduction

The page opens with a useful but narrow positioning statement: Koh Tao has beginner-friendly bays, training reefs, wreck dives, swim-throughs and offshore pinnacles. This is worth preserving, but it does not yet guide visitors into Start Diving / Certified Divers / Continue Training / Go Pro.

### Current Dive-Site Listings

The current card grid includes:

- Ao Leuk Dive Site
- Chumphon Pinnacle
- Green Rock Dive Site
- Hin Wong Bay Dive Site
- HTMS Sattakut Wreck Koh Tao
- Japanese Gardens Dive Site
- Laem Thian Dive Site
- Lighthouse Bay Dive Site
- Mango Bay Dive Site
- Pottery / Junkyard Artificial Reef
- Red Rock Dive Site
- Sail Rock Thailand (From Koh Tao)
- Shark Island Dive Site
- Southwest Pinnacle Dive Site
- Twins Dive Site
- White Rock Dive Site

Cards are text-only HTML cards. No page-specific images were detected in the hub card grid.

### Current Internal Links

The page links to every current dive-site page, plus:

- `/padi-open-water-course/`
- `/snorkeling-trips/`
- `/best-beaches-koh-tao/`

It does not link to existing Try Scuba, Fun Diving, Advanced, Rescue, Divemaster, dive-school guidance or Where to Stay content.

### Current Business Mentions

No direct business recommendation appears on the current hub. Business recommendations exist elsewhere, especially CRD-related posts and the Where to Stay Chalok section.

### Current Menu Role

`/diving-in-koh-tao/` is the top-level Diving menu item. Chumphon Pinnacle, HTMS Sattakut and Sail Rock are submenu children.

### Strong Copy Worth Preserving

- Beginner/refresher vs advanced/deeper site split.
- Conditions matter caveat.
- Safety notes on currents, visibility, depth, wind and boat schedules.
- Dive-site card grid.

### Thin or Missing Sections

- Start Diving overview.
- Certified divers / fun diving overview.
- Continue Training overview.
- Go Pro overview.
- Choosing a dive school.
- Neutral business recommendation/disclosure.
- Clear CTAs.
- Cross-links to Where to Stay and accommodation around dive training.

The page can be rebuilt without changing its slug.

## Current Diving Menu Audit

Menu storage: WordPress nav menu in database.  
Menu name: `Main Menu`.  
Theme location: `primary`.  
Active theme: PopularFX 1.2.7.  
Active menu-related plugins: Pagelayer and Pagelayer Pro.

### Current Diving Menu Items

| Order | Label | URL | Type | Parent |
|---:|---|---|---|---|
| 3 | Diving | `/diving-in-koh-tao/` | Page | Top-level |
| 4 | Chumphon Pinnacle | `/diving-in-koh-tao/chumphon-pinnacle/` | Page | Diving |
| 5 | HTMS Sattakut Wreck Koh Tao | `/diving-in-koh-tao/sattakut-wreck/` | Page | Diving |
| 6 | Sail Rock Thailand (From Koh Tao) | `/diving-in-koh-tao/sail-rock/` | Page | Diving |

The three submenu pages are actual WordPress pages with `post_parent = 1401`, so their local permalink is hierarchical. The protected slugs are still `chumphon-pinnacle`, `sattakut-wreck` and `sail-rock`, but the local generated URL includes the Diving parent path.

### Technical Feasibility

The current system supports normal WordPress parent/child dropdowns and Pagelayer mobile dropdown behavior. Pagelayer CSS includes dropdown and mega-menu selectors, but no current site-specific mega-menu configuration was found in this audit. A compact nested dropdown is straightforward. A true four-column mega menu may be possible with Pagelayer Pro, but should be tested visually before relying on it.

## Intended Structure Gap Analysis

| Intended Item | Existing Page Found? | Best Current Slug | Keep or Create? | Duplicate Risk | Content Gap | Recommended Action |
|---|---|---|---|---|---|---|
| Main Hub | Yes | `/diving-in-koh-tao/` | Keep | Low | Journey sections missing | Rebuild existing page |
| Try Scuba | Yes, post | `/discover-scuba-diving/` | Prefer new `/try-scuba-koh-tao/` or reuse redirect later | Medium | Need page intent/CTA | Rebuild from post |
| Open Water Course | Yes, post | `/padi-open-water-course/` | Prefer new `/open-water-course-koh-tao/` | Medium | Needs current agency-neutral copy | Rebuild |
| Fun Diving | Yes, post | `/fun-diving/` | Prefer new `/fun-diving-koh-tao/` | Medium | Thin page | Rebuild |
| All Koh Tao Dive Sites | Partly hub | `/diving-in-koh-tao/` | Keep within hub for now | Low | Dedicated anchor/section enough | Do not create separate hub yet |
| Chumphon Pinnacle | Yes | `/chumphon-pinnacle/` | Keep | Low | None urgent | Keep featured |
| Sail Rock | Yes | `/sail-rock/` | Keep | Low | None urgent | Keep featured |
| HTMS Sattakut | Yes | `/sattakut-wreck/` | Keep | Low | None urgent | Keep featured |
| Advanced Diving | Yes, post | `/padi-advanced-open-water-course/` | Prefer new `/advanced-diving-koh-tao/` | Medium | Needs agency-neutral/current copy | Rebuild |
| Rescue & EFR | Yes, post | `/efr-padi-rescue-diver-course/` | Prefer new `/rescue-diver-koh-tao/` | Medium | Thin/outdated | Rebuild |
| Nitrox & Specialties | Draft only | `/more-padi-courses/` | Create `/nitrox-and-specialty-courses-koh-tao/` | Low | Major gap | Create |
| Technical Diving | No | None | Create `/technical-diving-koh-tao/` | Low | Major gap | Create after verification |
| Divemaster Training | Yes, post | `/divemaster-training/` | Prefer new `/divemaster-training-koh-tao/` | Medium | Current enough to adapt | Rebuild |
| Instructor Training | Draft outdated content only | `/more-padi-courses/` mentions IDC | Create `/dive-instructor-training-koh-tao/` | Medium | Major gap; provider verification needed | Create later |

## Recommended Page Plan

| Recommended Page | Slug | Reuse Source | Visitor Intent | Search Intent | Purpose | Primary CTA | Internal Links | Business Mention | Disclosure Needed | Priority |
|---|---|---|---|---|---|---|---|---|---|---|
| Diving in Koh Tao | `/diving-in-koh-tao/` | Existing page | Choose a diving path | Diving Koh Tao | Main hub for all journeys | Choose your diving path | All journey pages, featured sites, Where to Stay | Light CRD mention only in recommendation block | Yes if recommending businesses | Phase 1 |
| Try Scuba Diving in Koh Tao | `/try-scuba-koh-tao/` | `discover-scuba-diving` post | First underwater experience | Try scuba Koh Tao / DSD Koh Tao | Explain DSD/try dive safely | WhatsApp/check availability with CRD or compare schools | Open Water, Japanese Gardens, Mango Bay, choosing dive school | CRD natural principal recommendation | Yes | Phase 1 |
| Open Water Course Koh Tao | `/open-water-course-koh-tao/` | `padi-open-water-course` + learn-to-dive posts | Get certified | Open Water Koh Tao | Beginner certification guide | Ask CRD about course dates | Try Scuba, choosing school, Where to Stay, beginner sites | CRD principal recommendation; mention agencies neutrally | Yes | Phase 1 |
| Fun Diving Koh Tao | `/fun-diving-koh-tao/` | `fun-diving` post + dive-site pages | Certified dives | Fun diving Koh Tao | Explain trips, schedules, refreshers, sites | Enquire with recommended dive centre | Chumphon, Sail Rock, Sattakut, White Rock, refresher/choosing school | CRD optional for local fun diving if accurate | Yes | Phase 1 |
| Advanced Diving Koh Tao | `/advanced-diving-koh-tao/` | `padi-advanced-open-water-course` | Continue after OW | Advanced Open Water Koh Tao | Advanced/Adventure diving guide | Ask about Advanced course | Chumphon, Sattakut, Southwest, Rescue | CRD if offering SSI Advanced Adventurer/Advanced | Yes | Phase 2 |
| Rescue Diver Koh Tao | `/rescue-diver-koh-tao/` | `efr-padi-rescue-diver-course` | Become safer diver | Rescue Diver Koh Tao | Rescue + EFR/React Right guide | Ask about course schedule | Advanced, Divemaster, choosing school | CRD if offering SSI Stress & Rescue / React Right | Yes | Phase 2 |
| Nitrox and Specialty Courses Koh Tao | `/nitrox-and-specialty-courses-koh-tao/` | `more-padi-courses` only as caution | Add specialties | Nitrox Koh Tao / dive specialties Koh Tao | Explain Nitrox, Deep, Wreck, Buoyancy, Night | Ask which specialty fits | Sattakut, Chumphon, Advanced, Technical | CRD for relevant recreational specialties | Yes | Phase 2 |
| Technical Diving Koh Tao | `/technical-diving-koh-tao/` | None | Tec/sidemount/deeper training | Technical diving Koh Tao | Explain technical route and suitability | Contact verified tec specialist | Sattakut, Chumphon, Sail Rock, specialties | Tech Diving Thailand if verified | Yes | Phase 2 / Later |
| Divemaster Training Koh Tao | `/divemaster-training-koh-tao/` | `divemaster-training` post | Go professional | Divemaster Koh Tao | Career training and lifestyle guide | Ask about internship/course fit | Rescue, instructor training, living on Koh Tao | CRD if offering DM; others neutrally | Yes | Phase 2 |
| Dive Instructor Training Koh Tao | `/dive-instructor-training-koh-tao/` | Draft `more-padi-courses` only for topic list | Become instructor | IDC Koh Tao / instructor course Koh Tao | Instructor pathway and provider selection | Contact verified IDC provider | Divemaster, living on Koh Tao | Go Pro Asia only after current verification | Yes | Later |
| Choosing a Dive School in Koh Tao | `/choosing-a-dive-school-koh-tao/` | `scuba-diving` + `is-koh-tao-best...` | Compare safely | Best dive school Koh Tao | Trust-building advice | Compare questions / contact recommended school | Try Scuba, Open Water, CRD profile, Where to Stay | CRD framed transparently; other schools neutral | Yes | Phase 1 |
| Living on Koh Tao During Dive Training | `/living-on-koh-tao-during-dive-training/` | Where to Stay + Divemaster content | Plan longer stay | live Koh Tao dive training | Practical planning for DM/instructor/long courses | Plan stay + ask about training | Where to Stay, Divemaster, Instructor, Chalok/Sairee/Mae Haad | CRD/Woodlawn may fit if disclosed | Yes | Later |

## Business Recommendation Plan

### Existing Local Mentions

- Chalok Reef Divers appears in local content and tracked migration content.
- Woodlawn Villas appears in accommodation/dive package context.
- Assava and Hydronauts appear in the approved Where to Stay Chalok recommendations.
- Old Open Water content mentions Fifty Six Diving, Scuba Shack Diving, Big Blue Diving and La Bombona Diving.
- Draft `more-padi-courses` contains old Davy Jones Locker links and should not be reused directly.
- Tech Diving Thailand, Go Pro Asia and Professional Diver Training were not found in local database content.

### Recommended Approach

CRD fits naturally on:

- Try Scuba
- Open Water
- Advanced Diving
- Rescue Diver
- Nitrox/specialties if offered
- Divemaster if offered
- Choosing a Dive School
- Chalok-area stay-and-dive planning

Tech Diving Thailand fits naturally on:

- Technical Diving
- Sidemount / tec path explanations
- Possibly Sattakut/Wreck context if verified and relevant

Go Pro Asia:

- No local content reference found.
- Verify current status, ownership and Koh Tao operation before inclusion.

Professional Diver Training:

- No local content reference found.
- Do not recommend as Koh Tao instructor-training provider if based elsewhere.

### Transparency Wording

Suggested wording:

> Some dive businesses mentioned on this site may be clients, partners or businesses we know personally. Recommendations are based on location, course fit, local knowledge and the type of diver the page is written for.

### Avoiding a Disguised CRD Site

- Keep the hub educational first, not sales-first.
- Use CRD as a clear recommendation where it fits, but include neutral selection criteria.
- Mention other schools neutrally without links where useful.
- Use business links sparingly and label them as recommendations, not universal rankings.
- Include a disclosure near the first recommendation block on pages with commercial mentions.

## Recommended Menu Structure

### Option A: Compact Nested Dropdown

Top-level:

- Diving -> `/diving-in-koh-tao/`

Dropdown:

1. Start Diving -> `/try-scuba-koh-tao/`
2. Open Water Course -> `/open-water-course-koh-tao/`
3. Fun Diving -> `/fun-diving-koh-tao/`
4. Dive Sites -> `/diving-in-koh-tao/#dive-sites`
5. Chumphon Pinnacle -> `/chumphon-pinnacle/`
6. Sail Rock -> `/sail-rock/`
7. HTMS Sattakut -> `/sattakut-wreck/`
8. Advanced Diving -> `/advanced-diving-koh-tao/`
9. Divemaster Training -> `/divemaster-training-koh-tao/`

Featured three dive sites: Chumphon Pinnacle, Sail Rock, HTMS Sattakut.

Pros:

- Easy with current WordPress/Pagelayer menu.
- Mobile dropdown should remain manageable.
- Does not require new mega-menu implementation.

Cons:

- Still a long dropdown.
- Journey grouping is implied by order rather than visually grouped.

### Option B: Mega Menu

Four groups:

Start Diving:

- Try Scuba -> `/try-scuba-koh-tao/`
- Open Water Course -> `/open-water-course-koh-tao/`
- Choosing a Dive School -> `/choosing-a-dive-school-koh-tao/`

Certified Divers:

- Fun Diving -> `/fun-diving-koh-tao/`
- All Koh Tao Dive Sites -> `/diving-in-koh-tao/#dive-sites`
- Chumphon Pinnacle -> `/chumphon-pinnacle/`
- Sail Rock -> `/sail-rock/`
- HTMS Sattakut -> `/sattakut-wreck/`

Continue Training:

- Advanced Diving -> `/advanced-diving-koh-tao/`
- Rescue & EFR -> `/rescue-diver-koh-tao/`
- Nitrox & Specialties -> `/nitrox-and-specialty-courses-koh-tao/`
- Technical Diving -> `/technical-diving-koh-tao/`

Go Pro:

- Divemaster Training -> `/divemaster-training-koh-tao/`
- Instructor Training -> `/dive-instructor-training-koh-tao/`
- Living on Koh Tao During Dive Training -> `/living-on-koh-tao-during-dive-training/`

Pros:

- Matches visitor journeys clearly.
- Better for desktop scanning.
- Lets dive-site links stay visible without overwhelming the first level.

Cons:

- Needs design/build validation in PopularFX/Pagelayer Pro.
- Mobile behavior must be tested carefully; four groups may become long.
- More risk than compact dropdown.

Technical feasibility: likely possible because Pagelayer contains dropdown/mega-menu CSS, but current site configuration only proves standard dropdown support. Treat mega menu as Phase 2 after a prototype.

## Internal-Linking Plan

Main hub `/diving-in-koh-tao/` should link to:

- Start Diving: Try Scuba, Open Water, Choosing a Dive School
- Certified Divers: Fun Diving, all dive sites section, Chumphon, Sail Rock, Sattakut, White Rock, Twins
- Continue Training: Advanced, Rescue, Nitrox/Specialties, Technical Diving
- Go Pro: Divemaster, Instructor Training, Living on Koh Tao
- Support: Where to Stay, Snorkelling Trips, Best Beaches

Journey pages should link back to:

- `/diving-in-koh-tao/`
- Relevant dive-site pages
- `/choosing-a-dive-school-koh-tao/`
- `/where-to-stay-koh-tao/`
- Relevant beaches/bays where location matters, especially Chalok Bay, Koh Nang Yuan, Ao Leuk, Mango Bay

Specific cross-links:

- Try Scuba -> Open Water, Japanese Gardens Dive Site, Mango Bay Dive Site, Choosing a Dive School
- Open Water -> Try Scuba, Choosing a Dive School, Where to Stay, Japanese Gardens Dive Site, Twins
- Fun Diving -> Chumphon, Sail Rock, Sattakut, White Rock, Shark Island, Southwest Pinnacle
- Advanced -> Chumphon, Southwest, Sattakut, Sail Rock, Rescue
- Rescue -> Advanced, Divemaster, Choosing a Dive School
- Nitrox/Specialties -> Advanced, Sattakut, Chumphon, Technical Diving
- Technical Diving -> Sattakut, Sail Rock, Chumphon, verified tec provider
- Divemaster -> Rescue, Instructor Training, Living on Koh Tao
- Instructor Training -> Divemaster, Living on Koh Tao, verified IDC provider

## Confirmed Content Gaps

- Try Scuba has good post content but no clean page/slug.
- Open Water has content but is PADI-only and business/outdated.
- Fun Diving exists but is thin.
- Advanced exists but is PADI-only and should be modernized.
- Rescue/EFR exists but is thin and informal.
- Nitrox/specialties have no good current page.
- Technical diving has no local page.
- Instructor training has no current page and needs provider verification.
- Choosing a dive school should be its own trust-building guide.
- Living on Koh Tao during dive training is missing.

## Duplicates and Overlaps

- `/diving-in-koh-tao/`, `/scuba-diving/`, and `/diving-and-snorkeling/` overlap as general diving guides.
- `/discover-scuba-diving/` and future `/try-scuba-koh-tao/` would duplicate unless one is migrated/redirected later.
- `/padi-open-water-course/` and future `/open-water-course-koh-tao/` would duplicate unless one is migrated/redirected later.
- `/fun-diving/` and future `/fun-diving-koh-tao/` would duplicate unless one is migrated/redirected later.
- `/japanese-gardens/` is already draft and should remain unpublished.
- Draft `/more-padi-courses/` is outdated and should not be revived as-is.

## Recommended Architecture

Main hub:

- `/diving-in-koh-tao/`

Phase 1:

- `/try-scuba-koh-tao/`
- `/open-water-course-koh-tao/`
- `/fun-diving-koh-tao/`
- `/choosing-a-dive-school-koh-tao/`
- Rebuild `/diving-in-koh-tao/` with journey sections and preserve dive-site grid.

Phase 2:

- `/advanced-diving-koh-tao/`
- `/rescue-diver-koh-tao/`
- `/nitrox-and-specialty-courses-koh-tao/`
- `/divemaster-training-koh-tao/`
- Compact menu update.

Later:

- `/technical-diving-koh-tao/`
- `/dive-instructor-training-koh-tao/`
- `/living-on-koh-tao-during-dive-training/`
- Mega-menu prototype if the compact menu becomes too dense.

## Risks and Dependencies

- Do not change protected live slugs for `/diving-in-koh-tao/`, `/chumphon-pinnacle/`, `/sattakut-wreck/`, or `/sail-rock/`.
- Existing child-page permalinks for Chumphon/Sattakut/Sail Rock include the parent path locally; slug preservation must be checked before any menu or hierarchy change.
- New journey pages will duplicate old posts unless a later redirect/draft plan is approved.
- Current Go Pro Asia and Tech Diving Thailand status requires external checking before recommendation.
- Old business-heavy posts contain outdated or possibly unsuitable recommendations.
- Commercial recommendations need consistent transparency language.
- Menu mega-menu feasibility needs visual testing before implementation.

## Recommended Next Implementation Step

Phase 1 should start with a page map and migration plan for:

1. Rebuilding `/diving-in-koh-tao/` as the main journey hub while preserving its dive-site grid and protected slug.
2. Creating or migrating the four highest-value visitor pages:
   - `/try-scuba-koh-tao/`
   - `/open-water-course-koh-tao/`
   - `/fun-diving-koh-tao/`
   - `/choosing-a-dive-school-koh-tao/`
3. Leaving menus unchanged until those pages exist locally and can be previewed.
4. Preparing a separate redirect/draft plan for old post slugs only after the new pages are approved.

## Phase 1 Implementation Status

Local Phase 1 implementation has been prepared through the guarded migration `wp-content/mu-plugins/ktr-diving-section-phase1-20260712.php`.

- Four Phase 1 pages have been created locally for preview:
  - `/try-scuba-koh-tao/`
  - `/open-water-course-koh-tao/`
  - `/fun-diving-koh-tao/`
  - `/choosing-a-dive-school-koh-tao/`
- `/diving-in-koh-tao/` now has the Phase 1 journey sections:
  - Want to Try Diving?
  - Already Certified?
  - Continue Your Training
  - Become a Dive Professional
- The existing dive-site grid and cards have been preserved.
- The Diving menu has intentionally not been changed.
- Featured images for the new pages are still pending and should be handled as a separate review.
- Phase 2 pages are still pending: Advanced Diving, Rescue & EFR, Nitrox & Specialty Courses, Technical Diving, Divemaster Training and Instructor Training.
- Tech Diving Thailand and Go Pro Asia still require current verification before they are recommended or linked.
