@extends('admin2') 
@section('icon', 'fa-list') 
@section('title', 'All news posts') 
@section('page-description') 
Posts are entries that display in reverse order on your home page. 
Posts usually have comments fields beneath them and are included in your site's RSS feed. 
@stop 
@section('link-area')
<a href="{{ route('posts.create') }}">
    <button type="button" class="btn btn-primary btn-icon btn-lg"><span class="badge">{{ $posts->count() }} </span> Create new post</button>
</a>
@stop 
@section('stylesheets') 
{!! Html::style('/css/parsley.css') !!} 
{!! Html::style('/css/select2.min.css') !!} 
@endsection 
@section('content') 
{{-- START TABLE --}}
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-title">
                @yield('page-title')
                <div class="pull-right">
                    <strong>Total:</strong> {{ $posts->count() }}
                </div>
            </div>
            <div class="panel-body table-responsive">
                <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th class="hidden-sm hidden-xs">Category</th>
                            <th class="hidden-sm hidden-xs">Tags</th>
                            <th>Published</th>
                            <th></th>
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
                                @php $tagstr = array(); foreach ($post->tags as $tag) { $tagstr[] = $tag->name; } $tag = implode(", ", $tagstr); echo $tag; @endphp {{-- @foreach ($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag->id) }}"><span
                                      class="label label-default">{{ $tag->name }}</span></a> @endforeach --}}
                            </td>
                            <td>{{ date('m/d/y', strtotime($post->created_at)) }}</td>
                            <td>
                                {{-- {!! Html::linkRoute('posts.show', 'View', array( $post->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4')) !!} {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4')) !!} {!! Html::linkRoute('posts.destroy', 'Delete', array( $post->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4', 'type' => 'button')) !!} --}}
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light">Options</button>
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- END TABLE --}} @endsection
