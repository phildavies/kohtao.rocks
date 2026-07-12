# Obsolete KohTao.Rocks Stage 2 and Stage 3 Helpers

The following local helper scripts are obsolete and must not be rerun:

- `tools/kohtao_stage2_import.php`
- `tools/kohtao_stage2_direct_import.php`
- `tools/kohtao_stage3_render_check.php`

They contain older generator/check wording from the Beaches, Bays and Dive Site import work. Rerunning them could reintroduce public-facing editorial or migration instructions that have since been removed or rewritten.

They have been superseded by:

- `wp-content/mu-plugins/ktr-approved-content-migration-20260712.php`

Use the guarded migration above for the approved 12 July 2026 content state. Always run and review its dry-run output before applying it.
