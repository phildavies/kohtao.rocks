# Phase 2 Diving Image Selection and Validation

Date: 2026-07-13

Source folder audited: `C:\Users\zugon\OneDrive\Chalok Reef Divers\New folder`

Full inventory: `docs/phase2-diving-images/source-image-inventory.md`

## Selected Page Images

| Page | Placement | Original / existing media | New filename | Original dimensions / size | Final dimensions / size | Alt text | Notes |
|---|---|---|---|---:|---:|---|---|
| `/try-scuba-koh-tao/` | Featured image and first image after H1 | `DSC02665.jpg` | `try-scuba-koh-tao-beginner-skills.webp` | 1024x683 / 140 KB | 1024x683 / 78 KB | Beginner diver practising underwater skills with an instructor | Real CRD underwater training moment; darker than ideal but relevant and not visibly branded. |
| `/open-water-course-koh-tao/` | Featured image and first image after H1 | Existing media ID 1316, `2018/04/IMG_3338.jpg` | Reused existing media | 1235x693 / 210 KB | Reused existing media | Open Water students checking scuba equipment before training | Best fit for course/equipment-check intent; no duplicate import. |
| `/fun-diving-koh-tao/` | Featured image and first image after H1 | `responsible diving.jpg` | `fun-diving-koh-tao-reef-dive.webp` | 1024x683 / 142 KB | 1024x683 / 66 KB | Certified diver exploring a coral reef | Strong certified-diver reef context; no obvious branding. |
| `/choosing-a-dive-school-koh-tao/` | Featured image and first image after H1 | Existing media ID 1356, `2018/04/DSC01853.jpg` | Reused existing media | 1040x693 / 119 KB | Reused existing media | Dive instructor briefing a small group on a boat | Briefing/small-group context; not dominated by CRD branding. |
| `/diving-in-koh-tao/` | Existing featured image retained; four journey-section images added | Mixed reused/new media | See below | See below | See below | See below | Dive-site grid remains intact. |

## Hub Journey Images

| Hub section | Image | Alt text |
|---|---|---|
| Want to Try Diving? | `try-scuba-koh-tao-beginner-skills.webp` | Beginner diver practising underwater skills with an instructor |
| Already Certified? | `fun-diving-koh-tao-reef-dive.webp` | Certified diver exploring a coral reef |
| Continue Your Training | `continuing-diving-training-koh-tao-group.webp` from `advanced-diving-course-koh-tao-group.jpg`, 1024x683 / 162 KB to 1024x683 / 83 KB | Small group of divers underwater during continuing training |
| Become a Dive Professional | `diving-professional-training-koh-tao-boat.webp` from `DSC06607.jpg`, 1024x683 / 257 KB to 1024x683 / 138 KB | Divers preparing to enter the water from a dive boat |

## Branding, Faces, Credits

CRD source images were copied and optimized locally; originals were not moved, deleted, or overwritten.

Faces are clearly visible in the existing briefing image and partially/through masks in the diver group and boat images. The boat/professional hub image has boat markings/Thai text visible; it is not used on the Choosing a Dive School page. No logos were removed.

Recommended credit: add a neutral credit only if the site already adopts an image-credit pattern. Suggested wording: `Selected diving photos courtesy of Chalok Reef Divers.` Do not add it only to the Choosing a Dive School page because that could over-associate the neutral guide with one school.

## Local Validation

Helper created: `wp-content/mu-plugins/ktr-diving-section-phase2-images-20260713.php`

New local media files: `wp-content/uploads/ktr-phase2-diving-images/`

The helper matches pages by slug and media by attachment filename, registers new attachments idempotently, supports dry-run/apply, refuses conflicts, and does nothing on normal page loads.

Image HTML uses `width` and `height` attributes, `loading="lazy"`, `decoding="async"`, responsive `width:100%; height:auto`, and `max-width:1024px` on the figure to avoid upscaling the prepared WebP files.

Deployment caveat: the current `.cpanel.yml` will copy this subfolder because it rsyncs the whole repository, but it uses `--delete` for the full deployment path. That means it should be reviewed before deployment if unrelated live-only uploads may exist. The Phase 2 helper is not executed by `.cpanel.yml`.

Validation results:

| Check | Result |
|---|---|
| Initial dry-run | Clean; no missing pages/media/refusals. |
| First apply | Applied locally. A local Nginx Helper CLI hook caused a fatal during the first content update; the helper was corrected to use direct guarded content updates like Phase 1. |
| Retry apply | Applied remaining image assignments. |
| Second apply | `already_current`, zero changes. |
| Final dry-run | `already_current`, zero changes. |
| Normal load | `wp-load.php` without the trigger constant outputs only `normal-load-ok`; helper did not run. |
| Local rendered HTML | All five target pages return HTTP 200 via `kohtao-rocks.local`; expected image files, alt text, and max-width cap are present. |
| Desktop browser check | Try Scuba rendered at desktop width with no horizontal overflow. |
| Mobile/responsive check | Inserted figures are responsive (`width:100%; height:auto`), carry width/height attributes, and are capped at `max-width:1024px`; local HTML confirms the responsive markup on all target pages. |
| Hub grid | Existing dive-site grid content remains present, including White Rock, Chumphon Pinnacle and Southwest Pinnacle references. |
| Duplicate media | No selected attachment filename has more than one Media Library record. |
| Text/menu/slugs/redirects | No menus, slugs or redirects changed; helper only inserts marked image figures and featured-image/alt metadata. |

## Remaining Image Notes

The Try Scuba source is relevant but slightly dark. If a brighter shallow-water beginner/instructor image becomes available later, it would be worth replacing. No live upload, deploy, staging, commit or push was performed.
