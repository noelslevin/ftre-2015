var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    cache = require('gulp-cache'),
    del = require('del'),
    svgmin = require('gulp-svgmin');

gulp.task('styles', function() {
  return sass('style.scss', { style: 'expanded' })
    .pipe(autoprefixer())
    .pipe(gulp.dest('../public_html/wp-content/themes/ftre-2015'))
    .pipe(gulp.dest('output'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss({keepSpecialComments:1}))
    .pipe(gulp.dest('output'));
});

gulp.task('images', function() {
  return gulp.src('src/img/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest('assets/img'))
});

gulp.task('svg', function() {
  return gulp.src('src/svg/**/*')
    .pipe(svgmin())
    .pipe(gulp.dest('assets/svg'));
});

gulp.task('clean', function(cb) {
    del(['assets/css', 'assets/js', 'assets/img', 'assets/svg'], cb)
});

gulp.task('watch', function() {
  gulp.watch(['style.scss','scss/**/*.scss'], ['styles']);
  //gulp.watch('src/js/**/*.js', ['scripts']);
  //gulp.watch('src/img/**/*', ['images']);
  //gulp.watch('src/svg/**/*', ['svg']);
});

//gulp.task('build', ['styles', 'images', 'svg']);