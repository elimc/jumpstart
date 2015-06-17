**jumpstart**
===========================

A combination of Foundation, SASS, Gulp, and Browsersync to create a modern WordPress theme with a sophisticated build process.

Most Recent: **Version 0.7.3 (June 17, 2015)** -- See [Changelog](./CHANGELOG.md)

# Folder Structure

 * `lib`           -       All of the custom functionality of the site.
    * `branding`     -       All web associated branding, e.g, favicon, login-logo, etc ...
    * `fonts`        -       Any web fonts to be loaded locally.
    * `foundation`   -       Foundation Framework.
    * `images`       -       All images to be used in the site. These images aren't related to the companies branding.
    * `inc`          -       All PHP classes and function files.
    * `js`           -       All custom js files.
    * `scss`         -       All cutom SASS files and partials.

# Install

Download `jumpstart` into your themes directory. Use it for your awesome projects.

`jumpstart` works best with Gulp. The Gulp build process is only for those who are major studmeisters:

Gulp Instructions:

1. Adjust the path of the browserSyncProxy variable in `gulpfile.js`.
2. Using the CLI, navigate to the root of your gulpfile.js file and enter `npm install`.
3. Wait for the node_modules to automatically install. Once installed, you won't have to run `npm install` for this site in the future.
4. Enter `gulp` in the CLI, without the quotes. This will start your node server, along with automattic SASS compiling.
5. That's it!

# TODO

* Improve ease of use with Vagrant

# Authors

**Eli McMakin**

* GitHub: https://github.com/elimc
* Web site: www.elimcmakin.com

**Matt Jensen**

* GitHub: https://github.com/Matt-Jensen
* Web site: http://matthewjensen.co/