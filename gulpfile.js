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
var browserSyncProxy = '127.0.0.1/jstest/'; // If === null browser sync is disabled!

// Identify dependencies.
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    jsHint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    gm = require('gulp-gm'),
    rename = require("gulp-rename"),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

// Define sources of files to monitor.
var sassWatch = ['./lib/foundation/**/*.scss', './lib/scss/**/*.scss'],
    sassSource = './lib/scss/style.scss',
    sassDestination = './',
    jsWatch = './lib/js/**/*.js',
    jsDestination = '.',
    phpWatch = './**/*.php';



/************************************************************************************************************************
* Requires imagemagick & graphicsmagick. 
* Install instructions here: https://github.com/scalableminds/gulp-gm
*************************************************************************************************************************/
//var resizeFile = function(file, size, prefix) {
//    var detectPrefix = {
//        '2' : '@x4',
//        '1.5': '@x3',
//        '1' : '@x2', // Default should expect a retina size image
//        '0.5' : '', // Non retina device size
//        '0.25' : '@x0.5' // Mobile device size
//    };
//
//    if( !file || typeof file !== 'string' ) return;
//    
//    // If no size is provied set to default size
//    if( !size ) { size = 1; }
//
//    // If size object, then require both width and height, or revert to number
//    if( typeof size === 'object' ) {
//        if( !size.width && !size.height ) {
//            size = 1;
//        }
//        else if ( !size.width ) { // If no width use height value
//            size = size.height;
//        }
//        else if ( !size.height ) { // If no height use width value
//            size = size.width;
//        }
//    }
//
//    // Ensure all size input is an integer
//    if( size.width && (typeof size.width !== 'number') ) { size.width = parseFloat(size.width); }
//    if( size.height && (typeof size.height !== 'number') ) { size.height = parseFloat(size.height); }
//    if( typeof size === 'string' && typeof size !== 'object' ) { size = parseFloat(size); }
//
//    return gulp.src('lib/gulp-images/' + file)
//            .pipe(gm(function (gmfile, done) {
//                gmfile.size(function (err, original) {
//                    done(null, gmfile.resize(
//                        Math.floor(original.width * (size.width || size.height || size)),
//                        Math.floor(original.height * (size.height || size.width || size))
//                    ));
//                });
//            }))
//            .pipe(rename(function(path) {
//                var pfx = prefix;
//                
//                if( !pfx ) { // Prefix undefined
//                    
//                    // if size is an object use width for prefix detection
//                    if( typeof size === 'object' && size.width ) { size = size.width; }
//                    
//                    // Convert number size to a string
//                    pfx = ( typeof size === 'number' ? size.toString() : size );
//
//                    // Detect prefix, if none applicable don't apply
//                    pfx = ( detectPrefix.hasOwnProperty( pfx ) ? detectPrefix[pfx] : '' );
//                }
//
//                path.basename += pfx;
//            }))
//            .pipe(imagemin({
//                progressive: true // Lossless conversion of all jpg to progressive (Add's weight, but reduces percieved loading time)
//            }))
//            .pipe(gulp.dest('./lib/assets'));
//};

//gulp.task('img', function() {
//    resizeFile('cat-pwn.jpg'); // This is a retina image.  No resize occurs as resizeFile expects a retina image as input. @x2 suffix added to file.
//    resizeFile('cat-pwn.jpg', 0.5); // Normal device size
//    resizeFile('cat-pwn.jpg', 0.25 ); // Mobile device size
//});


// Compile Sass file to CSS, and updates browsers.
gulp.task('sass', function() {
    return gulp.src(sassSource)
    .pipe(sass(
        {
            errLogToConsole: true
        }
    ))
    .pipe(gulp.dest(sassDestination));
});


// Reload Web page.
gulp.task('page-reload', function() {
    return gulp.src(phpWatch)
        .pipe(reload({stream:true}));
});


// Updates JS code to browser.
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
gulp.task('default', ['sass'], function() {
//    var sassTasks = ['sass'],
//        scriptTasks = ['script-tasks'],
//        phpTasks = [];

    // If browserSync is enabled
    if( browserSyncProxy ) {

        // Set the proxy. You followed Step 1, right?
        browserSync({
            proxy: browserSyncProxy
        });

        // Add page-reload task to all the other task lists.
//        [sassTasks, scriptTasks, phpTasks].forEach(function(tasks) {
//            tasks.push('page-reload');
//        });
    }

    gulp.watch(sassWatch, ['sass']);
    gulp.watch(jsWatch, ['script-tasks']);
    gulp.watch(phpWatch, ['page-reload']);
});