const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

// 1. Compile SCSS to CSS

const rename = require('gulp-rename');

function style() {
    return src('./src/scss/main.scss') 
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('style.css')) // This forces the output name
        .pipe(dest('./'))
        .pipe(browserSync.stream());
}

// 2. Watcher Task
function watchFiles() {
    browserSync.init({
        proxy: "localhost:8888/timwilliamsosteopaths.co.uk",
        notify: false
    });
    watch('./src/scss/**/*.scss', style);
    watch('./**/*.php').on('change', browserSync.reload);
    watch('./src/js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.default = watchFiles;


