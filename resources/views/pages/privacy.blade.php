@extends('main')
@section('stylesheets')
    {{-- STYLESHEETS --}}

    {{ Html::style('css/owl.carousel.css') }}

<style media="screen">

.link {
  padding-bottom: 20px;
}
h6 small {
  font-size: 55%;
}
</style>

@endsection
@section('title', '| About')
@section('content')
    <section class="mastwrap">


        <section class="container about  pad-top pad-bottom">

            <div class="row">
              <article class="col-md-5 text-left  inner-pad">
                  <h6 class="super-text font2bold black">Privacy Policy</h6>
                  <h6 class="super-text black"><small></small></h6>
              </article>
                {{-- <article class="col-md-5 text-left  inner-pad">
                    <h6 class="super-text font2light black">{{$full_name}}</span></h6>
                    <h6 class="super-text font2bold black">Digital brand consultant</span></h6>
                </article> --}}
                <article class="col-md-5 col-md-offset-2 text-left ">
                    <h3 class="main-heading font2light white">I like making nice things.</h3>
                </article>
            </div>

        </section>
        <section class="container-outer white-bg">
            <section class="container about pad-top pad-bottom">

                <div class="row">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        {!! config('site.privacy_policy') !!}
                    </article>
                </div>

            </section>
        </section>


        @include('partials._testimonials')

    </section>
@include('partials._usermeta')

@endsection
