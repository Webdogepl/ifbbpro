var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
var uglifycss = require("gulp-uglifycss");
var sourcemaps = require("gulp-sourcemaps");
var rename = require("gulp-rename");
var copy = require("gulp-copy");
var plumber = require("gulp-plumber");
const minify = require("gulp-minify");
var concat = require("gulp-concat");
var gulp = require("gulp");

const themeFolder = "wp-content/themes/ifbbpro"; ////Change this while changing project

gulp.task("compile-scss", function () {
	return gulp
		.src(themeFolder + "/scss/*.scss")
		.pipe(sourcemaps.init())
		.pipe(plumber())
		.pipe(sass.sync().on("error", sass.logError))
		.pipe(rename("style.min.css"))
		.pipe(autoprefixer())
		.pipe(uglifycss())
		.pipe(sourcemaps.write("."))
		.pipe(gulp.dest(themeFolder));
});

gulp.task("compile-js", function () {
	//gulp.src([themeFolder + '/js/*.js'])

	return gulp
		.src([
			themeFolder + "/js/flipclock.min.js",
			themeFolder + "/js/font-awesome.js",
			themeFolder + "/js/slick.js",
			themeFolder + "/js/main.js",
			themeFolder + "/js/react.js",
		])
		.pipe(concat("main.js"))
		.pipe(
			minify({
				ext: {
					min: ".min.js",
				},
			})
		)
		.pipe(gulp.dest(themeFolder + "/js/min"));
});

gulp.task("build", function () {
	gulp.series("compile-scss", "compile-js");

	gulp.watch(themeFolder + "/scss/*.scss", gulp.series("compile-scss"));

	gulp.watch(themeFolder + "/js/*.js", gulp.series("compile-js"));
	console.log("Watching SCSS + JS changes");
});
