/**
 * Gulpfile settings for jumpstart.
 * 
 * Instructions:
 * 1. Adjust the path of the bsProxy variable below.
 * 2. Using the CLI, navigate to the root of your gulpfile.js file and enter "npm install" without the quotes.
 * 3. Wait for the node_modules to automatically install. Once installed, you won't have to run "npm install" for this site in the future.
 * 4. Enter "gulp" in the CLI, without the quotes. This will start your node server, along with automattic SASS compiling.
 * 5. That's it!
 */



/**
 * STEP 1
 * Adjust the bsProxy var to the root of your gulpfile.js.
 * e.g., if your WP install is located on your local server in a folder called test, 
 * you would enter "127.0.0.1/test/" with the quotes around it.
 */
var bsProxy = "127.0.0.1/jump_start/"; // If === null, browser sync is disabled!

// Identify dependencies.
var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    browserSync     = require('browser-sync').create(),
    sourcemaps      = require('gulp-sourcemaps');
    plumber         = require('gulp-plumber');
    concat          = require('gulp-concat');
    autoprefixer    = require('gulp-autoprefixer');
    reload          = browserSync.reload;

// Define sources of files to monitor.
var sassWatch       = ['./lib/scss/**/*.scss', './lib/style.scss'],
    sassSource      = './lib/style.scss',
    sassDestination = './',
    foundationWatch = './lib/js/dependencies/foundation-bootstrap.js',
    jsWatch         = ['./lib/js/dependencies/*.js', './lib/js/custom/*.js'],
    phpWatch        = './**/*.php';


// Compile Sass file to CSS, and updates browsers.
gulp.task('sass', function() {
    return gulp.src(sassSource)
        .pipe(plumber())
        .pipe(sourcemaps.init())  // Process the original sources
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(autoprefixer({
                browsers: ['last 2 versions', 'ie 9', 'android 2.3', 'android 4'],
                cascade: false
            }))
        .pipe(sourcemaps.write('./')) // Add the map to modified source.
        .pipe(gulp.dest(sassDestination))
        .pipe(browserSync.stream());
});



// Reload Web page.
gulp.task('page-reload', function() {
    reload();
});



// Concatenates Foundation's JS, for fewer HTTP requests, and spits out code to browser.
gulp.task('foundation', function() {
    return gulp.src([
        './bower_components/foundation/js/foundation/foundation.js',
        './bower_components/foundation/js/vendor/fastclick.js',
        './bower_components/foundation/js/vendor/placeholder.js',
        './bower_components/foundation/js/vendor/modernizr.js',
        './lib/js/vendor/foundation-bootstrap.js'
    ])
        .pipe(plumber())
        .pipe(concat('foundation-bootstrap.min.js'))
        .pipe(browserSync.stream());
});



// Reloads custom and vendor JS in browser.
gulp.task('js', function() {
    return gulp.src('./lib/js/custom/*.js')
        .pipe(plumber())
        .pipe(browserSync.stream());
});



// Set up browser-sync and compile SASS when "gulp" is entered in the CLI.
gulp.task('default', ['sass'], function() {

    // If browserSync is enabled
    if( bsProxy ) {
        // Set the proxy. You followed Step 1, right?
        browserSync.init({
            proxy: bsProxy,
            tunnel: "tunnel"  // Set the SSH tunnel for mobile testing.
        });
    }

    // Call specific functions when specific file is updated and saved.
    gulp.watch(sassWatch, ['sass']);
    gulp.watch(foundationWatch, ['foundation']);
    gulp.watch(jsWatch, ['js']);
    gulp.watch(phpWatch).on('change', browserSync.reload);
});
