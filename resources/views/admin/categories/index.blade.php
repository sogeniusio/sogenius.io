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
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List of created categories
                    <div class="pull-right">
                        <strong>Total:</strong> {{ $categories->count() }}
                    </div>

                </div>

                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                              @include('admin.partials._deleteconfirmation')

                              <table class="table table-striped table-responsive">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Options</th>
                                    </thead>

                                    <tbody>

                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- {!! Html::linkRoute('categories.edit', 'Edit', array( $category->id ), array('class' => 'btn btn-default outline btn-xs ')) !!} --}}
                                                    {{-- {!! Html::linkRoute('categories.destroy', 'Delete', array( $category->id ), array('class' => 'btn btn-danger outline btn-xs', 'type' => 'button')) !!} --}}
                                                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                                    {{ Form::close() }}

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
                                    {{ Form::label('name', "Name:") }}
                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
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
        </div>
    </div>
@endsection
