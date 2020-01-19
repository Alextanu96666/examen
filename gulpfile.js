'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var watch = require('gulp-watch');
var sourcemaps = require('gulp-sourcemaps');

var config = {
    sass: {
        source: './web/scss/projekt.scss',
        dist: './web/css'
    }
};

gulp.task('scss', function() {
    gulp.src(config.sass.source)
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
//        .pipe(sourcemaps.write())
        .pipe(gulp.dest(config.sass.dist));
});

gulp.task('sass:watch', function() {
    gulp.watch('web/scss/**/*.scss',['scss']);
});
