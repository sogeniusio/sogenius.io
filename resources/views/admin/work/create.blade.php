@extends('admin2')

@section('title', '| Create New Projddect')

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
            <h1 class="page-header">Create Project</h1>
        </div>
    </div>

    <ul class="select se">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>

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

                    <div class="form-content">

                        <div class="col-md-12">

                            {!! Form::open(['id' => 'project-form', 'data-parsley-validate' => '', 'name' => 'project-form', 'route' => 'projects.store', 'files' => true ]) !!}
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', "Title:") }}
                                        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('slug', "Slug:") }}

                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon3">{{ url('/') }}/</span>
                                            {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('category_id', "Category:") }}

                                        <select class="form-control" name="category_id">
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('tags', "Tags:") }}

                                        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                                            {{-- @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach --}}

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('overview', "Overview:") }}
                                {{ Form::textarea('overview', null, array('id' => 'project_overview', 'class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('feat_image', "Featured Image:") }}
                                {{ Form::file('feat_image') }}
                            </div>

                            <div class="row">
                              <div class="col-lg-3">
                                <div class="form-group">
                                    {{ Form::label('description', "Description:") }}
                                    {{ Form::textarea('description', null, array('id' => 'project_description', 'class' => 'tiny-textarea form-control')) }}
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group">
                                    {{ Form::label('description', "Description:") }}
                                    {{ Form::textarea('description', null, array('id' => 'project_description', 'class' => 'tiny-textarea form-control')) }}
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="form-group">
                                    {{ Form::label('description', "Description:") }}
                                    {{ Form::textarea('description', null, array('id' => 'project_description', 'class' => 'tiny-textarea form-control')) }}
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                                {{ Form::submit('Create Project', array('class' => 'btn btn-success btn-md btn-block')) }}
                            </div>

                            {!! Form::close() !!}

                        </div>
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

    </script>

@endsection
