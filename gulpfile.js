'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/**/main.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('brSync', () => {
    brSync.init({
        server: {
            baseDir: './' // здесь указываем корневую папку для локального сервера
        },
        notify: false, // уведомления (false - отключение уведомлений)
        proxy: "http://agifta/"
    });
});

gulp.task('php', () => {
    return gulp.src('./**/*.php')
        .pipe(gulp.dest('./'));
});

gulp.task('watch', gulp.parallel('brSync', function() {
    gulp.watch('./sass/**/*.scss', gulp.series('sass'));
    gulp.watch('./**/*.php');
}));