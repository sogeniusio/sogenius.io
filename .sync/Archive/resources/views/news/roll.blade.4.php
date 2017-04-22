@extends('main')
@section('title', ' | Genius Blog')

@section('stylesheets')
    {{-- STYLESHEETS --}}

    {{ Html::style('css/owl.carousel.css') }}

@endsection

@section('content')
    <section class="mastwrap">


        <section class="container about  pad-top pad-bottom">

            <div class="row">
                <article class="col-md-5 text-left  inner-pad">
                    <h6 class="super-text  font2bold black">News, Journals and Posts</h6>
                </article>
                <article class="col-md-5 col-md-offset-2 text-left ">
                    <h3 class="main-heading  font2light white">Recent happenings and updates around us</h3>
                </article>
            </div>

        </section>

        <section class="container-outer silver-bg">
            <section class="container about  pad-top pad-bottom">

                <div class="row">
                    <article class="col-md-12 text-left">
                    </article>
                </div>

                @foreach ($posts as $post )
                    <div class="row">
                        <article class="col-md-8 col-md-offset-2 text-left ">
                            <h6 class="promo-text font2semibold black">{{ date('M j, Y', strtotime( $post->created_at )) }}</h6>
                            <h3 class="main-heading font2light black">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam. </h3> <br/>
                            <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
                        </article>
                    </div>
                @endforeach


                <div class="row add-top">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h6 class="promo-text font2semibold black">22 Sep 2016</h6>
                        <h3 class="main-heading  font2light black">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam. </h3> <br/>
                        <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
                    </article>
                </div>
                <div class="row add-top">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h6 class="promo-text font2semibold black">22 Sep 2016</h6>
                        <h3 class="main-heading  font2light black">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam. </h3> <br/>
                        <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
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
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
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
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
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
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
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
