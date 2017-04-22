 @include('partials._header') 
 @include('partials._admin-links')

<body>
    <!-- Preloader
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- end : preloader -->
    <div id="scroll-animate">
        <div id="scroll-animate-main">
            <div class="wrapper-parallax">
                <header>
                    <!-- Nav Link Show Panel
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    {{-- @include('partials._show-panel') --}}
                    <!-- Mobile Only Navigation
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    @include('partials._mobile-nav')
                    <!-- mobile only navigation : ends -->
                    <!-- Header
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    @include('partials._sidebar-logo-social') 
                    @include('partials._nav')
                    <!-- end : masthead -->
                </header>
                <section class="content">
                    <!-- MASTER CONTENT
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="mastcontent">
                        @yield('content')
                    </div>
                    <!-- end : mastwrap -->
                    <!-- INSTGRAM FEED
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    @include('partials._instafeed')
                    <!-- end : mastfoot -->
                </section>
                <!-- FOOTER
          –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                @include('partials._footer')
                <!-- end : mastfoot -->
            </div>
        </div>
    </div>
    <!-- BACK TO TOP
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <a href="javascript:" id="return-to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
    <!-- end : back to top -->
    <!-- End Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @include('partials._scripts')
</body>

</html>
