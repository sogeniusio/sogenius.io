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
              <h6 class="super-text font2bold black">{{ $post->title }}<br/></h6>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left ">
              <h3 class="main-heading font2light white">{{ $post->excerpt }}</h3>
            </article>
      </div>

    </section>








    <section class="container-outer pad-top pad-bottom silver-bg">

    <section class="container news-post ">

      <div class="row">
            <article class="col-md-9 text-left">

              <div class="news-post inner-pad">
                <img class="img-responsive" src="{{ asset('/images/posts/ftimgs/' . $post->feat_image ) }}" alt="Post Featured Image">
                    <p class="add-top-half">{{!! $post->body }!!}</p>
                    <br/>
                    <a href="{{ url('news') }}" class="btn btn-oscar btn-oscar-dark">view all posts</a>
              </div>

            </article>
            <article class="col-md-3 text-left">
                  <h4 class="sub-heading  white black-bg font4bold">News</h4>
                  <p class="dark add-bottom-quarter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at lacinia est, sed gravida purus. Donec pretium euismod enim. In id magna id lacus tincidunt blandit non quis ante. Maecenas nec turpis at odio volutpat ullamcorper.</p>
                  <h4 class="sub-heading  white black-bg ffont4bold add-top-half">Latest Posts</h4>
                  <ul class="content-list">
                    @foreach ($posts_by_date as $date => $posts)
                      <li><a href="{{ url('news/' . $post->slug) }}">{{ $post->title }}</li></a>
                    @endforeach
                  <h4 class="sub-heading  white black-bg ffont4bold add-top-half">Archives</h4>
                  <ul class="content-list">

                    {{-- <li><span>2015 February</span></li>
                    <li><span>2015 January</span></li>
                    <li><span>2014 December</span></li> --}}
                  </ul>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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