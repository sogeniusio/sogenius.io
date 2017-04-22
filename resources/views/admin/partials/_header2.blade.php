<!-- START HEAD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <title>SOGMC - @yield('title')</title>
    <!-- ========== Css Files ========== -->
    {{ Html::style('/backend/fonts/admin-webfonts.css') }}
    {{ Html::style('/bower_components/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/bower_components/bootstrap-css/css/bootstrap.min.css') }}
    {{ Html::style('/backend/css/style.css') }}
    {{ Html::style('/backend/css/responsive.css') }}
    {{ Html::style('/backend/css/shortcuts.css') }}
    {{ Html::style('/backend/css/plugin/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}
    {{ Html::style('/backend/css/plugin/bootstrap-select/bootstrap-select.css') }}
    {{ Html::style('/backend/css/plugin/bootstrap-toggle/bootstrap-toggle.min.css') }}
    {{ Html::style('/backend/css/plugin/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}
    {{ Html::style('/backend/css/plugin/summernote/summernote.css') }}
    {{ Html::style('/backend/css/plugin/summernote/summernote-bs3.css') }}
    {{ Html::style('/backend/css/plugin/datatables/datatables.css') }}
    {{ Html::style('/backend/css/plugin/chartist/chartist.min.css') }}
    {{ Html::style('/backend/css/plugin/rickshaw/rickshaw.css') }}
    {{ Html::style('/backend/css/plugin/rickshaw/detail.css') }}
    {{ Html::style('/backend/css/plugin/rickshaw/graph.css') }}
    {{ Html::style('/backend/css/plugin/rickshaw/legend.css') }}
    {{ Html::style('/backend/css/plugin/date-range-picker/daterangepicker-bs3.css') }}
    {{ Html::style('/backend/css/plugin/fullcalendar/fullcalendar.css') }}
    {{ Html::style('/bower_components/ckeditor/plugins/prism/themes/prism-atom-dark.css') }}
    <!-- ======== CUSTOM STYLES ======== -->
    @yield('stylesheets')
</head>
<!-- END HEAD -->
