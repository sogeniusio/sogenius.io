@extends('admin')

@section('title', "| $tag->name Tag")

@section('stylesheets')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{ $tag->name }} Tag <small>{{$tag->posts()->count() }} Posts</small><div class="pull-right">
              {!! Html::linkRoute('tags.edit', 'Edit Tag', array( $tag->id ), array('class' => 'btn btn-primary')) !!}

            </div></h1>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Associated Posts
                    <div class="pull-right">
                      <a href="{{ route('tags.index') }}" class="btn btn-default btn-xs"><span><i class="fa fa-angle-left"></i></span> Back to tags list</a>

                        <div class="btn-group">
                              {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                              {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table ">
                        <caption>Viewing all posts that are tagged with the <span class="label label-default">{{ $tag->name }}</span> tag.</caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Title</th>
                            <th>Associated Tags</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tag->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->id) }}"><span class="label label-default">{{ $tag->name }}</span></a>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-xs btn-default outline">View</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
    </div>

    <div id="main-blog">

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
                                {{ $tag->name }} Tag <small>{{$tag->posts()->count() }}Posts</small>
                            </h2>


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
