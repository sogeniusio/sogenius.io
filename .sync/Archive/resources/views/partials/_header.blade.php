<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>So Genius I/O @yield('title')</title>

    <meta name="description" content="So Genius I/O - Digital Brand Designer specializing in web/print design, branding and social media">
    <meta name="author" content="So Genius I/O">

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    {{ Html::style('fonts/webfonts.css') }}
    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600%7CLato:400,300,100,700,900' rel='stylesheet' type='text/css'>

    <!-- ICON FONTS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    {{ Html::style('css/ionicons.min.css') }}

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    {{ Html::style('/css/bootstrap.css') }}
    {{ Html::style('/elements/css/elements.css') }}
    {{ Html::style('/css/sinister.css') }}
    {{ Html::style('/css/venobox.css') }}
    {{ Html::style('/css/slimmenu.css') }}
    {{ Html::style('/css/main.css') }}
    {{ Html::style('/css/main-bg.css') }}
    {{ Html::style('/css/main-responsive.css') }}
    {{ Html::style('/css/custom.css') }}

    @yield('stylesheets')


    <!-- LESS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet/less" type="text/css" href="/less/color.less">
    <link rel="stylesheet/less" type="text/css" href="/less/fonts.less">
    <script src="/less/less.min.js"></script>


</head>
