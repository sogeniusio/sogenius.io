@extends('admin2')

@section('title', '| All Post Tags')

@section('stylesheets')


@endsection

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Post Tags</h1>
      </div>
  </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  List of created tags
                  <div class="pull-right">
                      <strong>Total:</strong> {{ $tags->count() }}
                  </div>

              </div>
                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                              <table class="table table-striped table-responsive">
                                    <thead>
                                    <th>Name</th>
                                    <th></th>
                                    </thead>

                                    <tbody>

                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }} <i
                                                            style="font-weight:100;"
                                                            class="fa fa-chevron-right"></i></a></td>
                                            <td>{{ $tag->posts()->count() }}

                                                @if ($tag->posts()->count())
                                                    Post
                                                @else
                                                    Posts
                                                @endif

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
                                {{ Form::open(['route' => 'tags.store', 'method' => 'POST']) }}
                                <div class="form-group">
                                    {{ Form::label('name', "Name:") }}
                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::submit('Create tag', array('class' => 'btn btn-success btn-sm btn-block')) }}
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
