'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var brSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('cssnano');
var postcss = require('gulp-postcss');

sass.compiler = require('node-sass');

function style() {
    return gulp.src('./sass/main.scss')
        .pipe(sass()).on('error', sass.logError)
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 5 versions"],
                cascade: true
            })
        )
        .pipe(postcss([cssnano()]))
        .pipe(gulp.dest('./css'))
        .pipe(brSync.stream());
}

function watch() {
    brSync.init({
        proxy: "http://agifta/",
        notify: false, // уведомления (false - отключение уведомлений)
    });
    gulp.watch('./sass/**/*.scss', style);
    gulp.watch('./*.php').on('change', brSync.reload);
}

// gulp.task('brSync', () => {
//     brSync.init({
//         proxy: "http://agifta/",
//         notify: false, // уведомления (false - отключение уведомлений)
//     });
// });

// gulp.task('reloadBrowser', () => {
//     return (brSync.reload({ stream: true }));
// })
//
// gulp.task('php', () => {
//     return gulp.src('./**/*.php', { since: gulp.lastRun('php') })
//         .pipe(brSync.reload({ stream: true }))
// });

// gulp.task('watch', gulp.parallel('brSync', function() {
//     gulp.watch('./sass/**/*.scss', gulp.series('sass'));
//     gulp.watch("./**/*.php").on('change', brSync.reload);
// }));

exports.watch = watch;
exports.default = watch;