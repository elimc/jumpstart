/**
 * Gulpfile settings for jumpstart.
 * 
 * Instructions:
 * 1. Adjust the path of the browserSyncProxy variable below.
 * 2. Using the CLI, navigate to the root of your gulpfile.js file and enter "npm install" without the quotes.
 * 3. Wait for the node_modules to automatically install. Once installed, you won't have to run "npm install" for this site in the future.
 * 4. Enter "gulp" in the CLI, without the quotes. This will start your node server, along with automattic SASS compiling.
 * 5. That's it!
 */



/**
 * STEP 1
 * Adjust the browserSyncProxy var to the root of your gulpfile.js.
 * e.g., if your WP install is located on your local server in a folder called Jumpstart, 
 * you would enter "127.0.0.1/jumpstart/wordpress/" with the quotes around it.
 */
var browserSyncProxy = null; // If === null, browser sync is disabled!

// Identify dependencies.
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    jsHint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    bourbon = require('node-bourbon'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

// Define sources of files to monitor.
var sassWatch = ['./lib/foundation/**/*.scss', './lib/scss/**/*.scss'],
    sassSource = './lib/scss/style.scss',
    sassDestination = './',
    jsWatch = './lib/js/**/*.js',
    jsDestination = '.',
    phpWatch = './**/*.php';


// Compile Sass file to CSS, and updates browsers.
gulp.task('sass', function() {
    return gulp.src(sassSource)
    .pipe(sass({
        includePaths: require('node-bourbon').includePaths,
        errLogToConsole: true
    }))
    .pipe(gulp.dest(sassDestination))
    .pipe(reload({stream:true}));
});



// Reload Web page.
gulp.task('page-reload', function() {
    return gulp.src(phpWatch)
        .pipe(reload({stream:true}));
});



// Concatenates and lints scripts, updates resulting JS code to browser.
gulp.task('script-tasks', function() {
    gulp.src('./lib/js/vendor/**/*.js')
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(jsDestination));

    return gulp.src('./lib/js/*.js')
            .pipe(jsHint())
            .pipe(jsHint.reporter('default'))
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest(jsDestination))
            .pipe(reload({stream:true}));
});



// Set up browser-sync and compile SASS when "gulp" is entered in the CLI.
gulp.task('default', ['sass'], function() {

    // If browserSync is enabled
    if( browserSyncProxy ) {
        // Set the proxy. You followed Step 1, right?
        browserSync({
            proxy: browserSyncProxy
        });
    }

    // Call specific functions when specific file is updated and saved.
    gulp.watch(sassWatch, ['sass']);
    gulp.watch(jsWatch, ['script-tasks']);
    gulp.watch(phpWatch, ['page-reload']);
});