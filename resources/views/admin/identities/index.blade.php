@extends('admin2')

@section('title', '| All Project Identities')

@section('stylesheets')


@endsection

@section('content')

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Project Identities</h1>
      </div>
  </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  List of created identities
                  <div class="pull-right">
                      <strong>Total:</strong> {{ $identities->count() }}
                  </div>

              </div>
                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    {{--                             <th>#</th>
                                     --}}
                                    <th>Name</th>
                                    <th></th>
                                    </thead>

                                    <tbody>

                                    @foreach ($identities as $identity)
                                        <tr>
                                            {{--                                     <td>{{ $identity->id }}</td>
                                             --}}
                                            <td><a href="{{ route('identities.show', $identity->id) }}">{{ $identity->name }} <i
                                                            style="font-weight:100;"
                                                            class="fa fa-chevron-right"></i></a></td>
                                            <td>{{ $identity->projects()->count() }} Identities

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
                                {{ Form::open(['route' => 'identities.store', 'method' => 'POST']) }}
                                <div class="form-group">
                                    {{ Form::label('name', "Name:") }}
                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::submit('Create Identity', array('class' => 'btn btn-primary btn-sm btn-block')) }}
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
