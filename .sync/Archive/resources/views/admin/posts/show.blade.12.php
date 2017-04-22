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
          <h1 class="page-header">{{ $post->title }}<div class="pull-right">
            <div class="col-md-12">
                <a href="{{ route('posts.index') }}" class="btn btn-default"><span><i
                                class="fa fa-angle-left"></i></span> Back to posts list</a>
                {!! Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-primary')) !!}
            </div>
          </div></h1>

      </div>
  </div>

  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="container">

                  </div>





                </div>
                </div>


              <div class="panel-body">
                <div class="entry-header">

                    <div class="entry-thumbnail">
                        <img class="img-resxponsive" src="/images/blog/post5.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <p>{!! $post->body !!}</p>
                  </div>
                  <div class="col-lg-4">
                    <ul>
                      <li><i class="fa fa-globe" aria-hidden="true"></i> {{ url($post->slug) }}</li>
                      <li><span class="fa fa-tag" aria-hidden="true"></span>
                          <span class="label label-primary">{{ $post->category->name }}</span></li>
                      <li><i class="fa fa-tags"></i>
                          @foreach ($post->tags as $tag)
                              <span class="label label-default">{{ $tag->name }}</span>
                          @endforeach</li>
                      <li><i class="icon-user"></i> Posted by: <a href="#">Admin</a></li>
                      <li><i class="fa fa-calendar"></i> {{ date('M j, Y h:ia', strtotime( $post->created_at )) }}</li>
                      <li><i class="fa fa-comments-o"></i> {{ $post->comments()->count() }} Comments</li>
                      <li></li>
                      <li></li>
                    </ul>
                     |
                     |

    	|
    	|
     	|
       	| <i class="icon-share"></i> <a href="#">39 Shares</a>
                  </div>
                </div>


                <div class="row">
                  <h4>Comments<small> {{ $post->comments()->count() }} Total</small></h4>
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



    <div id="main-blog">
        <div class="row"></div>
        <div class="container">

            <div class="row">

                <div id="content" class="site-content col-md-12">
                    <div class="post">


                        <div class="post-content">

                            <h2 class="entry-title">
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="author"><i class="fa fa-user"></i>Admin</li>
                                    <li class="publish-date">
                                    </li>
                                    <li style="text-transform: lowercase;">
                                    </li>
                                    <li><
                                    </li>
                                    <li class="tag">
                                    </li>
                                    <li class="comments">
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-summary">

                            </div>
                            <hr>





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
