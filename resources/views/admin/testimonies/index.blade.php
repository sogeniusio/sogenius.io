@extends('admin2')

@section('title', '| Blog Posts')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
        #request-button {
          margin: 40px 0 20px;
        }

        .flex {
                /* flexbox setup */
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
        }
        #request-form {
          display: none;
        }
    </style>

@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-10">
          <h1 class="page-header">Testimonies</h1>
      </div>
      <div class="col-lg-2"><a href="#" id="request-button" class="pull-right btn btn-primary btn-md">New Request</a></div>

  </div>

  <div class="row">
      <div class="col-lg-12">
          <div id="request-form" class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Create new request</h3>
            </div>
            <div class="panel-body">
              {!! Form::open(['id' => 'testimony-request', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'name' => 'testimony-request', 'route' => 'testimonies.store' ]) !!}
                <div class="container-fluid">
                  <div class="form-group">
                    <label class="sr-only" for="firstname">First Name</label>
                    {{ Form::text('firstname', null, array('class' => 'firstname form-control', 'required' => '', 'maxlength' => '100', 'placeholder' => 'First Name')) }}
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="lastname">Last Name</label>
                    {{ Form::text('lastname', null, array('class' => 'lastname form-control', 'required' => '', 'maxlength' => '100', 'placeholder' => 'Last Name')) }}
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="company">Company</label>
                    {{ Form::text('company', null, array('class' => 'company form-control', 'maxlength' => '100', 'placeholder' => 'Company')) }}
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email Address</label>
                    {{ Form::email('email', null, array('class' => 'email form-control', 'required' => '', 'maxlength' => '100', 'placeholder' => 'E-mail Address')) }}
                  </div>

                </div>
                <button type="submit" class="btn btn-success">Send request <span class="glyphicon glyphicon-chevron-right"></span></button>
              {{ Form::close() }}
            </div>
          </div>
          <div class="panel panel-primary">

            <div class="panel-heading">
                            <h3 class="panel-title">Clients</h3>
                        </div>
                <div class="panel-body">

                <table id="generated-table" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Client</th>
                      <th>Company</th>
                      <th>Email Address</th>
                      <th>Sent</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($testimonies as $testimony)
                      <tr>
                        <th scope="row">{{$testimony->id}}</th>
                        <th><a href="#">{{ $testimony->firstname . " " . $testimony->lastname }}</a></th>
                        <td><label class="label label-primary">{{ $testimony->company }}</label></td>
                        <td><a href="mailto:{{$testimony->email}}?subject=Hey {{$testimony->firstname}}!">{{$testimony->email}}</a></td>
                        <td>{{ date('m/y', strtotime($testimony->created_at)) }}</td>
                        <td>{{(!$testimony->is_completed ? 'Waiting on client...' : 'Complete')}}</td>
                        <td>
                          <p>
                            {!! Html::linkRoute('testimonies.destroy', 'Delete', array( $testimony->id ), array('class' => 'btn btn-xs btn-danger', 'type' => 'button')) !!}
                          </p>

                        </td>
                      </tr>
                    @endforeach


                  </tbody>
                </table>

                  <div class="text-center">
                      {!! $testimonies->links() !!}
                  </div>
              </div>
          </div>
      </div>
  </div></div>

@endsection

@section('scripts')
  <script>
  $(document).ready(function(){
      $("#request-button").click(function(){
          $("#request-form").slideToggle();
      });
  });
  </script>
@endsection
