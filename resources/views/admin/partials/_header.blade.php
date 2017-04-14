<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Area @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {{ Html::style('/packages/bootstrap/css/bootstrap.min.css') }}


    <!-- MetisMenu CSS -->
    {{ Html::style('/packages/metisMenu/metisMenu.min.css') }}


    <!-- Custom CSS -->
    {{ Html::style('/css/sb-admin-2.css') }}


    <!-- Morris Charts CSS -->
    {{ Html::style('/packages/morrisjs/morris.css') }}


    <!-- Custom Fonts -->
    {{ Html::style('/packages/font-awesome/css/font-awesome.min.css') }}

    {{-- PRISM SYNTAX HIGHLIGHTER --}}
    {!! Html::style('/bower_components/ckeditor/plugins/prism/themes/prism-atom-dark.css') !!}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('stylesheets')
    <style>
        label.checkbox,
        label.radio {
            margin-left: 50px;
        }
        label.control-label {
            margin-bottom: 10px !important;
        }
    </style>


</head>
