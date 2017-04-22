@extends('main')
@section('stylesheets')
    {{-- STYLESHEETS --}}

    {{ Html::style('css/owl.carousel.css') }}

@endsection
@section('title', '| About')
@section('content')
    <section class="mastwrap">


        <section class="container about  pad-top pad-bottom">

            <div class="row">
                <article class="col-md-5 text-left  inner-pad">
                    <h6 class="super-text  font2bold black">{{$firstname}} <span class="last-name"><br/>{{$lastname}}</span></h6>
                </article>
                <article class="col-md-5 col-md-offset-2 text-left ">
                    <h3 class="main-heading  font2light white">Hello everyone! <br/>oscar is a portfolio of web designer
                        John Doe.</h3>
                </article>
            </div>

        </section>


        <section class="container">

            <div class="row">
                <article class="col-md-12 text-left inner-pad  ">
                    <!-- Set up your HTML -->
                    <div class="slider-carousel owl-carousel owl-nav-sticky-wide slider-carousel">

                        <div class="sample-carousel-block">
                            <img alt="" title="" src="images/bg/03.jpg">
                        </div>
                        <div class="sample-carousel-block">
                            <img alt="" title="" src="images/bg/02.jpg">
                        </div>

                    </div>
                </article>
            </div>

        </section>


        <section class="container-outer white-bg">
            <section class="container about  pad-top pad-bottom">

                <div class="row">
                    <article class="col-md-12 text-left">
                    </article>
                </div>

                <div class="row">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h6 class="promo-text font2semibold black">About Me</h6>
                        <h3 class="main-heading  font2light black">I am a 26 years old freelance web developer /
                            designer based in New York City. I build beautiful and functional websites for small
                            businesses and brands. I am completely self-taught, specializing in brand design,
                            development &amp strategy, website &amp mobile applications, user experience, email design
                            &amp marketing, and print design. </p>
                            <br/><br/>
                            <div class="signature">
                                {{ Html::image('images/signed.png', 'My Signature') }}
                            </div>
                    </article>
                </div>

            </section>
        </section>


        <section class="container-outer color-bg">
            <section class="testimonials  pad-top pad-bottom">

                <div class="container">
                    <div class="row">
                        <article class="col-md-12">
                            <section class="carousel-outer-wrap add-top-quarter">
                                <!-- Set up your HTML -->
                                <div class="owl-carousel owl-nav-sticky-extra-wide testimonial-carousel ">

                                    <div class="testimonial-block text-center">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 white">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="testimonial-block ">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 white">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="testimonial-block ">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 white">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </article>
                    </div>
                </div>


            </section>
        </section>

    </section>

@endsection
@section('scripts')


    {{--<script src="https://squareguru.squarespace.com/content-protection.js"></script><link rel="stylesheet" type="text/css" href="theme.css">--}}
    {{--<script src="https://squareguru.squarespace.com/drag.js"></script>--}}

@endsection
