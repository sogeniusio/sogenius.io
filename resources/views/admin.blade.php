<!-- head -->

@include('admin.partials._header')

<!--/head-->
<body>
<div id="wrapper">

    @include('admin.partials._nav')

    <div id="admin-messages">

        @include('partials._messages')

    </div>

    <div id="page-wrapper">


        @yield('content')

        {{--<div class="row">--}}
        {{--<div class="container-fluid">--}}
        {{--<div class="col-lg-12">--}}
        {{--@include('partials._footer')--}}

        {{--</div>--}}

        {{--</div>--}}

        {{--</div>--}}
    <div class="footer-wrapper">
      @include('admin.partials._footer')
    </div>


    </div>
    <!-- /#page-wrapper -->

</div>


<!--/javascripts-->

@include('admin.partials._scripts')

<!-- /javascripts -->
</body>
</html>
