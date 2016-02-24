var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var minify = require('gulp-minify');

gulp.task('styles', function() {
    gulp.src('themes/richbanks/css/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(gulp.dest('themes/richbanks/css/'));
});

gulp.task('compress', function() {
  gulp.src('themes/richbanks/js/*.js')
    .pipe(minify({
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('themes/richbanks/js/'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('themes/richbanks/css/scss/*.scss',['styles']);
});
