@extends('admin2')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}
    {{-- CKEDITOR WYSIWYG EDITOR --}}
    <script type="text/javascript" src="{{ asset('/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bower_components/ckeditor/adapters/jquery.js') }}"></script>
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
        <div class="col-lg-10">
            <h1 class="page-header">Create New Post</h1>
        </div>
        <div class="col-lg-2 ">
            <a href="{{ route('posts.index') }}" class="back-button btn btn-block btn-primary">View all posts</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                              <h3 class="panel-title">Lets create a new post.</h3>
                          </div>
                <div class="panel-body">

                    <div class="form-content">

                        <div class="col-md-12">

                            {{  Form::open(['id' => 'post-form', 'data-parsley-validate' => '', 'name' => 'post-form', 'route' => 'posts.store', 'files' => true ]) }}
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', "Title:") }}
                                        {{ Form::text('title', null, array('class' => 'title form-control', 'required' => '', 'maxlength' => '255')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('slug', "Slug:") }}

                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon3">{{ url('/news/') }}/</span>
                                            {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'slug form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
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

                                </div>
                                <div class="col-md-4 col-sm-12">
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
                                {{ Form::textarea('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('feat_image', "Upload Featured Image:") }}
                                {{ Form::file('feat_image') }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('body', "Body:") }}
                                {{ Form::textarea('body', null, array('id' => 'post_body', 'class' => 'post_body form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-md btn-block')) }}
                            </div>

                            {{ Form::close() }}

                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>

    <script type="text/javascript">
        CKEDITOR.replace( 'post_body', {
            customConfig: '/bower_components/ckeditor/ck.js',
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        });
    </script>

@endsection

@section('scripts')

    {!! Html::script('/js/libs/parsley.min.js') !!}
    {!! Html::script('/js/libs/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2({
            width: 'resolve',
            placeholder: "Select or add tags",
            tags: true,
            tokenSeparators: [",", " "],
            // createTag: function(newTag) {
            //   return {
            //     id: 'new:' + newTag.term,
            //     text: newTag.term + ' (new)'
            //   };
            // }
        });

    </script>

@endsection
