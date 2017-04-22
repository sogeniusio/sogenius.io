@extends('admin2') 
@section('icon', 'fa-newspaper-o') 
@section('title', 'Create New Post') 
@section('page-description', 'Posts are entries that display in reverse order on your home page. Posts usually have comments fields beneath them and are included in your site\'s RSS feed.') @section('link-area')
<a href="{{ route('posts.index') }}">
    <button type="button" class="btn btn-default btn-icon btn-lg"><span class="badge">{{ $posts->count() }} </span> View all posts</button>
</a>
@stop
@section('stylesheets') 
{!! Html::style('/css/parsley.css') !!} 
{!! Html::style('/css/select2.min.css') !!} 
{!! Html::style('/bower_components/dropzone/dist/dropzone.css') !!} 
{{-- CKEDITOR WYSIWYG EDITOR --}}
<script type="text/javascript" src="{{ asset('/bower_components/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/ckeditor/adapters/jquery.js') }}"></script>
<style>

</style>
@endsection 
@section('content')
<div class="row">
    <div class="col-lg-12">
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
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="title" class="col-sm-2 control-label form-label">Title:</label>
                          <div class="col-sm-10">
                              {{ Form::text('title', null, array('class' => 'title form-control', 'required' => '', 'maxlength' => '255', 'data-width' => 'auto' )) }}
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="slug" class="col-sm-2 control-label form-label">Slug:</label>
                          <div class="col-sm-10">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon3">{{ url('/news/') }}/</span> {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'slug form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-width' => 'auto')) }}
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          {{ Form::label('excerpt', "Excerpt:", array('class' => 'col-sm-2 control-label form-label')) }}
                          <div class="col-sm-10">
                              {{ Form::text('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control', 'placeholder' => 'The Excerpt is an optional summary or description of a post; in short, a post summary.')) }}
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="tags" class="col-sm-2 control-label form-label">Tags:</label>
                          <div class="col-sm-10">
                              <select data-width="auto" data-live-search="true" class="selectpicker" name="tags[]" multiple>
                                  @foreach ($tags as $tag)
                                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          </dv>
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
                <hr>
                <div class="form-group">
                            {{ Form::label('feat_image', "Upload Featured Image:") }} {{ Form::file('feat_image') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('body', "Body:") }} {{ Form::textarea('body', null, array('id' => 'post_body', 'class' => 'post_body form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-md btn-block')) }}
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
@endsection 
@section('scripts') 
{!! Html::script('/js/libs/parsley.min.js') !!} 
{!! Html::script('/bower_components/dropzone/dist/dropzone.css') !!}
{!! Html::script('/public/js/dropzone-config.js') !!}
{{-- {!! Html::script('/js/libs/select2.min.js') !!} --}}
<script type="text/javascript">
// $('.select2-multi').select2({
//     width: 'resolve',
//     placeholder: "Select or add tags",
//     tags: true,
//     tokenSeparators: [",", " "],
//     // createTag: function(newTag) {
//     //   return {
//     //     id: 'new:' + newTag.term,
//     //     text: newTag.term + ' (new)'
//     //   };
//     // }
// });
</script>
<script>
$('.categorypicker').selectpicker({
    style: 'btn-primary',
    size: 12
});
</script>
@endsection
