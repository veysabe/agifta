'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var brSync = require('browser-sync').create();

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/main.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./css'))
        .pipe(brSync.reload({ stream: true }));
});

gulp.task('brSync', () => {
    brSync.init({
        proxy: "http://agifta/",
        notify: false, // уведомления (false - отключение уведомлений)
    });
});

gulp.task('reloadBrowser', () => {
    return (brSync.reload({ stream: true }));
})

gulp.task('php', () => {
    return gulp.src('./**/*.php', { since: gulp.lastRun('php') })
        .pipe(brSync.reload({ stream: true }))
});

gulp.task('watch', gulp.parallel('brSync', function() {
    gulp.watch('./sass/**/*.scss', gulp.series('sass'));
    gulp.watch("./**/*.php").on('change', brSync.reload);
}));