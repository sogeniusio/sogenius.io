@extends('admin')

@section('title', '| Edit Post')

@section('stylesheets')

    {!! Html::style('/css/style.css') !!}
    {!! Html::style('/css/buttons.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <!-- TINYMCE WYSIWYG EDITOR -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            // autofocus: 'post_body',
            plugins: 'link code'
        });
    </script>

    <style >
      .mastfoot {
        margin-bottom: 40px !important;
      }
    </style>

@endsection

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Post <small>({{ $post->id }})</small></h1>
    </div>
  </div>

    <div id="main-blog">
        <div class="container">
            <div class="row">
                <div id="content" class="site-content col-md-12">
                    <div class="post">
                        <div class="row text-center">
                            <h1>Edit <span>Post</span> ({{ $post->id }})</h1>
                        </div>
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="/images/blog/post5.jpg" alt="">
                            </div>
                        </div>
                        <!-- beginning of post form -->

                        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

                        <div class="post-content">
                            <div class="entry-title">
                                <h2>
                                    {{ Form::label('title', 'Title:') }}
                                    {{ Form::text('title', null, ['class' => 'form-control input-lg'] ) }}
                                </h2>

                            </div>
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

                            <div class="entry-summary">
                                {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
                                {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                            </div>
                        </div>
                        <div class="text-center">
                            <div id="post-buttons" class="form-spacing-bottom">
                                {{ Form::submit('Save', ['class' => 'btn2 btn2-success btn2-sm']) }}
                                {!! Html::linkRoute('posts.show', 'Cancel', array( $post->id ), array('class' => 'btn2 btn2-danger btn2-sm')) !!}
                            </div>
                        </div>
                        <div class="row">

                        </div>

                    {!! Form::close() !!}
                    <!-- end of form -->

                    </div><!--/post--> `
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
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');

    </script>

@endsection
