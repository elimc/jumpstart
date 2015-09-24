**Changelog**
=============
### 0.1.2 (Sep 23, 2015)
* Moves template parts into a parts folder for better separation of files.

### 0.1.1 (Sep 15, 2015)
* Deletes branding folder, because WordPress includes favicon generator in WordPress 4.3.

### 0.1.0 (Aug 11, 2015)
* Updated Apple Touch Icon support.
* Friendly message to < IE9 to upgrade.
* Improved documentation.
* All JS concatenated and minified.
* h1 tag include in _base.scss to demonstrate sourcemaps during tech demos.

### 0.9.0 (July 27, 2015)
* Gulpfile.js now using modern BrowserSync syntax, which happens to be faster.
* Main.js is now enqued by default.

### 0.8.2 (July 20, 2015)
* Browsersync and Gulp are working with jumpstart, again.

### 0.8.1 (July 17, 2015)
* Fixes broken theme due to compressed SASS deleting important necessary comments in style.css.
* Adds autoprefixer support for IE9, Android 2.3, Android 4.0, and Opera 12.
* Better file structure and documentation.

### 0.8.0 (July 13, 2015)
* gulp-plumber prevents crashes from SASS errors.
* gulp-sourcemaps allows in browser editing of SASS files.
* Adds rem partial.
* Adds larger screenshot.
* Foundation folders moved for easier Bower updates.
* Some Foundation JS files now concatenated for few HTTP requests.
* New JS folder structure.

### 0.7.5 (July 9, 2015)
* Now using sourcemaps for easier debugging.
* Got rid of Bourbon.
* devDependencies all have version bumps.
* Better documentation.

### 0.7.3 (June 17, 2015)
* Refactored gulpfile.js.
* Fixed broken js link.
* Fundation version bump to 5.5.2.

### 0.7.2 (June 10, 2015)
* Adds Browsersync SSH tunnel support for rapid cross device testing.
* Improved documentation.

### 0.7.1 (Apr 6, 2015)
* Removed vestigial code.
* Modernized some functions.
* Improved bower.json file for updating Foundation.
* Added comments.php, for compatibility reasons.
* Fixed issue preventing npm install.

### 0.7 (Jan 20, 2015)
* Fixed some broken links and small bugs.
* Bumped to Foundation 5.5.0.
* Foundation is now updated via Bower. It can be updated with the `Bower update` command to get the latest foundation files.
* Major code refactor.
* A lot of pruning vestigial code.
* Fixed some issues in Gulp.js.
* fastclick, placeholder, and modernizr are now properly enqued.

### 0.6.2 (Nov 19, 2014)
* Re-enabled bourbon.
* JS scripts live-reload.

### 0.6.1 (Nov 11, 2014)
* Fixed a lot of little bugs and formatting issues.

### 0.6 (Nov 7, 2014)
* Updated JS structure to align more closely with proper Foundation structure.
* Included utility belt submodule that improves foundation.
* Included modernizr.
* Foundation updated to 5.4.6.
* Added placeholder pollyfill for old browser support.
* FastClick is now a default, for faster mobile clicking.

### 0.5.5 (Sep 25, 2014)
* Fixed error with requiring CPTs.
* Better documentation.

### 0.5.4 (Sep 19, 2014)
* Changed browsersync to be defaulted to off.
* Cleaned gulpfile.js.

### 0.5.3 (Sep 19, 2014)
* Made gulpfile.js faster and less fragile.

### 0.5.2 (Sep 16, 2014)
* Added a constants section.

### 0.5.1 (Sep 15, 2014)
* Added site branding information.
* Code refactoring.
* Navigation improvements.

### 0.5 (Sep 7, 2014)
* Node Modules folder removed. Node mules now installed with "npm install".
* Made sure Foundation and Bourbon were properly linked.
* Added a sleek new Advanced Custom Fields menu for global options.
* Created clean-front-end.php, to remove WP junk in header.
* Added a blank favicon.ico (will not cause 404 errors). Just remember to add your own favicon.
* Better documentation.

### 0.4 (Sep 5, 2014)
* Lots of little bug fixes and small feature enhancements.
* Better documentation.
* Added Foundation library.
* Added Bourbon library.

### 0.3 (Aug 21, 2014)
* Moved style.css contents to SASS files.
* Added npm modules and gulp.js.

### 0.2 (June 11, 2014)
* Added a toggler module for toggling things.
* Removed vestigial navigation.js.
* Style additions.
* Added icon option for Custom Post Type Class.
* Cleaned up and documented the Custom Post Type Class.

### 0.1.2 (June 11, 2014)
* Some grammer fixes.

### 0.1.1 (June 19, 2014)
* Fixed wrong theme name in style.css.
* Commented out admin changes.

### 0.1 (June 18, 2014)
* Initial Commit.