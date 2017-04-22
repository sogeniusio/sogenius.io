@extends('admin')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <!-- TINYMCE WYSIWYG EDITOR -->
    <script type="text/javascript" src="{{ asset('/packages/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
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
            <h1 class="page-header">Create New Post</h1>
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

                    <div class="form-content">

                        <div class="col-md-12">

                            {!! Form::open(['id' => 'post-form', 'data-parsley-validate' => '', 'name' => 'post-form', 'route' => 'posts.store', 'files' => true ]) !!}
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
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('tags', "Tags:") }}

                                        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('excerpt', "Excerpt:") }}
                                {{ Form::text('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('feat_image', "Featured Image:") }}
                                {{ Form::file('feat_image') }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('body', "Body:") }}
                                {{ Form::textarea('body', null, array('id' => 'post_body', 'class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-md btn-block')) }}
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
