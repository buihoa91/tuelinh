var gulp = require('gulp');
var gutil = require('gulp-util');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');

var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

var roots = "./src/";

var paths = {
    scss: [roots + "**/*.scss"],
    css : [roots + "**/*.css",],
    js  : [roots + "**/*.js",],
    html  : [roots + "**/*.html",],
    img : [
        roots + "**/*.png",
        roots + "**/*.jpg",
        roots + "**/*.ico",
        roots + "**/*.jpeg",
    ],
    dest: "./dist",
};
gulp.task('watch', [], function () {
    browserSync.init({
        server: "./dist",
        index: 'landing.html',
    });

    gulp.watch(paths.scss,  ['sass']);
    gulp.watch(paths.css,  ['css']);
    gulp.watch(paths.js,  ['js']);
    gulp.watch(paths.img,  ['img']);
    gulp.watch(paths.html, ['html']);
});

gulp.task('sass', function () {
    return gulp.src(paths.scss)
        .pipe(sass())
        .pipe(cleanCSS({debug: true}, function(details) {
            gutil.log(details.name + ': ' + details.stats.originalSize);
            gutil.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(gulp.dest(paths.dest))
        .pipe(browserSync.stream());

});

gulp.task('img', function () {
    return gulp.src(paths.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(paths.dest))
        .pipe(browserSync.stream());

});

gulp.task('css', function () {
    return gulp.src(paths.css)
        .pipe(cleanCSS({debug: true}, function(details) {
            gutil.log(details.name + ': ' + details.stats.originalSize);
            gutil.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(gulp.dest(paths.dest))
        .pipe(browserSync.stream());

});

gulp.task('js', function () {
    return gulp.src(paths.js)
        .pipe( uglify({
            mangle  : true,
            compress: {
                sequences   : true,
                dead_code   : true,
                conditionals: true,
                booleans    : true,
                unused      : true,
                if_return   : true,
                join_vars   : true,
                drop_console: true
            }
        }))
        .pipe(gulp.dest(paths.dest))
        .pipe(browserSync.stream());

});

gulp.task('html', function () {
    return gulp.src(paths.html)
        .pipe(gulp.dest(paths.dest))
        .pipe(browserSync.stream());

});

gulp.task("default", ["sass","css","js","img","html","watch"],function (e) {
    gutil.log("Finish");
});