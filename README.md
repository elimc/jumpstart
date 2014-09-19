**jumpstart**
===========================

A modern WordPress theme with a sophisticated build process. Inspiration is taken from JointsWP, Underscores, and numerous lessons I have picked up over the years.

About
-----

This theme comes out of the box with:
* SASS support
* Automated Gulp.js build process, with BrowserSync for live-reloading CSS, JS, and PHP
* Automatically generated Custom Post Types and Custom Post Taxonomy's
* Foundation
* Bourbon
* Many custom functions that I have put together over the years

Those who prefer CSS over SASS can throw out gulp files and SASS files. In your case, you will simply use `style.css`.

Folder Structure
----------------

Coming soon.

Install
-------

The Gulp build process is only for those who are major studmeisters:

Instructions:

1. Adjust the path of the browserSyncProxy variable in `gulpfile.js`.
2. Using the CLI, navigate to the root of your gulpfile.js file and enter `npm install`.
3. Wait for the node_modules to automatically install.
4. Enter `gulp` in the CLI, without the quotes.
5. That's it!

TODO
----

* More cowbell.

Changelog
---------
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

Authors
-------

**Eli McMakin**

GitHub: https://github.com/elimc

Web site: www.elimcmakin.com


**Matt Jensen**

GitHub: https://github.com/Matt-Jensen

Web site: http://matthewjensen.co/