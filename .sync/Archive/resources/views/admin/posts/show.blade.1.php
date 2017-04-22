@extends('admin')

@section('title', '| View Post')

@section('stylesheets')

    {!! Html::style('/css/style.css') !!}
    {!! Html::style('/css/buttons.css') !!}

    <style>
        .footer-top {
            display: none;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="row options">
                <div class="col-md-12">
                    <a href="{{ route('posts.index') }}" class="btn btn-default"><span><i
                                    class="fa fa-angle-left"></i></span> Back to posts list</a>
                    {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-primary')) !!}
                </div>

            </div>

        </div>
    </div>

    <div id="main-blog">
        <div class="row"></div>
        <div class="container">

            <div class="row">

                <div id="content" class="site-content col-md-12">
                    <div class="post">
                        <div class="entry-header">

                            <div class="entry-thumbnail">
                                <img class="img-resxponsive" src="/images/blog/post5.jpg" alt="">
                            </div>
                        </div>

                        <div class="post-content">

                            <h2 class="entry-title">
                                {{ $post->title }}
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="author"><i class="fa fa-user"></i>Admin</li>
                                    <li class="publish-date"><i
                                                class="fa fa-calendar"></i>{{ date('M j, Y h:ia', strtotime( $post->created_at )) }}
                                    </li>
                                    <li style="text-transform: lowercase;"><i class="fa fa-globe"
                                                                              aria-hidden="true"></i>{{ url($post->slug) }}
                                    </li>
                                    <li><span class="fa fa-tag" aria-hidden="true"></span>
                                        <span class="label label-primary">{{ $post->category->name }}</span>
                                    </li>
                                    <li class="tag"><i class="fa fa-tags"></i>
                                        @foreach ($post->tags as $tag)
                                            <span class="label label-default">{{ $tag->name }}</span>
                                        @endforeach
                                    </li>
                                    <li class="comments"><i
                                                class="fa fa-comments-o"></i>{{ $post->comments()->count() }} Comments
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-summary">
                                <p>{{ $post->body }}</p>

                            </div>
                            <hr>

                            <h2 class="post-comments entry-title" style="margin-top: 40px;">
                                Comments
                                <small>{{ $post->comments()->count() }} total</small>
                            </h2>

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

                            <div class="row row-fix text-center">

                                {!! Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}


                                {!! Form::submit('Delete Post', ['class' => 'btn btn-danger special', 'style' => 'border-radius: 0px;']) !!}

                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div><!--/post-->
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