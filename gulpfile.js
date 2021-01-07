var gulp = require('gulp');
var livereload = require('gulp-livereload');

gulp.task('browser-sync', function (){
	browserSync.init({
		server: {
			baseDir: "localhost/wordpress/"
		}
	});
});

gulp.task('watch', function () {
    livereload.listen(35729);
    gulp.watch('./*.php').on('change', function(file) {
        livereload.changed(file.path);
    });
});

gulp.task('default', ['watch']);