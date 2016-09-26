/// <binding ProjectOpened='watch-sass' />
var Promise = require('es6-promise').Promise;
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify-css');
var jsminify = require('gulp-minify');
var rename = require('gulp-rename');
var replace = require('gulp-replace');

livereload = require('gulp-livereload');

settings = {};
settings.srcCss = "sass/*.scss";
settings.buildCss = "css";
settings.srcJs = "js/*.js";

gulp.task('do-sass', function () {
    return gulp.src(settings.srcCss)
        .pipe(sass({ errLogToConsole: false, outputStyle: 'expanded' }).on('error', function (err) { console.log(err); }))
        .pipe(autoprefixer())
        .pipe(gulp.dest(settings.buildCss))
        .pipe(minify())
        .pipe(rename({ extname: '.min.css' }))
        .pipe(gulp.dest(settings.buildCss))
        .pipe(livereload());
});

gulp.task('do-js', function () {
    return gulp.src(settings.srcJs)
      .pipe(jsminify({
          ext: {
              min: '.min.js'
          }
          ,ignoreFiles: ['itr.debug.js','itr.min.js']
      }))
      .pipe(gulp.dest('js'));
});

gulp.task('watch-sass', function () {
    livereload.listen();
    gulp.watch("sass/**/*.scss", ['do-sass']);
    //gulp.watch(settings.srcJs, ['do-js']);
    gulp.watch('*.php', livereload.reload);
});