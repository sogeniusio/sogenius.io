<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- ========== Css Files ========== -->
    {{ Html::style('/backend/fonts/admin-webfonts.css') }}
    {{ Html::style('/bower_components/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('/bower_components/bootstrap-css/css/bootstrap.min.css') }}
    {{ Html::style('/backend/css/style.css') }}
    {{ Html::style('/backend/css/responsive.css') }}
    {{ Html::style('/backend/css/shortcuts.css') }}
    <!-- ======== CUSTOM STYLES ======== -->
    @yield('stylesheets')
    <style type="text/css">
    body {
        background: #F5F5F5;
    }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
