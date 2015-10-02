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
    uglify          = require('gulp-uglify'),
    rename          = require('gulp-rename'),
    autoprefixer    = require('gulp-autoprefixer');
    postcss         = require('gulp-postcss');
    precss          = require('precss');
    reporter        = require('postcss-reporter');
    importer        = require('postcss-partial-import');
    mixins          = require('postcss-sassy-mixins');
    variables       = require('postcss-simple-vars');
    nested          = require('postcss-nested');
    autoprefixer    = require('autoprefixer');
    cssnano         = require('gulp-cssnano');
    mincss          = require('mincss');
    lost            = require('lost');
    csswring        = require('csswring');
    mqpacker        = require('css-mqpacker');
    reload          = browserSync.reload;

// Define sources of files to monitor.
var sassWatch       = ['./lib/scss/**/*.css', './lib/style.css'],
    sassSource      = './lib/style.css',
    sassDestination = './',
    foundationWatch = './lib/js/vendor/foundation-bootstrap.js',
    jsWatch         = ['./lib/js/dependencies/*.js', './lib/js/custom/*.js'],
    phpWatch        = './**/*.php';



// Compile Sass file to CSS, and updates browsers.
gulp.task('sass', function() {
    var processors = [
        precss,
        lost,
        autoprefixer({
            browsers: ['last 2 versions', 'ie 9', 'android 2.3', 'android 4'],
            cascade: false
        }),
        mqpacker,
        csswring
    ];
    return gulp.src(sassSource)
        .pipe(sourcemaps.init())
        .pipe(postcss(processors))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(sassDestination))
        .pipe(browserSync.stream());
});



// Concatenates Foundation's JS, for fewer HTTP requests, and spits out code to browser.
gulp.task('foundation', function() {
    return gulp.src([
        
        // Foundation core - needed if you want to use any of the components below
        './bower_components/foundation/js/foundation/foundation.js',
        './bower_components/foundation/js/vendor/fastclick.js',
        './bower_components/foundation/js/vendor/placeholder.js',
        './bower_components/foundation/js/vendor/modernizr.js',

        // Pick the componenets you need in your project
        //'./bower_components/foundation/js/foundation/foundation.abide.js',
        //'./bower_components/foundation/js/foundation/foundation.accordion.js',
        //'./bower_components/foundation/js/foundation/foundation.alert.js',
        //'./bower_components/foundation/js/foundation/foundation.clearing.js',
        //'./bower_components/foundation/js/foundation/foundation.dropdown.js',
        //'./bower_components/foundation/js/foundation/foundation.equalizer.js',
        //'./bower_components/foundation/js/foundation/foundation.interchange.js',
        //'./bower_components/foundation/js/foundation/foundation.joyride.js',
        //'./bower_components/foundation/js/foundation/foundation.magellan.js',
        //'./bower_components/foundation/js/foundation/foundation.offcanvas.js',
        //'./bower_components/foundation/js/foundation/foundation.orbit.js',
        //'./bower_components/foundation/js/foundation/foundation.reveal.js',
        //'./bower_components/foundation/js/foundation/foundation.slider.js',
        //'./bower_components/foundation/js/foundation/foundation.tab.js',
        //'./bower_components/foundation/js/foundation/foundation.tooltip.js',
        //'./bower_components/foundation/js/foundation/foundation.topbar.js', 
          		  
        // Initializes Foundation JS.
        './lib/js/vendor/foundation-bootstrap.js'
    ])
        .pipe(concat('foundation.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./lib/js/min'))
        .pipe(browserSync.stream());
});



// Reloads custom JS in browser.
gulp.task('js', function() {
    return gulp.src('./lib/js/custom/*.js')
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./lib/js/min'))
        .pipe(browserSync.stream());
});



// Set up browser-sync and compile SASS when "gulp" is entered in the CLI.
gulp.task('default', ['sass', 'js'], function() {

    // If browserSync is enabled
    if( bsProxy ) {
        // Set the proxy. You followed Step 1, right?
        browserSync.init({
            proxy: bsProxy,
            tunnel: "tunnel",  // Set the SSH tunnel for mobile testing.
            snippetOptions: {  // Turn off BS while in admin https://github.com/BrowserSync/browser-sync/issues/373
                whitelist: ["wp-admin/admin-ajax.php"],  // whitelist checked first.
                blacklist: ["wp-admin/**"]
            }
        });
    }

    // Call specific functions when specific file is updated and saved.
    gulp.watch(sassWatch, ['sass']);
//    gulp.watch(foundationWatch, ['foundation']);
    gulp.watch(jsWatch, ['js']);
    gulp.watch(phpWatch).on('change', browserSync.reload);
});