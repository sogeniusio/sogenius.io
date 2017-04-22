@extends('admin')

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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                                <table class="table">
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
                                                    {!! Html::linkRoute('categories.edit', 'Edit', array( $category->id ), array('class' => 'btn2 btn2-default outline btn2-sm ')) !!}
                                                    {!! Html::linkRoute('categories.destroy', 'Delete', array( $category->id ), array('class' => 'btn2 btn2-danger outline btn2-sm', 'type' => 'button')) !!}

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
                                    {{ Form::submit('Create', array('class' => 'btn2 btn-success btn-sm btn-block')) }}
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
