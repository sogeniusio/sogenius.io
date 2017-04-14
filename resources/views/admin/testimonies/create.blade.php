@extends('admin2')

@section('title', '| Testimonial Request')

@section('stylesheets')

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
        .back-button {
          margin: 40px 0 20px;
        }
    </style>

@endsection

@section('content')

    <div class="container-fluid">

      <div class="row">

          <div class="col-lg-10">
              <h1 class="page-header">Testimonial Request</h1>
          </div>

          <div class="col-lg-2">
              <a href="{{ route('testimonies.index') }}" class="back-button btn btn-block btn-primary">All testimonials <span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
      </div>

      <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-primary">
                    <div class="panel-heading">
                      <div class="container">
                        <h3 class="panel-title">Let's send a testimony request to a client</h3>

                      </div>
                    </div>

                    <div class="panel-body">

                      <div class="form-content">

                          <div class="col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nisi vitae leo sollicitudin maximus. Integer aliquet ut nunc eget imperdiet. Nulla id mi ac neque laoreet facilisis vel vitae purus. Curabitur hendrerit purus nec orci rhoncus, feugiat maximus nulla scelerisque.</p>

                              {!! Form::open(['id' => 'testimony-request', 'data-parsley-validate' => '', 'name' => 'testimony-request', 'route' => 'testimonies.store' ]) !!}
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          {{ Form::label('firstname', "Firstname:") }}
                                          {{ Form::text('firstname', null, array('class' => 'firstname form-control', 'required' => '', 'maxlength' => '100')) }}
                                      </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('lastname', "Lastname:") }}
                                        {{ Form::text('lastname', null, array('class' => 'lastname form-control', 'required' => '', 'maxlength' => '100')) }}
                                    </div>

                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('company', "Company:") }}
                                        {{ Form::text('company', null, array('class' => 'company form-control', 'maxlength' => '100')) }}
                                    </div>

                                  </div>

                              </div>


                              <div class="form-group">
                                  {{ Form::label('email', "Email address") }}
                                  {{ Form::email('email',  null, array('class' => 'lastname form-control', 'required' => '', 'maxlength' => '100')) }}
                              </div>


                              <div class="form-group">
                                  {{ Form::submit('Create Tesimonial Request', array('class' => 'btn btn-primary btn-block')) }}
                              </div>

                              {!! Form::close() !!}

                          </div>
                      </div>

                  </div>

              </div>

          </div>


      </div>
    </div>



@endsection

@section('scripts')


@endsection
