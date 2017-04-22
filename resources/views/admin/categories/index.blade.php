@extends('admin2') 
@section('title', '| All Categories') 
@section('stylesheets') 
<style>
  #meta-sidebar.affix-top {
    position: static;
    margin-top:30px;
    width:228px;
  }

  #meta-sidebar.affix {
    position: fixed;
    top:70px;
    width:228px;
  }
  #deleteButton {
    display: none;
  }
</style>
@endsection 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Categories</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-sm-12">
        <div class="panel panel-default">
            <h3>List of created categories
            <div class="pull-right">
            <strong>Total:</strong> {{ $categories->count() }}
        </div>
            </h3>
            <div class="panel-body table-responsive">
            <form action="{{ route('categories.destroy') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="text-center"><i class="fa fa-trash"></i>
                                <div class="checkbox margin-t-0">
                                    <label><a href=""><input class="checkbox item-cb" type="checkbox" id="cbSelector" onchange="cbChanged()"/></a></label>
                                </div>
                            </td>
                            <td>#</td>
                            <td>Name</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">
                                <div class="checkbox margin-t-0">
                                    <input name="categories[]" data-id="checkbox" value="{{ $category->id }}" class="item-cb" id="{{ $category->id }}" type="checkbox" onchange="cbChanged()">
                                    <label for="{{ $category->id }}"></label>
                                </div>
                            </td>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 meta-sidebar">
        <div class="row">
            <div class="container-fluid">
                <div id="deleteButton">
                    <button class="btn btn-danger">Delete Checked</button>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="form-content">
                <div class="col-md-12">
                    {{ Form::open(['route' => 'categories.store', 'method' => 'POST']) }}
                    <div class="form-group">
                        {{ Form::label('name', "Name:") }} {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Create', array('class' => 'btn btn-success btn-sm btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    // $("#cbSelector").change(function () {
    //     $("input:checkbox").prop('checked', $(this).prop("checked"));
    //     $("#deleteButton").toggle();
    // });

$('#cbSelector').click(function (e) {
    $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});

function cbChanged()
{
    if($('.item-cb').is(":checked"))   
        $("#deleteButton").show();
    else
        $("#deleteButton").hide();
}


    // $('.item-cb').change(function() {
    //     if ( $('.item-cb:checked').length > 0) {
    //         $("#deleteButton").show();
    //     } else {
    //         $("#deleteButton").hide();
    //     }
    // }); 



</script>
@endsection
