@extends('admin')

@section('title', '| Edit Comment')

@section('stylesheets')

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Comment</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="post">
                <div class="row text-center">
                    <h1>Edit <span>Comment</span></h1>
                </div>
                <div class="entry-header">
                    <div class="entry-thumbnail">
                        <img class="img-responsive" src="/images/blog/post5.jpg" alt="">
                    </div>
                </div>
                <!-- beginning of post form -->

                {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
                <div class="post-content">

                    <div class="form-group">
                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, array('class' => 'form-control', 'disabled' => '', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', "Email:") }}
                        {{ Form::text('email', null, array('class' => 'form-control', 'disabled' => '', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('comment', "Comment:") }}
                        {{ Form::textarea('comment', null, array('class' => 'form-control', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('Update Comment', array('class' => 'btn2 btn-success btn-sm btn-block')) }}
                    </div>
                </div>




            {{ Form::close() }}

            <!-- end of form -->

            </div><!--/post--> `
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('/js/parsley.min.js') !!}

@endsection