@extends('admin2') 
@section('icon', 'fa-tag') 
@section('title', 'Create New Post') 
@section('page-description') 
Posts are entries that display in reverse order on your home page. 
Posts usually have comments fields beneath them and are included in your site's RSS feed. 
@stop 
@section('link-area')
<a href="{{ route('posts.index') }}">
    <button type="button" class="btn btn-default btn-icon btn-lg"><span class="badge">{{ $posts->count() }} </span> View all posts</button>
</a>
@stop 
@section('stylesheets') 
{!! Html::style('/css/parsley.css') !!} 
{!! Html::style('/css/select2.min.css') !!} 
{{-- CKEDITOR WYSIWYG EDITOR --}} 
{!! Html::script('/bower_components/jquery/dist/jquery.min.js') !!} 
{!! Html::script('/bower_components/ckeditor/ckeditor.js') !!} 
{!! Html::script('/bower_components/ckeditor/adapters/jquery.js') !!} 
@endsection 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-title">
                @yield('title')
                <ul class="panel-tools">
                    <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <div class="panel-body padding-50">
                {{ Form::open(['id' => 'post-form', 'data-parsley-validate' => '', 'name' => 'post-form', 'route' => 'posts.store', 'class' => 'form-horizontal', 'files' => true ]) }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary btn-square">
                                    Upload&hellip; <input type="file" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label form-label">Title:</label>
                            <div class="col-md-10">
                                {{ Form::text('title', null, array('class' => 'title form-control', 'required' => '', 'maxlength' => '255', 'data-width' => 'auto' )) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-2 control-label form-label">Slug:</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">{{ url('/news/') }}/</span> {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'slug form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-width' => 'auto')) }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('excerpt', "Excerpt:", array('class' => 'col-md-2 control-label form-label')) }}
                            <div class="col-md-10">
                                {{ Form::text('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control', 'placeholder' => 'The excerpt is an optional summary or description of a post.')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags" class="col-md-2 control-label form-label">Tags:</label>
                            <div class="col-md-10">
                                <select data-width="auto" data-live-search="true" class="selectpicker" name="tags[]" multiple>
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="col-sm-2 control-label form-label">Category:</label>
                            <div class="col-sm-10">
                                <select data-width="auto" class="categorypicker" name="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('body', "Body:") }} {{ Form::textarea('body', null, array('id' => 'post_body', 'class' => 'post_body form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Create Post', array('class' => 'btn btn-square btn-primary btn-md btn-block')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
CKEDITOR.replace('post_body', {
    customConfig: '/bower_components/ckeditor/ck.js',
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
});
</script>
@endsection @section('scripts') {!! Html::script('/js/libs/parsley.min.js') !!} {!! Html::script('/js/libs/select2.min.js') !!}
<script type="text/javascript">
$('.select2-multi').select2({
    width: 'resolve',
    placeholder: "Select or add tags",
    tags: true,
    tokenSeparators: [",", " "],
    createTag: function(newTag) {
        return {
            id: 'new:' + newTag.term,
            text: newTag.term + ' (new)'
        };
    }
});
</script>
<script>
$('.categorypicker').selectpicker({
    style: 'btn-primary',
    size: 12
});
</script>
<script>
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
</script>
@endsection
