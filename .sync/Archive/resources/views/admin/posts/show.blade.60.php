@extends('admin')

@section('title', '| View Post')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
    </style>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    This is a summary of a post. It includes all pertinent metadata attached with the post.
                </div>


                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="entry-header ">

                                <div class="entry-thumbnail">
                                    <img class="img-responsive"
                                         src="{{ asset('/images/posts/ftimgs/' . $post->feat_image ) }}"
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
                                        <i class="fa fa-globe"></i> <strong>Location:</strong> <a
                                                href="news/{{ url('news/'$post->slug) }}">news/{{ url($post->slug) }}</a>
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
                                    <li class="list-group-item"><i
                                                class="fa fa-comments-o"></i> {{ $post->comments()->count() }} Comments
                                    </li>

                                    <li class="list-group-item"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <a href="#">39</a> Shares
                                    </li>

                                </ul>
                                <div class="card-block">


                                    {{-- <button type="button" class="card-link btn btn-default"><a href="#" class="card-link">Card link</a>
          </button>
                                    <button type="button" class="card-link btn btn-default"><a href="#" class="card-link">Another link</a> --}}
                                    {!! Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}


                                    {!! Form::submit('Delete Post', ['class' => 'card-link btn btn-danger btn-block', 'type' => 'button']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Comments
                                <small> {{ $post->comments()->count() }} Total</small>
                            </h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($post->comments as $comment)
                                    <tr>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>
                                            <a href="{{ route('comments.edit', $comment->id) }}"
                                               class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                                            <a href="{{ route('comments.delete', $comment->id) }}"
                                               class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
