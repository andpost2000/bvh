"use strict";

// var gulp = require("gulp");
// var plumber = require("gulp-plumber");
// var sourcemap = require("gulp-sourcemaps");
// var rename = require("gulp-rename");
// var sass = require("gulp-sass");
// var postcss = require("gulp-postcss");
// var autoprefixer = require("autoprefixer");
// var csso = require("gulp-csso");
// var uglify = require("gulp-uglify");
// var del = require("del");

// // для css
// gulp.task("css", function () {
//   return gulp.src("style.scss")
//     .pipe(plumber())
//     .pipe(sourcemap.init())
//     .pipe(sass())
//     .pipe(postcss([
//       autoprefixer()
//     ]))
//     .pipe(csso())
//     .pipe(rename("style.css"))
//     .pipe(sourcemap.write("."))
//     .pipe(gulp.dest("/"))
//     .pipe(server.stream());
// });


// // для js
// // gulp.task("js", function () {
// //   return gulp.src("source/js/**/*.js")
// //   .pipe(uglify())
// //   // .pipe(rename("*-min.js"))
// //   .pipe(gulp.dest("assets/js"));
// // });

// // для запуска локального сервера
// gulp.task("server", function () {
//   server.init({
//     server: "/assets",
//     notify: false,
//     open: false,
//     cors: true,
//     ui: false
//   });

//   gulp.watch("sass/**/*.{scss,sass}", gulp.series("css"));
//   // gulp.watch("source/js/**/*.js", gulp.series("js", "refresh"));

// });

// // для перезагрузки локального сервера
// gulp.task("refresh", function(done) {
//   server.reload();
//   done();
// });

// // для копирования файлов в продакшн папку
// // gulp.task("copy", function() {
// //   return gulp.src([
// //     "source/fonts/**/*.{woff,woff2}",
// //     "source/img/**",
// //     "source/js/**",
// //     "source/*.ico"
// //   ], {
// //     base: "source"
// //   })
// //   .pipe(gulp.dest("assets"));
// // });

// // для оптимизации изображений
// // gulp.task("images", function() {
// //   return gulp.src("source/img/**/*.{png,jpg,svg}")
// //   .pipe(imagemin([
// //     imagemin.optipng({optimizationLevel: 3}),
// //     imagemin.jpegtran({progressive: true}),
// //     imagemin.svgo()
// //   ]))
// //   .pipe(gulp.dest("source/img"));
// // });

// // для перевода картинок в webp
// // gulp.task("webp", function() {
// //   return gulp.src("source/img/**/*.{png,jpg}")
// //   .pipe(webp({quality: 90}))
// //   .pipe(gulp.dest("source/img"));
// // });

// // для создания svg спрайта
// // gulp.task("sprite", function() {
// //   return gulp.src("source/img/**/icon-svg-*.svg")
// //   .pipe(svgstore({
// //     inlineSvg: true
// //   }))
// //   .pipe(rename("sprite.svg"))
// //   .pipe(gulp.dest("assets/img"));
// // });

// // gulp.task("clean", function() {return del("assets");});
// // gulp.task("assets", gulp.series("clean", "copy", "css", "sprite", "html", "js"));
// gulp.task("start", gulp.series("server"));


var gulp = require("gulp");
var plumber = require("gulp-plumber");
var sourcemap = require("gulp-sourcemaps");
var rename = require("gulp-rename");
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var htmlmin = require("gulp-htmlmin");
var csso = require("gulp-csso");
var uglify = require("gulp-uglify");
var server = require("browser-sync").create();
var imagemin = require("gulp-imagemin");
var svgstore = require("gulp-svgstore");
var posthtml = require("gulp-posthtml");
var include = require("posthtml-include");
var del = require("del");
var webp = require('gulp-webp');

// для css
gulp.task("css", function () {
  return gulp.src("style.scss")
    .pipe(plumber())
    .pipe(sourcemap.init())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(csso())
    .pipe(rename("style.css"))
    .pipe(sourcemap.write("."))
    .pipe(gulp.dest("./"))
    .pipe(server.stream());
});

// для html
gulp.task("html", function () {
  return gulp.src("source/*.html")
  .pipe(posthtml([
    include()
  ]))
  .pipe(htmlmin({ collapseWhitespace: true }))
  // .pipe(rename("*-min.html"))
  .pipe(gulp.dest("assets"));
});

// для js
gulp.task("js", function () {
  return gulp.src("source/js/**/*.js")
  .pipe(uglify())
  // .pipe(rename("*-min.js"))
  .pipe(gulp.dest("assets/js"));
});

// для запуска локального сервера
gulp.task("server", function () {
  server.init({
    server: "assets/",
    notify: false,
    open: true,
    cors: true,
    ui: false
  });

  gulp.watch("sass/**/*.{scss,sass}", gulp.series("css"));
});

// для перезагрузки локального сервера
gulp.task("refresh", function(done) {
  server.reload();
  done();
});

// для копирования файлов в продакшн папку
gulp.task("copy", function() {
  return gulp.src([
    "source/fonts/**/*.{woff,woff2}",
    "source/img/**",
    "source/js/**",
    "source/*.ico"
  ])
  .pipe(gulp.dest("assets"));
});

// для оптимизации изображений
gulp.task("images", function() {
  return gulp.src("uploads/**/*.{png,jpg,svg}")
  .pipe(imagemin([
    imagemin.optipng({optimizationLevel: 3}),
    imagemin.jpegtran({progressive: true}),
    imagemin.svgo()
  ]))
  .pipe(gulp.dest("img-optimize"));
});

// для перевода картинок в webp
gulp.task("webp", function() {
  return gulp.src("uploads/**/*.{png,jpg}")
  .pipe(webp({quality: 85}))
  .pipe(gulp.dest("img-optimize"));
});

// для создания svg спрайта
gulp.task("sprite", function() {
  return gulp.src("source/img/**/icon-svg-*.svg")
  .pipe(svgstore({
    inlineSvg: true
  }))
  .pipe(rename("sprite.svg"))
  .pipe(gulp.dest("assets/img"));
});

gulp.task("clean", function() {return del("assets");});
gulp.task("build", gulp.series("clean", "css", "images", "webp"));
gulp.task("start", gulp.series("clean", "css", "server"));
