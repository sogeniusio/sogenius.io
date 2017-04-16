@extends('admin2') 
@section('title', '| All Categories') 
@section('stylesheets') 
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="text-center"><i class="fa fa-trash"></i></td>
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
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>
                            </td>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="btn-group">
                                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }} {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} {{ Form::close() }}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
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
@endsection
