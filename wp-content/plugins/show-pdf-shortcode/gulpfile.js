const gulp = require("gulp");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
const sass = require("gulp-sass")(require("sass"));

gulp.task("sass", function () {
  return gulp
    .src("assets/scss/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("show_pdf_shortcode.css"))
    .pipe(gulp.dest("public/css/"));
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
    .pipe(concat("show_pdf_shortcode.js"))
    .pipe(gulp.dest("public/js/"));
});

gulp.task("watch", function () {
  gulp.watch("./assets/scss/*.scss", gulp.series("sass"));
  gulp.watch("./assets/js/*.js", gulp.series("scripts"));
});
