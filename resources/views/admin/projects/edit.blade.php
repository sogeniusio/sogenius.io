@extends('admin2')

@section('title', '| Edit Project')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <!-- TINYMCE WYSIWYG EDITOR -->
    <script type="text/javascript" src="{{ asset('/packages/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
    tinymce.init({
      selector: '.tiny-textarea',
      height: 500,
      theme: 'modern',
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
      ],
      toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ]
     });

    $('textarea').keyup(updateCount);
    $('textarea').keydown(updateCount);

    function updateCount() {
        var cs = $(this).val().length;
        $('#characters').text(cs);
    }
    </script>

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Project
                <small>id: {{ $project->id }}</small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    This is some text to be added later
                </div>
                <div class="panel-body">
                    <div id="content" class="site-content col-md-12">
                        <div class="project">


                            <!-- beginning of project form -->

                            {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'PUT', 'files' => true]) !!}

                            <div class="project-content">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                      {{-- FEATURED IMAGES AREA  --}}

                                        <div class="entry-header ">
                                          {{ Form::label('null', "Update Featured Images:") }} <small>Suggested dimensions are <strong>700px x 400px</strong>.</small>

                                          <div class="row">
                                              <div class="col-sm-6 col-md-4">
                                                <div class="thumbnail">
                                                  <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" alt="Project Featured Image 1">
                                                  <div class="caption">
                                                    <p>{{ $project->feat_image1 }}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-4">
                                                <div class="thumbnail">
                                                  <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image2 ) }}" alt="Project Featured Image 2">
                                                  <div class="caption">
                                                    <p>{{ $project->feat_image2 }}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-4">
                                                <div class="thumbnail">
                                                  <img src="{{ asset('/storage/uploads/projects/' . $project->feat_image3 ) }}" alt="Project Featured Image 3 ">
                                                  <div class="caption">
                                                    <p>{{ $project->feat_image3 }}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            <div class="col-lg-12">

                                              <div class="form-group">
                                                  {{-- {{ Form::label('feat_image', "Featured Image:") }} --}}
                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <strong>Update #1</strong>{{ Form::file('feat_image1') }}
                                                    </div>
                                                    <div class="col-lg-4">
                                                      <strong>Update #2</strong>{{ Form::file('feat_image2') }}
                                                    </div>
                                                    <div class="col-lg-4">
                                                      <strong>Update #3</strong>{{ Form::file('feat_image3') }}
                                                    </div>
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

                                    </div>



                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('slug', "Slug:") }}

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">{{ url('/projects') }}/</span>
                                                {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('type_id', "Type:") }}

                                            <div class="input-group">
                                                {{ Form::select('type_id', $types, null, ['class' => 'form-control']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('identities', "Identities:") }}
                                            {{ Form::select('identities[]', $identities, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-top: 20px;">
                                        <div class="form-group">
                                            {{ Form::label('title', 'Title:') }}
                                            {{ Form::text('title', null, ['class' => 'form-control'] ) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('overview', "Overview:") }}
                                            {{ Form::textarea('overview', null, array('id' => 'project_overview', 'class' => 'form-control')) }}
                                        </div>
                                    </div>
                                </div>

                                <div class="entry-summary">
                                    {{ Form::label('description', 'Description:', ['class' => 'form-spacing-top']) }}
                                    {{ Form::textarea('description', null, ['class' => 'tiny-textarea form-control']) }}

                                </div>
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="text-center">
                                    <div id="project-buttons" class="form-spacing-bottom">
                                        <div class="col-lg-6">
                                            {{ Form::submit('Save', ['class' => 'btn btn-success btn-md btn-block']) }}

                                        </div>
                                        <div class="col-lg-6">
                                            {!! Html::linkRoute('projects.show', 'Cancel', array( $project->id ), array('class' => 'btn btn-danger btn-md btn-block')) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>


                        {!! Form::close() !!}
                        <!-- end of form -->

                      </div><!--/project--> `
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('scripts')

    {!! Html::script('/js/libs/parsley.min.js') !!}
    {!! Html::script('/js/libs/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($project->identities()->getRelatedIds()) !!}).trigger('change');


    </script>

@endsection
