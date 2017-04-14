<!DOCTYPE html>
<html lang="en">

<head>

<!-- Basic Page Info
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
{!! SEO::generate() !!}

<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/images/manifest.json">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/images/favicon.ico">
<meta name="msapplication-TileColor" content="#131313">
<meta name="msapplication-TileImage" content="/images/mstile-144x144.png">
<meta name="msapplication-config" content="/images/browserconfig.xml">
<meta name="theme-color" content="#131313">

<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
{{ Html::style('fonts/webfonts.css') }}
{{ Html::style('//fonts.googleapis.com/css?family=Raleway:400,300,600%7CLato:400,300,100,700,900')}}
{{ Html::style('//fonts.googleapis.com/css?family=Varela+Round')}}


<!-- ICON FONTS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
{{ Html::style('css/ionicons.min.css') }}

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="https://use.fontawesome.com/b3591c17cd.css">
{{ Html::style('/css/bootstrap.css') }}
{{ Html::style('/elements/css/elements.css') }}
{{ Html::style('/css/sinister.css') }}
{{ Html::style('/css/venobox.css') }}
{{ Html::style('/css/animate.css') }}
{{ Html::style('/css/slimmenu.css') }}
{{ Html::style('/css/main.css') }}
{{ Html::style('/css/main-bg.css') }}
{{-- PRISM SYNTAX HIGHLIGHTER --}}
{{ Html::style('/css/main-responsive.css') }}
{{ Html::style('/css/custom.css') }}
{{ Html::style('/bower_components/fluidbox/dist/css/fluidbox.min.css') }}
{{ Html::style('/bower_components/fluidbox/dist/css/fluidbox.min.css.map') }}
{{ Html::style('/bower_components/aos/dist/aos.css') }}
{{ Html::style('/css/ig.css') }}
{{ Html::style('/packages/datatables/css/dataTables.bootstrap.min.css') }}

@yield('stylesheets')


<!-- LESS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet/less" type="text/css" href="/less/color.less">
<link rel="stylesheet/less" type="text/css" href="/less/fonts.less">
<script src="/less/less.min.js"></script>

<!-- Audience Tracking
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

{!! Analytics::render() !!}

</head>
