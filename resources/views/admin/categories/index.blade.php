@extends('admin2') @section('icon', 'fa-tag') 
@section('title', 'All Categories') 
@section('page-description') 
Categories provide a helpful way to group related posts together, and to quickly tell readers what a post is about. Categories also make it easier for people to find your content. Categories are similar to, but broader than, tags. 
@stop 
@section('link-area')
{{-- <a href="{{ route('posts.index') }}">
    <button type="button" class="btn btn-default btn-icon btn-lg">
        <span class="badge">{{ $categories->count() }} </span> View all posts
    </button>
</a> --}}
@stop @section('stylesheets')
<style>
#meta-sidebar.affix-top {
    position: static;
    margin-top: 30px;
    width: 228px;
}

#meta-sidebar.affix {
    position: fixed;
    top: 70px;
    width: 228px;
}
</style>
@endsection @section('content')
<div class="row">
    <div class="col-md-8 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-title">
                @yield('title')
                <ul class="panel-tools">
                    <li><strong>Total:</strong> {{ $categories->count() }}</li>
                </ul>
            </div>
            <div class="panel-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
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
            <div class="form-content">
                <div class="col-md-12">
                    {{ Form::open(['route' => 'categories.store', 'method' => 'POST']) }}
                    <div class="form-group">
                        {{ Form::label('name', "Name:") }} 
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Create', array('class' => 'btn btn-success btn-sm btn-square btn-block')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
    </div>
</div>
@endsection 
@section('scripts') 
@endsection
