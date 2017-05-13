@extends('main') 
@section('stylesheets') 
{{-- STYLESHEETS --}}
<style media="screen">
.alert-success {
    background-color: #fff;
}

.request-quote {
    background-color: #fff;
    border: solid 2px #fff;
}

.request-quote:hover {
    background-color: #131313;
    border: solid 2px #131313;
    color: #fff !important;
}

.main-heading a {
    color: #fff;
}
</style>
{!! Html::style('/css/parsley.css') !!} @endsection @section('title', '| Contact') @section('works-filter')
<article class="col-md-5 no-pad text-right">
    <!--works filter panel :starts -->
    <a href="{{url('quote')}}" class="btn btn-oscar btn-oscar-light request-quote" role="button" aria-pressed="true">Request a quote</a>
    <!-- works filter panel :ends -->
</article>
@endsection @section('content')
</div>
{{-- Heading Area --}}
<section class="container about pad-top-half pad-bottom-half">
    <div class="row">
        <article class="col-md-5 text-left  inner-pad">
            <h6 class="super-text font2bold black">Say hello</h6>
        </article>
        <article class="col-md-5 col-md-offset-2 text-left ">
            <h3 class="main-heading font2light white"><a href="mailto:hi@sogenius.io?subject=Hi">hi@sogenius.io</a> / <a href="tel:+13479728827">347-972-8827</a> <br/>New York, NY</h3>
        </article>
    </div>
</section>
{{-- END Heading Area --}}
<section class="container pad silver-bg ">
    <div class="row">
        <article class="col-md-12 pad text-left">
            <div class="contact-item">
                <div class="row">
                    <article class="col-md-12 text-left introduction">
                        <p class="bx1-margin">Checkout our website <a href="{{url('quote')}}">quote request form</a>. Do you have a question to ask? Feel free to fill out our form below to send us an email.</p>
                </div>
                {{ Form::open(array('id' => 'form-contact', 'data-parsley-validate' => '')) }}
                <article class="{{ $errors->has('fullname') ? ' has-error' : '' }}">
                    {{ Form::text('fullname', 'Full name', array('id' => 'name', 'class' => 'form-control border-form white font4light', 'size' => '100', 'required' => '' )) }} {!! $errors->first('name', '
                    <p class="alert alert-danger">:message</p>') !!}
                </article>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="{{ $errors->has('company') ? ' has-error' : '' }}">
                            {{ Form::text('company', NULL, array('id' => 'company', 'class' => 'form-control border-form white font4light', 'size' => '100', 'required' => '' )) }} 
                            {!! $errors->first('company', '<p class="alert alert-danger">:message</p>') !!}
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::text('email', 'Email', array('id' => 'email', 'class' => 'form-control border-form white font4light', 'size' => '100', 'required' => '' )) }} 
                            {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                        </article>
                    </div>
                </div>
                <article>
                    {{ Form::text('subject', 'Subject', array('id' => 'subject', 'class' => 'form-control border-form white font4light', 'size' => '100', 'required' => '' )) }} 
                    {!! $errors->first('subject', '<p class="alert alert-danger">:message</p>') !!}
                </article>
                <article>
                    {{ Form::textarea('message', 'Message', array('id' => 'message', 'class' => 'form-control border-form white font4light', 'cols' => '40', 'rows' => '5', 'required' => '' )) }} 
                    {!! $errors->first('message', '<p class="alert alert-danger">:message</p>') !!}
                </article>
                <article class="recaptcha">
                    <div class="contain-recaptcha">
                        {!! app('captcha')->display() !!} @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <span class="label label-danger"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                        </span>
                        @endif
                    </div>
                </article>
                <article class="submit">
                    <div class="btn-wrap text-left">
                        <button class="btn btn-oscar btn-oscar-dark" id="submit" name="submit" type="submit">Send Message</button>
                    </div>
                </article>
                {{ Form::close() }}
            </div>
            </article>
    </div>
</section>
{{--
<div class="container-fluid">
    <div class="row">
        <article class="col-md-12 map-wrap" style="padding: 0;">
            <div class="overlay" onClick="style.pointerEvents='none'"></div>
            <div id="map" class="fullheight"></div>
        </article>
    </div>
</div> --}} 
@include('partials._usermeta') 
@endsection 
@section('scripts')
    @include('partials._scripts-forms')
    {!! Html::script('/js/libs/parsley.min.js') !!} 
    {!! Html::script('/js/ajax/form-contact.js') !!} 
@endsection
