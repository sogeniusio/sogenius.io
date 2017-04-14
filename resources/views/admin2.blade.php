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
        <div class="page-header">
            <h1 class="title">@yield('page-title')</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Extra Pages</a></li>
                <li class="active">Blank Page</li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="index.html" class="btn btn-light">Dashboard</a>
                    <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
                </div>
            </div>
            <!-- End Page Header Right Div -->
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
