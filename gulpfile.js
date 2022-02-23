(() => {
    "use strict";

    var gulp = require("gulp");
    var watch = require("gulp-watch");
    var sass = require("gulp-sass");
    var autoprefixer = require("gulp-autoprefixer");
    var sourcemaps = require("gulp-sourcemaps");
    var imagemin = require("gulp-imagemin");
    var minCss = require("gulp-minify-css");
    var rename = require("gulp-rename");
    var concat = require("gulp-concat");
    var uglify = require("gulp-uglify");
    var browserSync = require("browser-sync");
    var clean = require("gulp-clean");
    var plumber = require("gulp-plumber");

    var config = {
        proxy: "http://eueopeanleaguefootball.test/webroot/cut/index.php", // change it to your development domain
        img: {
            jpg: "/**/*.jpg",
            png: "/**/*.png",
            gif: "/**/*.gif",
            jpeg: "/**/*.jpeg",
            svg: "/**/*.svg",
            ico: "/**/*.ico",
        },
        sync: ["**/*.php", "**/*.ctp", "webroot/*.html", "**/*.css"],
        /**
         * Front end
         */
        front: {
            css: ["./webroot/default/css/_src/**/*.scss"],
            js: ["./webroot/default/js/_src/*.js"],
            img: "./webroot/default/img/_src",
            imgCompress: [
                "./webroot/default/img/src/**/*.jpg",
                "./webroot/default/img/src/**/*.png",
            ],
            dest: {
                css: "./webroot/default/css",
                js: "./webroot/default/js",
                img: "./webroot/default/img",
            },
        },
        /**
         * Panel
         */
        panel: {
            css: [
                "./webroot/panel/css/src/**/*.scss",
                // '!./public_html/default/src/panel/scss/bootstrap/bootstrap-reboot.scss',
                // '!./public_html/default/src/panel/scss/bootstrap/bootstrap-grid.scss',
                // '!./public_html/default/src/panel/scss/bootstrap/bootstrap.scss',
                // '!./public_html/default/src/panel/scss/modules/mixins.scss'
            ],
            js: [
                "./webroot/panel/js/src/*.js",
                // './public_html/panel/src/js/bootstrap.bundle.js',
                // './public_html/panel/src/js/material.js',
                // './public_html/panel/src/js/color-admin.js',
                // './public_html/panel/src/js/csrf.js',
                // './public_html/panel/src/js/loading.js',
                // './public_html/panel/src/js/translate.js',
                // './public_html/panel/src/js/notifications.js',
                // './public_html/panel/src/js/swal.js',
                // './public_html/panel/src/js/formBuilder.js',
                // './public_html/panel/src/js/charsCounter.js',
                // './public_html/panel/src/js/lock-screen.js',
                // './public_html/panel/src/js/switcher.js',
                // './public_html/panel/src/js/select2.js',
                // './public_html/panel/src/js/xeditable.js',
                // './public_html/panel/src/js/datetime.js',
                // './public_html/panel/src/js/datepicker.js',
                // './public_html/panel/src/js/magnific-popup.js',
                // './public_html/panel/src/js/code-mirror.js',
                // './public_html/panel/src/js/page-files.js',
                // './public_html/panel/src/js/custom-css.js',
                // './public_html/panel/src/js/cropper.js',
                // './public_html/panel/src/js/dashboard.js',
                // './public_html/panel/src/js/acl.js',
                // './public_html/panel/src/js/main.js',
                // './public_html/panel/src/js/csrf.js'
            ],
            img: "./webroot/panel/img/src",
            imgCompress: [
                "./webroot/panel/img/src/**/*.jpg",
                "./webroot/panel/img/src/**/*.png",
            ],
            dest: {
                css: "./webroot/panel/css/dist",
                js: "./webroot/panel/js/dist",
                img: "./webroot/panel/img/dist",
            },
        },
        /**
         * Cake related
         */
        cake: {
            models: "./src/Model/**/*.php",
        },
    };

    /* Removes all files inside `tmp` directory  */
    function taskCleanTmp() {
        console.log("*** Cleaning tmp...");
        return gulp.src("./tmp/*").pipe(
            clean({
                force: false,
            })
        );
    }

    /* Removes all images declared in `dstImages`  */
    function taskCleanImages() {
        console.log("*** Cleaning images...");
        return gulp.src(config.front.dest.imgCompress).pipe(
            clean({
                force: false,
            })
        );
    }

    /* Compiles Sass files for front-end use  */
    function taskBuildCss() {
        return gulp
            .src(config.front.css)
            .pipe(plumber())
            .pipe(sourcemaps.init())
            .pipe(sass().on("error", sass.logError))
            .pipe(autoprefixer())
            .pipe(gulp.dest(config.front.dest.css))
            .pipe(minCss())
            .pipe(
                rename({
                    extname: ".min.css",
                })
            )
            .pipe(sourcemaps.write("./"))
            .pipe(gulp.dest(config.front.dest.css));
    }

    /* Compiles Sass files for back-end use  */
    function taskBuildCssPanel() {
        return gulp
            .src(config.panel.css)
            .pipe(plumber())
            .pipe(sourcemaps.init())
            .pipe(sass().on("error", sass.logError))
            .pipe(autoprefixer())
            .pipe(gulp.dest(config.panel.dest.css))
            .pipe(minCss())
            .pipe(
                rename({
                    extname: ".min.css",
                })
            )
            .pipe(sourcemaps.write("./"))
            .pipe(gulp.dest(config.panel.dest.css));
    }

    /* Compiles JS files for front-end use  */
    function taskBuildJs() {
        return (
            gulp
                .src(config.front.js)
                .pipe(plumber())
                .pipe(concat("app.js"))
                .pipe(gulp.dest(config.front.dest.js))
                .pipe(rename("app.min.js"))
                // .pipe(uglify())
                .pipe(gulp.dest(config.front.dest.js))
        );
    }

    /* Compiles JS files for back-end use  */
    function taskBuildJsPanel() {
        return gulp
            .src(config.panel.js)
            .pipe(plumber())
            .pipe(concat("app.js"))
            .pipe(gulp.dest(config.panel.dest.js))
            .pipe(rename("app.min.js"))
            .pipe(uglify())
            .pipe(gulp.dest(config.panel.dest.js));
    }

    /* Browser refresh on declared files change  */
    function taskBrowserSync() {
        browserSync.init({
            files: config.sync,
            proxy: config.proxy,
        });
    }

    /* Copies images from src to dst location  */
    function taskImages() {
        let frontImages = new Array();
        for (let index in config.img) {
            frontImages.push(config.front.img + config.img[index]);
        }
        return gulp
            .src(frontImages)
            .pipe(plumber())
            .pipe(gulp.dest(config.front.dest.img));
    }

    /* Copies images from panel src to dst location  */
    function taskImagesPanel() {
        let panelImages = new Array();
        for (let index in config.img) {
            panelImages.push(config.panel.img + config.img[index]);
        }
        return gulp
            .src(panelImages)
            .pipe(plumber())
            .pipe(gulp.dest(config.panel.dest.img));
    }

    /* Removes dst images, copresses and copies images from src to dst location  */
    function taskImagesCompress() {
        gulp.start(taskCleanImages);
        return gulp
            .src(config.front.imgCompress)
            .pipe(plumber())
            .pipe(
                imagemin({
                    optimizationLevel: 5,
                    progressive: true,
                    interlaced: true,
                })
            )
            .pipe(gulp.dest(config.front.dest.img));
    }

    /* Watch images and copies images from src to dst directory  */
    function taskWatchImages() {
        gulp.watch(config.front.img, taskImages);
    }

    /* Watch images and copies images from panel src to dst directory  */
    function taskWatchImagesPanel() {
        gulp.watch(config.panel.img, taskImagesPanel);
    }

    /* Front end files watcher  */
    function taskFrontWatcher() {
        console.log("*** Watching frontend files...");

        gulp.watch(config.front.css, taskBuildCss);
        gulp.watch(config.front.js, taskBuildJs);
    }

    /* Panel files watcher  */
    function taskPanelWatcher() {
        console.log("*** Watching panel files...");

        gulp.watch(config.panel.css, taskBuildCssPanel);
        gulp.watch(config.panel.js, taskBuildJsPanel);
    }

    /* Watch models and cleans tmp directory if something changed  */
    function taskWatchModels() {
        console.log("*** Watching model files...");

        gulp.watch(config.cake.models, taskCleanTmp);
    }

    /* Default task - front end only  */
    exports.default = gulp.series(
        taskBuildCss,
        taskBuildJs,
        gulp.parallel(taskFrontWatcher, taskWatchModels)
    );

    /* Main task for frontend devs  */
    exports.frontend = gulp.series(
        taskBuildCss,
        taskBuildJs,
        gulp.parallel(taskFrontWatcher, taskWatchModels, taskBrowserSync)
    );

    /* Main task for panel devs  */
    exports.panel = gulp.series(
        taskBuildJsPanel,
        taskBuildCssPanel,
        gulp.parallel(taskPanelWatcher, taskWatchModels)
    );

    /* Main task for compliling everything  */
    exports.all = gulp.series(
        taskBuildCss,
        taskBuildJs,
        taskBuildCssPanel,
        taskBuildJsPanel,
        gulp.parallel(taskFrontWatcher, taskPanelWatcher, taskWatchModels)
    );

    /* Main task for compliling all images front + panel  */
    exports.images = gulp.series(taskImages, taskImagesPanel);

    /* Main task for compliling everything for production  */
    exports.production = gulp.series(
        taskBuildCss,
        taskImages,
        taskBuildCssPanel,
        taskBuildJsPanel,
        taskImagesPanel,
        gulp.parallel(taskFrontWatcher, taskPanelWatcher, taskWatchModels)
    );
})();
