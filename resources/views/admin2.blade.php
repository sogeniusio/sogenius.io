@include('admin.partials._header2')
<body>
    <!-- Start Page Loading -->
    <div class="loading"><img src="/img/loading.gif" alt="loading-img"></div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    @include('admin.partials._topbar')
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    @include('admin.partials._sidebar')
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <div class="content">
        <!-- Start Page Header -->
<div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color9-bg"><i class="fa @yield('icon') "></i></span>
      <h1>@yield('title')</h1>
      <h4>@yield('page-description')</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        @yield('link-area')
      </li>
      </ul>
    </div>

  </div>
        <!-- End Page Header -->

            @yield('content')
        
        <!-- Start Footer -->
        <div class="row footer">
            <div class="col-md-6 text-left">
                Copyright &copy; 2014-
                <?php echo date("Y"); ?> <a href="{{ url('/') }}" target="_blank">So Genius I/O</a> All rights reserved.
            </div>
            <div class="col-md-6 text-right">
                Design and Developed by <a href="{{ url('/') }}" target="_blank">So Genius I/O</a>
            </div>
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Content -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    @include('admin.partials._optional-panel')
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    @include('admin.partials._scripts2') 
</body>
</html>
