var gulp = require('gulp');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
    gulp.src('assets/less/main.less')
        .pipe(less())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('assets/css'))
});

gulp.task('watch', function(){
    gulp.watch('assets/less/**/*.less', ['css']);
});

gulp.task('default', ['watch']);