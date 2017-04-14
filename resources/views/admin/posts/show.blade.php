@extends('admin2')

@section('title', '| View Post')

@section('stylesheets')
{{--
    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!} --}}

    {{-- CKEDITOR --}}
    <script type="text/javascript" src="{{ asset('/bower_components/ckeditor/ckeditor.js') }}"></script>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $post->title }}
                <div class="pull-right">
                    <div class="col-md-12">
                        <a href="{{ route('posts.index') }}" class="btn btn-default"><span><i
                                        class="fa fa-angle-left"></i></span> Back to posts list</a>
                        {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-primary')) !!}
                    </div>
                </div>
            </h1>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    This is a summary of a post. It includes all pertinent metadata attached with the post.
                </div>


                <div class="panel-body">
                  <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-8">
                            <div class="entry-header ">

                                <div class="entry-thumbnail">
                                    <img class="img-responsive"
                                         src="{{ asset('/storage/uploads/posts/' . $post->feat_image ) }}"
                                         alt="Post Featured Image">
                                </div>
                            </div>
                            <p>{!! $post->body !!}</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Post Metadata</h4>
                                    <p>
                                        <i class="fa fa-globe"></i> <strong>Link:</strong> <a
                                                href="{{ url('news/' . $post->slug) }}">{{ url('news/' . $post->slug) }}</a>
                                    </p>
                                    <p class="lead card-text">{{ $post->excerpt }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    {{-- <li class="list-group-item"><i class="icon-user"></i> Posted by: <a href="#">Admin</a></li> --}}
                                    <li class="list-group-item"><i
                                                class="fa fa-calendar"></i> {{ date('M j, Y h:ia', strtotime( $post->created_at )) }}
                                    </li>
                                    <li class="list-group-item"><span class="fa fa-tag" aria-hidden="true"></span>
                                        <span class="label label-primary">{{ $post->category->name }}</span></li>
                                    <li class="list-group-item"><i class="fa fa-tags"></i>
                                        @foreach ($post->tags as $tag)
                                            <span class="label label-default">{{ $tag->name }}</span>
                                        @endforeach</li>

                                    <li class="list-group-item"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <a href="#">39</a> Shares
                                    </li>

                                </ul>
                                <div class="card-block">

                                    {!! Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}


                                    {!! Form::submit('Delete Post', ['class' => 'card-link btn btn-danger btn-block', 'type' => 'button']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>



                </div>
            </div>
        </div>
    </div>
{{--
    <script type="text/javascript">
        CKEDITOR.replace( 'post_body', {
            customConfig: '/bower_components/ckeditor/ck.js'
        });
    </script> --}}



@endsection
@section('scripts')
  <!-- PS Scripts -->
  <script type="text/javascript" src="{{ asset('/bower_components/ckeditor/adapters/jquery.js') }}"></script>
@endsection
