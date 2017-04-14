@extends('admin2')

@section('title', '| View Project')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

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

    <div class="row">
        <div class="col-lg-9">
            <h1 class="page-header">{{ $project->title }}

            </h1>

        </div>
            <div class="col-lg-3">
                <a href="{{ route('projects.index') }}" class="back-button btn btn-block btn-default"><span><i
                                class="fa fa-angle-left"></i></span> Back to projects list</a>
            </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    This is a summary of a project. It includes all pertinent metadata attached with the project.
                </div>


                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-8">
                          {{-- FEATURED IMAGES AREA  --}}

                            <div class="entry-header ">

                              <div class="row">
                                <div class="col-sm-6 col-md-4">
                                  <div class="thumbnail">
                                    <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" class="thumbnail">
                                      <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" alt="Project Featured Image 1">
                                        </a>

                                    <div class="caption">
                                      <p>{{ $project->feat_image1 }}</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                  <div class="thumbnail">
                                    <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image2 ) }}" class="thumbnail">
                                      <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image2 ) }}" alt="Project Featured Image 2">
                                        </a>

                                    <div class="caption">
                                      <p>{{ $project->feat_image2 }}</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                  <div class="thumbnail">
                                    <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image3 ) }}" class="thumbnail">
                                      <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image3 ) }}" alt="Project Featured Image 3 ">
                                        </a>

                                    <div class="caption">
                                      <p>{{ $project->feat_image3 }}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>


                                {{-- <div class="entry-thumbnail">
                                    <img class="img-responsive"
                                         src="{{ asset('/images/projects/ftimgs/' . $project->feat_image ) }}"
                                         alt="Project Featured Image">
                                </div> --}}
                            </div>
                            {{-- END FEATURED IMAGES AREA  --}}

                            <p>{!! $project->description !!}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Project Metadata</h4>
                                    <p>
                                        <i class="fa fa-globe"></i> <strong>Location:</strong> <a
                                                href="{{ url('works/' . $project->slug) }}">{{ url('works/' . $project->slug) }}</a>
                                    </p>
                                    <p class="lead card-text">{{ $project->overview }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    {{-- <li class="list-group-item"><i class="icon-user"></i> Projected by: <a href="#">Admin</a></li> --}}
                                    <li class="list-group-item"><i
                                                class="fa fa-calendar"></i> {{ date('M j, Y h:ia', strtotime( $project->created_at )) }}
                                    </li>
                                    <li class="list-group-item"><span class="fa fa-tag" aria-hidden="true"></span>
                                        <span class="label label-primary">{{ $project->type->name }}</span></li>
                                    <li class="list-group-item"><i class="fa fa-tags"></i>
                                        @foreach ($project->identities as $identity)
                                            <span class="label label-default">{{ $identity->name }}</span>
                                        @endforeach</li>
                                    <li class="list-group-item"><i
                                                class="fa fa-comments-o"></i> {{-- {{ $project->comments()->count() }} Comments --}}
                                    </li>

                                    <li class="list-group-item"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <a href="#">39</a> Shares
                                    </li>


                                </ul>
                                <div class="card-block text-center">

                                    {!! Form::open(['route' =>['projects.destroy', $project->id], 'method' => 'DELETE']) !!}

                                    {!! Html::linkRoute('projects.edit', 'Edit', array( $project->id ), array('class' => 'block btn btn-block btn-primary')) !!}

                                    {!! Form::submit('Delete Project', ['class' => 'card-link btn btn-danger btn-block', 'type' => 'button']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('/js/parsley.min.js') !!}
    {!! Html::script('/js/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>

@endsection
