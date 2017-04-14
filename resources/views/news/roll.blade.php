@extends('main') @section('title', ' | Genius Blog') @section('stylesheets') {{-- STYLESHEETS --}} {{ Html::style('/css/owl.carousel.css') }} {{ Html::style('/css/news.css') }}
<style media="screen">
.post-article {
    margin: 20px 0;
}

.post-meta {
    margin-top: 10px;
}
code,
pre {
    display: none;
}
</style>
@endsection @section('content')
<section class="mastwrap">
    <section class="container about  pad-top pad-bottom">
        <div class="row">
            <article class="col-md-5 text-left inner-pad">
                <h6 class="super-text font2bold black">News</h6>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left ">
                <h3 class="main-heading font2light white">providing a unique online meeting place to keep up to date on tech news, share knowledge and experiences with peers, improve skills with training and educational resources, and, of course, exchange tools, tips and advice.</h3>
            </article>
        </div>
    </section>
    <section class="container-outer silver-bg">
        <section class="container about pad-top pad-bottom">
            @foreach ($posts as $post )
            <!-- Normal Demo-->
            <!-- Post-->
            <div class="col-md-4 post">
                <a href="{{ url('news/' . $post->slug) }}">
                    <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumb">
                            <div class="date">
                                <div class="day">{{ date('j', strtotime($post->created_at)) }}</div>
                                <div class="month">{{ date('M', strtotime($post->created_at)) }}</div>
                            </div><img src="{{ asset('/storage/uploads/posts/' . $post->feat_image ) }}" />
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                            <a href="#song"><div class="category">{{ $post->category->name }}</div></a>
                            <h3 class="title"><a href="{{ url('news/' . $post->slug) }}">{{ $post->title }}</a></h3>
                            <p class="description">{{ substr($post->excerpt, 0, 120) }} <strong class="animated infinite flash"><br />{{ strlen($post->excerpt) > 120 ? "... read more" : "" }}</strong></p>
                            <div class="post-meta"><span class="timestamp"><i class="fa fa-calendar-plus-o"></i> {{ $post->created_at->diffForHumans() }}</span><span class="comments"><i class="fa fa-comments"></i><a rel="nofollow" rel="noreferrer"href="#"> 39 comments</a></span></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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
@section('scripts')
    <script "text/javascript">
        $(window).load(function() {
            $('.post-module').hover(function() {
                $(this).find('.description').stop().animate({
                    height: "toggle",
                    opacity: "toggle"
                }, 300);
            });
        });
    </script>
@endsection
