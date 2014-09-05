/**
 * Gulpfile settings for jumpstart.
 * 
 * Instructions:
 * 1. Adjust the path of the browserSyncProxy variable below.
 * 2. Navigate to the root of your gulpfile.js file and enter "gulp" without the quotes.
 * 3. That's it!
 */

// STEP 1
// ADJUST THE FOLLOWING PATH TO THE ROOT OF YOUR gulpfile.js FILE:
var browserSyncProxy = 'localhost/jump_start/';

// Identify dependencies.
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
//    bourbon = require('node-bourbon'),
    reload = browserSync.reload;

// Define sources of files to monitor.
var sassWatch = ['./lib/foundation/**/*.scss', './lib/scss/**/*.scss'],
    sassSource = './lib/scss/style.scss',
    sassDestination = './',
    jsWatch = './lib/js/**/*.js',
    phpWatch = './**/*.php';

// Set the proxy. You followed Step 1, right?
gulp.task('browser-sync', function () {
    browserSync({
        proxy: browserSyncProxy
    });
});

// Compile Sass file to CSS, and reload browser(s).
gulp.task('sass', function() {
    return gulp.src(sassSource)
        .pipe(sass())
        .pipe(gulp.dest(sassDestination))
        .pipe(reload({stream:true}));
});

// Compile Sass file to CSS, and reload browser(s).
// Uncomment the Bourbon line to use Bourbon SASS in the project.
gulp.task('sass', function() {
    return gulp.src(sassSource)
    .pipe(sass(
//    { includePaths: require('node-bourbon').includePaths }
    ))
    .pipe(gulp.dest(sassDestination))
    .pipe(reload({stream:true}));
});

// Run a series of tasks when "gulp" is entered in the CLI.
gulp.task('default', ['sass','browser-sync'], function() {
    gulp.watch(sassWatch, ['sass']);
    gulp.watch(phpWatch, ['php-reload']);
    gulp.watch(jsWatch, ['php-reload']);
});