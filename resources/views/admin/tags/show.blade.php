@extends('admin2')

@section('title', "| $tag->name Posts")

@section('stylesheets')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{ $tag->name }}
                <small>(used in {{$tag->posts()->count() }} posts)</small>
                <div class="pull-right">
                    {!! Html::linkRoute('tags.edit', 'Edit tag', array( $tag->id ), array('class' => 'btn btn-primary')) !!}

                </div>
            </h1>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Associated posts
                    <div class="pull-right">
                        <a href="{{ route('tags.index') }}" class="btn btn-default btn-xs"><span><i
                                        class="fa fa-angle-left"></i></span> Back to tags list</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <table class="table ">
                        <caption>Viewing all posts that are associated with the <span
                                    class="label label-primary">{{ $tag->name }}</span> tag.
                        </caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Title</th>
                            <th>Associated tags</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tag->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->id) }}"><span
                                                    class="label label-primary">{{ $tag->name }}</span></a>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}"
                                       class="btn btn-xs btn-primary">View post</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>


                    <div class="col-lg-12">
                      {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                      {!! Form::submit('Delete Tag', ['class' => 'btn btn-danger btn-block']) !!}
                      {{ Form::close() }}
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
