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
                  <h6 class="super-text font2bold black">{{$full_name}}</h6>
                  <h6 class="super-text black"><small>Digital brand consultant</small></h6>
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


        <section class="container">

            <div class="row">
                <article class="col-md-12 text-left inner-pad  ">
                    <!-- Set up your HTML -->
                    <div class="slider-carousel owl-carousel owl-nav-sticky-wide slider-carousel">

                        <div class="sample-carousel-block">
                            <img alt="" title="" src="images/bg/so-genius-mac.jpg">
                        </div>
                        <div class="sample-carousel-block">
                            <img alt="" title="" src="images/bg/so-genius-one.jpg">
                        </div>

                    </div>
                </article>
            </div>

        </section>


        <section class="container-outer white-bg">
            <section class="container about  pad-top pad-bottom">

                <div class="row">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h3 class="promo-text font2light black">About Me</h3>
                        <h3 class="main-heading font2light black">{{ config('about.bio') }}</p>
                            <div class="row hidden-md hidden-lg">
                                <article class="main-heading col-md-12 text-left">
                                  <div class="inline-link">
                                    <span>Follow me</span>
                                    <a class="link" href="{{ url('quote')}}">Facebook</a>
                                    <a class="link" href="{{ url('terms')}}">Twitter</a>
                                    <a class="link" href="{{ url('policy')}}">Instagram</a>
                                    <a class="link" href="{{ url('policy')}}">Github</a>
                                  </div>
                                </article>
                            </div>
                            <div style="margin-top: 40px;" class="signature">
                                {{ Html::image('images/signed.png', 'My Signature') }}
                            </div>
                    </article>
                </div>

            </section>
        </section>

        @include('partials._testimonials')
        @include('partials._usermeta')

    </section>

@endsection
