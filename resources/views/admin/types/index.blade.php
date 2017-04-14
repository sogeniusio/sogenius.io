@extends('admin2')

@section('title', '| All Types')

@section('stylesheets')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Project Types</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  List of created project types
                  <div class="pull-right">
                      <strong>Total:</strong> {{ $types->count() }}
                  </div>

              </div>

                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                              <table class="table table-striped table-responsive">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Options</th>
                                    </thead>

                                    <tbody>

                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ $type->id }}</td>
                                            <td>{{ $type->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {!! Html::linkRoute('types.edit', 'Edit', array( $type->id ), array('class' => 'btn btn-default outline btn-xs ')) !!}
                                                    {!! Html::linkRoute('types.destroy', 'Delete', array( $type->id ), array('class' => 'btn btn-danger outline btn-xs', 'type' => 'button')) !!}

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
                                {{ Form::open(['route' => 'types.store', 'method' => 'POST']) }}
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
