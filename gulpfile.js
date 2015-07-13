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
    browserSync     = require('browser-sync'),
    sourcemaps      = require('gulp-sourcemaps');
    plumber         = require('gulp-plumber');
    reload          = browserSync.reload;

// Define sources of files to monitor.
var sassWatch       = ['./lib/foundation/**/*.scss', './lib/scss/**/*.scss', './lib/style.scss'],
    sassSource      = './lib/style.scss',
    sassDestination = './',
    jsWatch         = './lib/js/**/*.js',
    phpWatch        = './**/*.php';


// Compile Sass file to CSS, and updates browsers.
gulp.task('sass', function() {
    return gulp.src(sassSource)
        .pipe(plumber())
        .pipe(sourcemaps.init())  // Process the original sources
            .pipe(sass({outputStyle: 'compressed'}))
        .pipe(sourcemaps.write('./')) // Add the map to modified source.
        .pipe(gulp.dest(sassDestination))
        .pipe(reload({stream:true}));
});



// Reload Web page.
gulp.task('page-reload', function() {
    reload();
});



// Concatenates and lints scripts, updates resulting JS code to browser.
gulp.task('script-tasks', function() {
    return gulp.src('./lib/js/*.js')
        .pipe(reload({stream:true}));
});



// Set up browser-sync and compile SASS when "gulp" is entered in the CLI.
gulp.task('default', ['sass'], function() {

    // If browserSync is enabled
    if( bsProxy ) {
        // Set the proxy. You followed Step 1, right?
        browserSync({
            proxy: bsProxy,
            tunnel: "tunnel"  // Set the SSH tunnel for mobile testing.
        });
    }

    // Call specific functions when specific file is updated and saved.
    gulp.watch(sassWatch, ['sass']);
    gulp.watch(jsWatch, ['script-tasks']);
    gulp.watch(phpWatch, ['page-reload']);
});
