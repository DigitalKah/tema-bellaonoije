var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));


gulp.task('sass', function(){
  return gulp.src(['node_modules/bootstrap/scss/*.scss', 'scss/*.scss'])
  .pipe(sass())
  .pipe(gulp.dest('css'));
});

gulp.task('watch', function(){
  gulp.watch('scss/*.scss', gulp.series('sass'));
});

//gulp.task('default', gulp.series('sass', 'watch'));