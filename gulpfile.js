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

// Define dependencies.
var gulp                = require('gulp'),
    sourcemaps          = require('gulp-sourcemaps');
    concat              = require('gulp-concat');
    uglify              = require('gulp-uglify'),
    postcss             = require('gulp-postcss');
    precss              = require('precss');
    autoprefixer        = require('autoprefixer');
    lost                = require('lost');
    csswring            = require('csswring');
    mqpacker            = require('css-mqpacker');
    browserSync         = require('browser-sync').create(),
    reload              = browserSync.reload;

// Define paths.
var paths = {
    sassWatch           : ['./lib/scss/**/*.css', './lib/style.css'],
    sassSource          : './lib/style.css',
    sassDestination     : './',
    vendorWatch         : ['./lib/js/vendor/*.js', './lib/js/vendor/**/*.js'],
    jsWatch             : ['./lib/js/dependencies/*.js', './lib/js/custom/*.js'],
    phpWatch            : './**/*.php'
};

// Concatenate and minify JS. Refresh browsers.
function scripts() {
    return gulp.src('./lib/js/custom/*.js')
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./lib/js/min'))
        .pipe(browserSync.stream());
}

function vendorScripts() {
    return gulp.src([
        // Pick the componenets you need in your project
        './lib/js/vendor/*.js'
    ])
        .pipe(concat('vendorScripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./lib/js/min'))
        .pipe(browserSync.stream());
}

// Transpile styles to CSS, minify output, and refresh browsers, with sourcemap support.
function styles() {
    
    // Set our PostCSS vars.
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
    
    return gulp.src(paths.sassSource)
        .pipe(sourcemaps.init())
        .pipe(postcss(processors))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.sassDestination))
        .pipe(browserSync.stream());
}

// The default task (called when you run `gulp` from cli).
gulp.task('default', gulp.series(styles, scripts, vendorScripts, function(done) {
    
    // If browserSync is enabled ...
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
    
    // Run tasks when a file changes.
    gulp.watch(paths.phpWatch, reload);
    gulp.watch(paths.jsWatch, gulp.series(scripts));
    gulp.watch(paths.vendorWatch, gulp.series(vendorScripts));
    gulp.watch(paths.sassWatch, gulp.series(styles));
    
    done();
}));