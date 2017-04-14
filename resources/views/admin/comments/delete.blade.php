@extends('admin2')

@section('title', '| Delete Comment')

@section('stylesheets')


@endsection

@section('content')


    <div id="main-blog">
        <div class="container">
            <div class="row">
                <div id="content" class="site-content col-md-12">
                    <div class="post">
                        <div class="row text-center">
                            <h1 style="text-transform: uppercase;">Are you sure?</h1>
                        </div>
                        <div class="post-content">

                            <p class="text-center">
                                <strong>Name:</strong><br /> {{ $comment->name }} <br />
                                <strong>Email:</strong><br /> {{ $comment->email }} <br />
                                <strong>Comment:</strong><br /> {{ $comment->comment }} <br />
                            </p>
                            <!-- beginning of post form -->

                            {{ Form::model($comment, ['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}

                            <div class="form-group">
                                {{ Form::submit('YES DELETE THIS COMMENT!', array('class' => 'btn btn-danger btn-sm btn-block')) }}
                            </div>

                            {{ Form::close() }}
                        </div>


                        <!-- end of form -->

                    </div><!--/post--> `
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('/js/parsley.min.js') !!}

@endsection