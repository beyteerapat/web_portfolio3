var gulp        = require('gulp'),
    watch       = require('gulp-watch'),
    browsersync = require('browser-sync').create();


gulp.task('watch',function() {

    browsersync.init({
        server: {
            baseDir:"app"
        }
    });

    watch('./app/index.html',function(){
        browsersync.reload();
    });

    watch('./app/assets/css/**/*.css',function(){
    gulp.start('cssInject');
    });

    watch('./app/assets/js/**/*.js', function(){
        gulp.start('scriptsRefresh');
    })

});

gulp.task('cssInject', ['styles'], function(){
    return gulp.src('./app/temp/css/styles.css')
        .pipe(browsersync.stream());
});

gulp.task('scriptsRefresh',['scripts'], function(){
    browsersync.reload();
});