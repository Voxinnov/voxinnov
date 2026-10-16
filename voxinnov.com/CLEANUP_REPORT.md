# CodeIgniter Cleanup Report

Date: 2026-09-19

## Scope

Reviewed the CodeIgniter site in `voxinnov.com/`, including `application/`, `system/`, and `assets/`.

## Removed Files

Removed 17 high-confidence unwanted files, totaling approximately 2.05 MB.

### Archived asset bundles

- `assets/imgs/story.zip`
- `assets/imgs/team.zip`

### Duplicate old image versions

- `assets/imgs/hero/4/arrow-icon_old.png`
- `assets/imgs/hero/4/hero-4_old.png`
- `assets/imgs/hero/4/hero-shape-2_old.png`
- `assets/imgs/hero/4/hero-shape-3_old.png`
- `assets/imgs/logo/logo_old.png`
- `assets/imgs/logo/site-logo-white-2_old.png`

### Misplaced WordPress HTML dumps

These were HTML pages copied from `wealcoder.com`, stored inside asset folders where images/CSS files should be.

- `assets/css/animated-overlay.html`
- `assets/css/d.html`
- `assets/css/images/ui-icons_444444_256x240.html`
- `assets/css/images/ui-icons_555555_256x240.html`
- `assets/css/images/ui-icons_777620_256x240.html`
- `assets/css/images/ui-icons_777777_256x240.html`
- `assets/css/images/ui-icons_cc0000_256x240.html`
- `assets/css/images/ui-icons_ffffff_256x240.html`
- `assets/imgs/icon/logo-3.html`

## Current Project Summary

- Total files after cleanup: 687
- Approximate project size after cleanup: 65.9 MB
- Remaining main structure:
  - `application/` - CodeIgniter app code, views, config, logs/cache placeholders
  - `system/` - CodeIgniter framework core
  - `assets/` - CSS, JS, images, fonts, and videos
  - `index.php`, `.htaccess`, `composer.json`, verification/sitemap files

## Verification

Confirmed there are no remaining files matching these unwanted patterns:

- `*.zip`
- `*_old.*`
- `*.bak`
- `*.backup`
- `*.orig`
- `*.tmp`
- `*.log`
- `*~`
- `.DS_Store`
- `Thumbs.db`
- HTML files under `assets/`

## Notes

- I did not remove CodeIgniter `index.html` placeholder files. They are intentional directory-index protection files in CodeIgniter projects.
- I did not remove `system/` framework files, even if some drivers/libraries may not be used by the current site, because removing CodeIgniter core components can cause hard-to-debug runtime failures.
- I did not remove large media files or theme image folders without visual/business confirmation. Some may be unused by the four current routes, but they can still be referenced by CSS, future pages, or manual content.
- The site currently exposes four configured routes: home, about, service, and contact.

## PHP And CodeIgniter Check

Date: 2026-09-19

### PHP

- Installed PHP package: `PHP.PHP.8.5`
- Installed PHP version: `8.5.10`
- PHP executable used for checks: `C:\Users\Admin\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.5_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe`
- CLI engine: Zend Engine `4.5.10`
- OPcache: Zend OPcache `8.5.10`

### Syntax Check

Result: No PHP syntax errors detected.

Checked all `*.php` files in the site folder recursively, including `application/`, `system/`, `assets/`, and root PHP files.

### CodeIgniter

- Current project framework: CodeIgniter `3.1.13`
- CodeIgniter 3 status: already on the latest CodeIgniter 3 release.
- CodeIgniter 4 status: available as the current major CodeIgniter generation, but it is not a drop-in replacement for CodeIgniter 3. A CI3 to CI4 upgrade should be handled as a migration because controllers, config, routing, bootstrap, and app structure differ.

## CodeIgniter 4 Migration

Date: 2026-09-19

### Migration Output

- Created migrated CI4 project at `ci4-upgrade/`.
- Installed CodeIgniter `4.7.4` using the official `codeigniter4/appstarter` Composer package.
- Installed project dependencies into `ci4-upgrade/vendor/`.
- Kept the original CI3 site in place for fallback.

### Migrated Items

- Copied public assets to `ci4-upgrade/public/assets/`.
- Copied verification/sitemap files to `ci4-upgrade/public/`.
- Migrated these views to `ci4-upgrade/app/Views/`:
  - `home.php`
  - `about.php`
  - `service.php`
  - `contact.php`
  - `header.php`
  - `footer.php`
- Replaced CI3 view loading calls with CI4 `view()` calls.
- Added CI4 controller methods in `ci4-upgrade/app/Controllers/Home.php`.
- Added CI4 routes in `ci4-upgrade/app/Config/Routes.php`:
  - `/`
  - `/about`
  - `/service`
  - `/contact`
- Set CI4 base URL to `https://voxinnov.com/`.
- Removed `index.php` from generated CI4 URLs through `Config\App::$indexPage = ''`.
- Added `ci4-upgrade/.env` for local development with `app.baseURL = 'http://127.0.0.1:8085/'`.

### PHP Configuration For CI4

Enabled required/common PHP extensions in the local PHP 8.5 configuration:

- `intl`
- `mbstring`
- `openssl`
- `curl`
- `mysqli`
- `pdo_mysql`
- `fileinfo`
- `zip`

### Verification

- `php spark routes` succeeded and showed the four migrated routes.
- PHP syntax check passed for migrated `app/`, `public/`, `spark`, and `preload.php` files.
- `composer validate --strict` passed.
- Runtime smoke test passed on local CI4 dev server:
  - `/` returned HTTP 200
  - `/about` returned HTTP 200
  - `/service` returned HTTP 200
  - `/contact` returned HTTP 200
- Confirmed local pages generate local asset URLs from `http://127.0.0.1:8085/assets/`.

### Deployment Note

CodeIgniter 4 uses `public/` as the web root. For production hosting, the domain document root should point to `ci4-upgrade/public/`, not the CI4 project root. This is different from the current CI3 layout.
