const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const terser = require("gulp-terser");
const rename = require("gulp-rename");

//Compile, minify, autoprefix and create sourcemaps of css/scss files automatically
function styles() {
    return (
        gulp.src("wordpress/wp-content/themes/tempshop-theme/assets/css/*.scss", "wordpress/wp-content/themes/tempshop-theme/assets/css/*.css")
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(postcss([autoprefixer(), cssnano()]))
            .pipe(sourcemaps.write("."))
            .pipe(gulp.dest("wordpress/wp-content/themes/tempshop-theme/assets/css"))
    );
}

//Minify and rename js files automatically
function js() {
    return (
        gulp.src(["wordpress/wp-content/themes/tempshop-theme/assets/js/*.js", "wordpress/wp-content/themes/tempshop-theme/assets/!js/*min.js"])
            .pipe(terser())
            .pipe(rename({
                suffix: ".min"
            }))
            .pipe(gulp.dest("wordpress/wp-content/themes/tempshop-theme/assets/js"))
    );
}

//Continually watch css and js folders for changes, and run above functions
function watch() {
    gulp.watch("wordpress/wp-content/themes/tempshop-theme/assets/css/*.scss", styles);
    gulp.watch(["wordpress/wp-content/themes/tempshop-theme/assets/js/*.js", "!wordpress/wp-content/themes/tempshop-theme/assets/js/*.min.js"], js);
}

//Run the above functions on project creation, to ensure existence of files
//const build = gulp.series(styles,js); runs styles->js - gulp.parallel can be called in gulp.series, if execution order matters
const build = gulp.parallel(styles, js);

exports.styles = styles;
exports.js = js;
exports.watch = watch;
exports.build = build;