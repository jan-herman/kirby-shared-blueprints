# Changelog

## [3.0.0] - 2025-07-21
### Added
- Kirby 5 compatibility
- Batch delete support for pages and files sections
- Dark mode support (uses CSS variables from `jan-herman/kirby-panel-extended`)

### Fixed
- missing preview button on settings page


## [2.10.0] - 2025-07-15
### Added
- settings page
    - `pages/settings` blueprint
    - `$site->settings()` & `$site->setting()` methods
    - `setting()` helper function


## [2.9.1] - 2025-04-22
### Fixed
- bug: tag field options were empty


## [2.9.0] - 2025-03-17
### Changed
- pages section styles (gray background for icon)
- max number of images in the media library section (from 50 to 60)


## [2.8.0] - 2024-10-17
### Fixed
- v.2.7.0 accidentally introduced a breaking change in the icon field (reverted to 2.6.0)


## [2.7.0] - 2024-10-17
### Changed
- icon field
    - bump kirby-icon-field to 2.1 (adds support for kirby query language in field options)
    - use SVG sprite instead of files


## [2.6.0] - 2024-10-03
### Added
- support for page builder nested blocks

### Changed
- key name casing in translations (snake_case to kebab-case)


## [2.5.2] - 2024-08-06
### Fixed
- janitor command in optimization section


## [2.5.1] - 2024-07-25
### Fixed
- unlisted pages were not shown in the "posts" section


## [2.5.0] - 2024-06-14
### Added
- sections/settings/optimization blueprint
- `author` field to `files/image` blueprint
- `authorFallback file method (returns 'Artist from Exif')

### Changed
- file blueprints are now extendable


## [2.4.2] - 2024-03-18
### Changed
- update dependencies
    - tobimori/kirby-seo": "^1.0"


## [2.4.1] - 2024-03-10
### Changed
- update dependencies


## [2.4.0] - 2024-02-24
### Added
- `fields/excerpt` blueprint

### Removed
- links from subtitle field


## [2.3.0] - 2024-02-24
### Added
- media-library template & tab blueprint

### Changed
- image and video field query (uses media library instead of site root)

### Fixed
- missing templatesIgnore argument in pages section (error & media-library template)

### Removed
- `fields/layouts/image.card` blueprint


## [2.2.2] - 2024-02-22
### Changed
- blueprints/error.yml
    - option "read" (will be deprecated in Kirby 5) replaced with "access"


## [2.2.1] - 2024-01-03
### Added
- update dependencies
    - "tobimori/kirby-icon-field": "2.0",
    - "tobimori/kirby-seo": "1.0.0-rc.2",


## [2.2.0] - 2024-01-31
### Added
- unlisted status to default page statuses
- description for page statuses


## [2.1.3] - 2024-01-19
### Fixed
- version numbers of some dependencies
- typo in `composer.json` (jan-herman/kirby-button-field version)


## [2.1.0] - 2024-01-19
### Added
- icon field
- new-tab field

### Changed
- button field
- menu field
- replaced `jan-herman/kirby-colorextractor` package with now updated `sylvainjule/colorextractor`
- replaced `diesdasdigital/kirby-meta-knight` with `tobimori/kirby-seo`
- minor Kirby 4 related adjustments


## [2.0.1] - 2023-12-06
### Removed
- focus field dependency (was integrated into Kirby core)


## [2.0.0] - 2023-12-06
### Added
- Kirby 4.0 as a requirement

### Removed
- kirby-link-field dependency


## [1.3.1] - 2023-08-24
### Added
- info bar to the "user" user role settings


## [1.3.0] - 2023-08-24
### Added
- "user" user role


## [1.2.0] - 2023-08-12
### Added
- "editor" user role


## [1.1.1] - 2023-08-07
### Fixed
- version mismatch in composer.json


## [1.1.0] - 2023-08-07
### Changed
- image & video fields now query also files located in content root

### Fixed
- typo in email field definition


## [1.0.1] - 2023-02-20
### Added
- Added `jan-herman/kirby-colorextractor` as a dependency


## [1.0.0] - 2023-02-20
### Added
- Initial release
