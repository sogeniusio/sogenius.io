@extends('admin')

@section('title', '| Edit Post')

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
            <h1 class="page-header">Edit Post
                <small>id: {{ $post->id }}</small>
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
                        <div class="post">


                            <!-- beginning of post form -->

                            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

                            <div class="post-content">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive"
                                                     src="{{ asset('/images/posts/ftimgs/' . $post->feat_image ) }}"
                                                     alt="Post Featured Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('excerpt', "Excerpt:") }}
                                        {{ Form::textarea('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control')) }}
                                    </div>


                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            {{ Form::label('slug', "Slug:") }}

                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">{{ url('/') }}/</span>
                                                {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('category_id', "Category:") }}

                                            <div class="input-group">
                                                {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('tags', "Tags:") }}

                                            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('featured_image', "Featured Image:") }}
                                            {{ Form::file('featured_image') }}
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-top: 20px;">
                                        <div class="form-group">
                                            {{ Form::label('title', 'Title:') }}
                                            {{ Form::text('title', null, ['class' => 'form-control'] ) }}

                                        </div>
                                    </div>
                                </div>

                                <div class="entry-summary">
                                    {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
                                    {{ Form::textarea('body', null, ['class' => 'tiny-textarea form-control']) }}

                                </div>
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="text-center">
                                    <div id="post-buttons" class="form-spacing-bottom">
                                        <div class="col-lg-6">
                                            {{ Form::submit('Save', ['class' => 'btn btn-success btn-md btn-block']) }}

                                        </div>
                                        <div class="col-lg-6">
                                            {!! Html::linkRoute('posts.show', 'Cancel', array( $post->id ), array('class' => 'btn btn-danger btn-md btn-block')) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>


                        {!! Form::close() !!}
                        <!-- end of form -->

                        </div><!--/post--> `
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
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');

    </script>

@endsection
