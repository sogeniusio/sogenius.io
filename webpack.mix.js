const { mix } = require('laravel-mix');

mix.less('resources/assets/less/admin/admin.less', 'public/backend/css') /* Admin Styles */
      .less('resources/assets/less/web/font.less', 'public/css')
      .less('resources/assets/less/web/color.less', 'public/css');

mix.styles([
    'public/css/bootstrap.min.css',
    'public/elements/css/elements.css',
    'public/css/venobox.css',
    'public/css/animate.css',
    'public/css/slimmenu.css',
    'public/css/main.css',
    'public/css/font.css',
    'public/css/color.css',
    'public/css/main-bg.css',
    'public/css/main-responsive.css',
    'public/css/custom.css'
], 'public/css/bundle.css');


mix.styles([
    'public/bower_components/font-awesome/css/font-awesome.min.css',
    'public/css/ionicons.min.css',
], 'public/css/icons.bundle.css');

mix.styles([
    'public/bower_components/fluidbox/dist/css/fluidbox.min.css',
    'public/bower_components/aos/dist/aos.css',
    'public/css/ig.css',
    'public/packages/datatables/css/dataTables.bootstrap.min.css',
    'public/bower_components/toastr/toastr.min.css'
], 'public/css/plugins.bundle.css');


// mix.js('resources/assets/js/plugins/', 'public/js/');



/* Optional: uncomment for bootstrap fonts */
// mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');