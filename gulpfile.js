var gulp = require('gulp');
var compass = require('gulp-compass');
var path = require('path');
var watch = require('gulp-watch');

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('compass', function() {
    //we need to work out the package name from the location for the asset publish.
    gulp.src('./public/sass/*.scss')
        .pipe(compass({
            css: 'public/css',
            sass: 'public/sass',
            image: 'public/images',
            sourcemap: true
        }))
        .pipe(shell([
            'php ../../artisan bootleg:publish'
        ]));
});

gulp.task('watch', function() {
    gulp.watch('./public/sass/**/*.scss', ['compass']);
})
