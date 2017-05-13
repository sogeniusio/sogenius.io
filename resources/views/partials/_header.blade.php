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

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

{{ Html::style('/css/bundle.css') }}
{{ Html::style('/css/icons.bundle.css') }}
{{ Html::style('/css/plugins.bundle.css') }}

@yield('stylesheets')


<!-- LESS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
{{-- <link rel="stylesheet/css" type="text/css" href="/css/color.css"> --}}
{{-- <link rel="stylesheet/css" type="text/css" href="/color/font.css"> --}}
{{-- <script src="/less/less.min.js"></script> --}}

<!-- Audience Tracking
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

{!! Analytics::render() !!}

</head>
