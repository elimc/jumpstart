/**
 * Gulpfile settings for jumpstart.
 * 
 * Instructions:
 * 1. Adjust the path of the browserSyncProxy variable below.
 * 2. Install the Wordpress Plugin "Browser Sync Filter".
 * 3. Add "define('DEVENV', true);", without the quotes, to your wp-config.php file.
 * 4. Navigate to the root of your gulpfile.js file and enter "gulp" without the quotes.
 * 5. That's it!
 */

// STEP 1
// ADJUST THE FOLLOWING PATH TO THE ROOT OF YOUR gulpfile.js FILE:
var browserSyncProxy = null; // If === null browser sync is disabled!

// Identify dependencies.
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    jsHint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

// Define sources of files to monitor.
var sassWatch = ['./lib/foundation/**/*.scss', './lib/scss/**/*.scss'],
    sassSource = './lib/scss/style.scss',
    sassDestination = './',
    jsWatch = './lib/js/**/*.js',
    jsDestination = '.',
    phpWatch = './**/*.php';

// Compile Sass file to CSS, and reload browser(s).
gulp.task('sass', function() {
    return gulp.src(sassSource)
    .pipe(sass(
        { 
            errLogToConsole: true
        }
    ))
    .pipe(gulp.dest(sassDestination))
    .pipe(reload({stream:true}));
});

// Reload PHP pages.
gulp.task('page-reload', function() {
    return gulp.src(phpWatch)
        .pipe(reload({stream:true}));
});


gulp.task('script-tasks', function() {
    gulp.src('./lib/js/vendor/**/*.js')
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(jsDestination));

    return gulp.src('./lib/js/*.js')
            .pipe(jsHint())
            .pipe(jsHint.reporter('default'))
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest(jsDestination));
});

// Set up browser-sync and compile SASS when "gulp" is entered in the CLI.
gulp.task('default', function() {
    var sassTasks = ['sass'],
        scriptTasks = ['script-tasks'],
        phpTasks = [];

    // If browserSync is enabled
    if( browserSyncProxy ) {

        // Set the proxy. You followed Step 1, right?
        browserSync({
            proxy: browserSyncProxy,
        });

        // Add page-reload task to all the other task lists.
        [sassTasks, scriptTasks, phpTasks].forEach(function(tasks) {
            tasks.push('page-reload');
        });
    }

    gulp.watch(sassWatch, sassTasks);
    gulp.watch(jsWatch, scriptTasks);
    gulp.watch(phpWatch, phpTasks);
});