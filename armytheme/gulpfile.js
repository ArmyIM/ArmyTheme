// Load Gulp
var gulp = require('gulp'),
    gutil = require('gulp-util'),
    plugins = require('gulp-load-plugins')({
        rename: {
            'gulp-live-server': 'serve'
        }
    });

gulp.task('default', ['watch']);


gulp.task('server', ['serve', 'watch']);


gulp.task('squish-jquery', function () {
    return gulp.src('src/js/libs/**/*.js')
        .pipe(plugins.uglify({
            output: {
                'ascii_only': true
            }
        }))
        .pipe(plugins.concat('jquery.plugins.min.js'))
        .pipe(gulp.dest('dist/js'));
});

gulp.task('combine-js', function () {
    return gulp.src('src/js/*.js')
        .pipe(plugins.jshint())
        .pipe(plugins.jshint.reporter('jshint-stylish'))
        .pipe(plugins.uglify({
            output: {
                'ascii_only': true
            }
        }))
        .pipe(plugins.concat('scripts.min.js'))
        .pipe(gulp.dest('dist/js'));
});

gulp.task('minify-css', function () {
    return gulp.src('src/css/*.less')
        .pipe(plugins.plumber())
        .pipe(plugins.less())
        .on('error', function (err) {
            gutil.log(err);
            this.emit('end');
        })
        .pipe(plugins.autoprefixer({
            browsers: [
                    '> 1%',
                    'last 2 versions',
                    'firefox >= 4',
                    'safari 7',
                    'safari 8',
                    'IE 8',
                    'IE 9',
                    'IE 10',
                    'IE 11'
                ],
            cascade: false
        }))
        .pipe(plugins.cssmin())
        .pipe(plugins.rename({ suffix: '.min' }))
        .pipe(gulp.dest('dist/css')).on('error', gutil.log);
});

// Default task
gulp.task('watch', function () {
    gulp.watch('src/js/libs/**/*.js', ['squish-jquery']);
    gulp.watch('src/js/*.js', ['combine-js']);
    gulp.watch('src/css/*.less', ['minify-css']);
});

gulp.task('serve', function () {
    var server = plugins.serve.static('/', 8083);
    server.start();
    gulp.watch(['dist/*'], function (file) {
        server.notify.apply(server, [file]);
    });
});
