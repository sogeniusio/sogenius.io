<!-- Bootstrap Core JavaScript -->
{!! Html::script('/packages/bootstrap/js/bootstrap.min.js') !!}
<!-- Metis Menu Plugin JavaScript -->
{!! Html::script('/packages/metisMenu/metisMenu.min.js') !!}

<!-- Morris Charts JavaScript -->
{!! Html::script('/packages/raphael/raphael.min.js') !!}
{!! Html::script('/packages/morrisjs/morris.min.js') !!}
{!! Html::script('/data/morris-data.js') !!}

<!-- Custom Theme JavaScript -->
{!! Html::script('/data/morris-data.js') !!}

{!! Html::script('/js/sb-admin-2.js') !!}

<!-- Prism -->
{!! Html::script('/js/libs/prism.js') !!}

<!-- DataTables Javascript -->
{!! Html::script('/packages/datatables/js/dataTables.bootstrap.min.js') !!}

<!-- Custom Javascript -->
{!! Html::script('/js/main.js') !!}


@yield('scripts')
