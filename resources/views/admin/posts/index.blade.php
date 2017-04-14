@extends('admin2')
@section('title', '| Blog Posts')
@section('page-title', 'All news posts')
@section('stylesheets')
    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="col-md-12">
      
    </div>
    {{-- START TABLE --}}
    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          Striped rows
        </div>

        <div class="panel-body table-responsive">
          <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th class="hidden-sm hidden-xs">Category</th>
                <th class="hidden-sm hidden-xs">Tags</th>
                <th>Created</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
              <tr>
                  <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                  <td class="hidden-sm hidden-xs">
                    <label class="label label-primary"></label>
                  </td>
                  <td class="hidden-sm hidden-xs">
                    @php
                        $tagstr = array();
                        foreach ($post->tags as $tag) {
                          $tagstr[] = $tag->name;
                        }
                        $tag = implode(", ", $tagstr);
                        echo $tag;
                    @endphp
                    {{-- @foreach ($post->tags as $tag)
                          <a href="{{ route('tags.show', $tag->id) }}"><span
                                      class="label label-default">{{ $tag->name }}</span></a>
                      @endforeach --}}
                  </td>
                  <td>{{ date('m/d/y', strtotime($post->created_at)) }}</td>
                  <td>
                      <div class="btn-group">
                          {!! Html::linkRoute('posts.show', 'View', array( $post->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                          {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                          {!! Html::linkRoute('posts.destroy', 'Delete', array( $post->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4', 'type' => 'button')) !!}
                          <div class="btn-group">
                            <button type="button" class="btn btn-light">Option</button>
                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('admin/posts' . '/' . $post->id ) }}">View</a></li>
                              <li><a href="{{ url('admin/posts/' . $post->id . '/edit') }}">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </div>
                      </div>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
    {{-- END TABLE --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  All published posts
                  <div class="pull-right">
                      <strong>Total:</strong> {{ $posts->count() }}
                  </div>
              </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                        <th>Title</th>
                        <th class="hidden-sm hidden-xs">Category</th>
                        <th class="hidden-sm hidden-xs">Tags</th>
                        <th>Created</th>
                        <th>Options</th>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td class="hidden-sm hidden-xs">
                                  <label class="label label-primary"></label>
                                </td>
                                <td class="hidden-sm hidden-xs">
                                  @php
                                      $tagstr = array();
                                      foreach ($post->tags as $tag) {
                                        $tagstr[] = $tag->name;
                                      }
                                      $tag = implode(", ", $tagstr);
                                      echo $tag;
                                  @endphp
                                  {{-- @foreach ($post->tags as $tag)
                                        <a href="{{ route('tags.show', $tag->id) }}"><span
                                                    class="label label-default">{{ $tag->name }}</span></a>
                                    @endforeach --}}
                                </td>
                                <td>{{ date('m/d/y', strtotime($post->created_at)) }}</td>
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
    </div>
@endsection
