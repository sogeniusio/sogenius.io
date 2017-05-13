<!-- head -->

@include('partials._header')

<!--/head-->

<body>



    <!-- Preloader
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @yield('partials._preloader')

    <!-- end : preloader -->


    <!-- Nav Link Show Panel
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @include('partials._show-panel')

    <!-- Mobile Only Navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @include('partials._mobile-nav')

    <!-- mobile only navigation : ends -->



    <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @include('partials._sidebar-logo-social')

    @include('partials._nav')
    <!-- end : masthead -->


    <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="mastcontent">
      
      @yield('content')

    </div>
    <!-- end : mastwrap -->


    <!-- FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @include('partials._footer')
    <!-- end : mastfoot -->


    <!-- End Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    @include('partials._scripts')

</body>

</html>
