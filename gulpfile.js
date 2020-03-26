var gulp = require("gulp");
var browserSync = require("browser-sync").create();

gulp.task("server", function() {
    browserSync.init({
        proxy: "http://localhost/projetos/dppa/weGetIt/"
    });
    gulp.watch("src/**/*.*").on("change", browserSync.reload);
});
