@extends('admin2')

@section('title', '| Blog Posts')

@section('stylesheets')

    {!! Html::style('/css/style.css') !!}
    {!! Html::style('/css/buttons.css') !!}

    <style>
        a {
            color: #ad1a1a;
        }
        a:hover {
          color: #631919;
        }
        .mastfoot {
          margin-bottom: 40px !important;
        }
    </style>

@endsection

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">All Posts</h1>
      <div class="col-md-12"><a href="{{ URL::route('posts.create') }}" class="btn btn-default btn-xs">Create New Post</a></div>
    </div>

  </div>

  <div class="row">
    <div class="form-content">
        <div class="col-md-12">
            <table class="table table-striped table-responsive">
                <thead>
{{--                         <th>#</th>
--}}                       <th>Title</th>
                    <th class="hidden-sm hidden-xs">Category</th>
                    <th class="hidden-sm hidden-xs">Tags</th>
{{--                             <th>Body</th>
--}}                            <th>Created</th>
                    <th></th>
                </thead>

                <tbody>

                @foreach ($posts as $post)
                    <tr>
{{--                                 <td>{{ $post->id }}</td>
--}}                            <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                        <td class="hidden-sm hidden-xs"><label class="label label-primary">{{ $post->category->name }}</label></td>
                        <td class="hidden-sm hidden-xs">@foreach ($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag->id) }}"><span class="label label-default">{{ $tag->name }}</span></a>
                            @endforeach
                            </td>
{{--                                 <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body))  > 50 ? "..." : "" }}</td>
--}}                                <td>{{ date('m/d/y', strtotime($post->created_at)) }}</td>
                        <td>
                            <div class="btn-group">
                                {!! Html::linkRoute('posts.show', 'View', array( $post->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                                {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                                {!! Html::linkRoute('posts.destroy', 'Delete', array( $post->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4', 'type' => 'button')) !!}

                            </div>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
  </div>


@endsection
