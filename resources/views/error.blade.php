<!DOCTYPE html>
<html>
<head>
        <!-- Basic Page Info
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>Sorry, @yield('title')</title>
        <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}" title="{{ config('news.title') }} RSS Feed">
        <meta name="description"
              content="{{ config('news.description') }}." />
        <meta property="og:title" content="{{ config('news.subtitle')}}" />
        <meta property="og:image" content="http://sogenius.io/images/sogenius-opengraphic.png">
        <meta property="og:description" content="{{ config('news.description') }}" />
        <meta property="og:url" content="http://sogenius.io" />
        <meta property="og:site_name" content="{{ config('news.title') }}">
        <meta name="author" content="{{ config('news.author') }}" />

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


      <!-- ICON FONTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      {{ Html::style('css/ionicons.min.css') }}


        <!-- CSS
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="https://use.fontawesome.com/b3591c17cd.css">
        {{ Html::style('//use.fontawesome.com/b3591c17cd.css')}}
        {{ Html::style('/css/bootstrap.css') }}
        {{ Html::style('/elements/css/elements.css') }}
        {{ Html::style('/css/sinister.css') }}
        {{ Html::style('/css/main.css') }}
        {{ Html::style('/css/main-bg.css') }}
        {{ Html::style('/css/main-responsive.css') }}
        {{ Html::style('/css/custom.css') }}
        {{ Html::style('/css/errors.css')}}

        @yield('stylesheets')
</head>
<body>
<div class="container">
  <div class='sog-logo'></div>

    <div class="content">
      <section class="container-fluid silver-bg pad-top pad-bottom">

              <div class="row">

                    @yield('content')
            </div>
            </section>
</div>
</div>

@yield('scripts')

</body>
</html>
