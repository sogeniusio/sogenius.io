@extends('admin')

@section('title', '| All Tags')

@section('stylesheets')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tags</h1>
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
                                    {{--                             <th>#</th>
                                     --}}                            <th>Name</th>
                                    <th></th>
                                    </thead>

                                    <tbody>

                                    @foreach ($tags as $tag)
                                        <tr>
                                            {{--                                     <td>{{ $tag->id }}</td>
                                             --}}<td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }} <i style="font-weight:100;" class="fa fa-chevron-right"></i></a></td>
                                            <td>{{ $tag->posts()->count() }}

                                              @if (count($tag->posts()) === 1)
                                                Post
                                              @else
                                                Posts
                                              @endif

                                            @endif
                                            }}}</td>
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
                                {{ Form::open(['route' => 'tags.store', 'method' => 'POST']) }}
                                <div class="form-group">
                                    {{ Form::label('name', "Name:") }}
                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::submit('Create Tag', array('class' => 'btn btn-success btn-sm btn-block')) }}
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
