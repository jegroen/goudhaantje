var themeDir = 'wp-content/themes/twentythirteen-child'
var sassDir = themeDir + '/sass'
var cssDir = themeDir


var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src(sassDir + '/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDir));
});


gulp.task('watchStyles', function() {
    gulp.watch(sassDir + '/**/*.scss', ['styles']);
});

gulp.task('default', ['watchStyles']);
