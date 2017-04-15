var themeSourceDir = 'wp-content/themes/twentythirteen-child';
var themeBuildDir = '../wp-content/themes/twentythirteen-child';
var sassDir = themeSourceDir + '/sass';
var cssDir = themeBuildDir;


var gulp = require('gulp');
var sass = require('gulp-sass');
var del = require('del');

gulp.task('clean', function() {
    return del([themeBuildDir], {force: true});
});

gulp.task('copyThemeFiles', function() {
    gulp.src([
        '!' + sassDir,
        themeSourceDir + '/**/*'
    ])
        .pipe(gulp.dest(themeBuildDir));
});

gulp.task('buildStyle', function() {
    gulp.src(sassDir + '/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDir));
});


gulp.task('watchStyles', function() {
    gulp.watch(sassDir + '/**/*.scss', ['buildStyle']);
});

gulp.task('default', ['clean', 'copyThemeFiles', 'buildStyle']);
