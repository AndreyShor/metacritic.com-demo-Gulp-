const gulp = require("gulp");
const rename = require("gulp-rename");
const sass = require("gulp-sass")
const autoprefixer = require("gulp-autoprefixer")
const sourcemaps = require("gulp-sourcemaps")
const concat = require('gulp-concat');
const browserSync = require("browser-sync").create()


function scss_to_css(done){
    gulp.src("./scss/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({
            errorLogToConsole: true,
            outputStyle: 'compressed'
        }))
        .on('error', console.error.bind(console))
        .pipe(autoprefixer({
            "overrideBrowserslist": [
                "defaults"
              ],
            cascade: false
        }))
        .pipe( rename({suffix: '.min'}))
        .pipe(sourcemaps.write('map'))
        .pipe( gulp.dest('./public/css/'))
        .pipe(browserSync.stream());
    
    done();
}

function sync(done){
    browserSync.init({
        server: {
            baseDir: "./"
        },
        port: 3000
    });

    done();
}

function browserReload(done){
    browserSync.reload();
    done();
}


function watchFiles(){
    gulp.watch("./scss/**/*", scss_to_css);
    gulp.watch("./**/*.html", browserReload);
    gulp.watch("./**/*.php", browserReload)
    gulp.watch("./**/*.js", browserReload)
}

gulp.task("default", gulp.parallel(watchFiles));