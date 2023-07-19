let laravelMix = require("laravel-mix");

laravelMix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');
laravelMix.js([
  "./resources/js/bootstrap/bootstrap.js",
  "./resources/js/fontawesome/all.min.js",
  "./resources/js/app.js",
  "./resources/js/darkmode.js",
  "./resources/js/jquery-3.6.3.min.js"
] , "./public/js/app.js");
// laravelMix.js("./resources/js/bootstrap/bootstrap.min.js", "./public/js/d.js");


laravelMix.minify([
  "./resources/css/fontawesome/all.min.css",
  "./resources/css/bootstrap/bootstrap.css",
  "./resources/css/app.css",
  "./resources/css/media.css",
  "./resources/css/darkmode.css",
], "./public/css/style.css");
