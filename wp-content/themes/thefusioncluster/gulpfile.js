var source = require('vinyl-source-stream');
var gulp = require('gulp');
var gutil = require('gulp-util');
var browserify = require('browserify');
var watchify = require('watchify');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var uglifycss = require('gulp-uglifycss');
var rename = require('gulp-rename');
// var buffer = require('vinyl-buffer');
var htmlmin = require('gulp-htmlmin');

var browserSync = require('browser-sync');
var reload = browserSync.reload;
var historyApiFallback = require('connect-history-api-fallback')

var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var fileinclude = require('gulp-file-include');



var paths = {

  src: {
    scss: './src/sass/**/*.scss',
    fonts: './assets/fonts/**/*.*',
    images: './assets/images/**/*.*',
    js: ['./src/scripts/**/*.js', '!./src/scripts/vendor/**/*.*'],
    vendor: './assets/scripts/vendor/*.js',
    html: ['./html/**/*.html'],
    templates: ['./assets/html/**/*.*'], //handlebars

  },
  dest: {
    root: '.',
    fonts: './assets/fonts',
    css: './assets/css',
    js: './assets/js',
    images: './assets/images',
    templates: './assets/templates', //handlebars
  }
};


/*
  Styles Task
*/
gulp.task('styles',function() {

  // Compiles CSS
  gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', paths.src.scss])
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(concat('main.css'))
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest( paths.dest.css ))
    .pipe(reload({stream:true}))

});


gulp.task('scripts', function () {
  gulp.src( paths.src.js )
    .pipe(uglify())
    .pipe(gulp.dest( paths.dest.js ))
    .pipe(reload({stream:true}))
});

/*
  html includes
*/
gulp.task('fileinclude', function() {
  gulp.src(['html/templates/*.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('minify', function() {
  return gulp.src('*.html')
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
    .pipe(gulp.dest('.'));
});

/*
  Browser Sync
*/
gulp.task('browser-sync', function() {
    browserSync({
        // we need to disable clicks and forms for when we test multiple rooms
        server : {
          baseDir : '.',
          index : "index.html"
        },
        middleware : [ historyApiFallback() ],
        ghostMode: false
    });
});

function handleErrors() {
  var args = Array.prototype.slice.call(arguments);
  notify.onError({
    title: 'Compile Error',
    message: '<%= error.message %>'
  }).apply(this, args);
  this.emit('end'); // Keep gulp from hanging on this task
}



// run 'scripts' task first, then watch for future changes
gulp.task('default', ['styles', 'scripts', 'fileinclude', 'browser-sync'], function() {
  gulp.watch('src/sass/**/*.scss', ['styles']);
  gulp.watch('src/scripts/*.js', ['scripts']);
  gulp.watch('html/**/*.html', ['fileinclude']);
  gulp.watch(["html/**/*.html"]).on('change', browserSync.reload);
});


// build task, move to what we need only.
gulp.task('build', function(callback) {

} );
