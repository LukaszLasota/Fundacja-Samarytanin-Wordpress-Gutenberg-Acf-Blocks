const gulp = require("gulp");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
const sass = require("gulp-sass")(require("sass"));

gulp.task("sass", function () {
  return gulp
    .src("assets/scss/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("style.css"))
    .pipe(gulp.dest("dist"));
});

gulp.task("scripts", function () {
  return gulp
    .src("assets/js/app.js")
    .pipe(
      babel({
        plugins: [
          "@babel/plugin-transform-arrow-functions",
          "@babel/plugin-proposal-class-properties",
        ],
        presets: ["@babel/env"],
      })
    )
    .on("error", console.error.bind(console))
    .pipe(concat("app.js"))
    .pipe(gulp.dest("dist"));
});

gulp.task("watch", function () {
  gulp.watch("./assets/scss/*.scss", gulp.series("sass"));
  gulp.watch("./assets/js/*.js", gulp.series("scripts"));
});
