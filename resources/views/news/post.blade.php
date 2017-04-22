@extends('main') 
@section('title', ' | Genius Blog') 
@section('stylesheets') 
{{-- STYLESHEETS --}} 
{{ Html::style('/bower_components/ckeditor/plugins/prism/themes/prism-cb.css') }}
{{ Html::style('css/owl.carousel.css') }}
{{ Html::style('css/post.css') }}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
@endsection 
@section('content')
<section class="mastwrap">
    <div class="container-fluid">
        <div class="row">
            <section class="post-header">
           <div class="row">
              <div class="container post-description">
                <article class="col-md-6 text-left inner-pad post-title">
                    <h6 class="super-text font2bold black">{{ $post->title }}<br/></h6>
                </article>
                <article class="col-md-4 col-md-offset-2 text-left post-excerpt">
                    <h3 class="main-heading font2light white">{{ $post->excerpt }}</h3>
                </article>
            </div>
           </div>
            </section>

        </div>
        <div class="row">
          <div class="container-fluid no-padding">
            <div id="post-feat-image" class="row">
              <div class="col-md-12">
                  <div class="post-feat-image">
                    <img src="{{ asset('/storage/uploads/posts/' . $post->feat_image ) }}" class="img-responsive" />
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <section class="container-outer pad-bottom silver-bg">
                <section class="container">
                    <div class="row">
                        {{-- Post --}}
                        <article class="col-md-12 post-wrap">
                            <div class="news-post inner-pad">
                                <div class="row">
                                    <div class="container-fluid" data-aos="fade-up">
                                        <p class="add-top-half">{!! $post->body !!}</p>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <span class="label label-default">Category</span>
                                            <a href="#">{{ $post->category->name }}</a> |
                                            <span class="label label-default">Tags</span> @php $tagstr = array(); foreach ($post->tags as $tag) { $tagstr[] = $tag->name; } $tag = implode(", ", $tagstr); echo $tag; @endphp
                                        </div>
                                        <div class="col-sm-4">
                                            @include('news.partials._socialshare')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news-author">
                                <div class="container-fluid">
                                    @include('news.partials._author-block')
                                </div>
                            </div>
                            <div class="news-comments inner-pad">
                                <div class="disqus-comments">
                                    @include('news.partials._disqus')
                                </div>
                            </div>
                        </article>
                </section>
            </section>
            <section class="container-outer color-bg">
                <section class="testimonials  pad-top pad-bottom">
                    <div class="container">
                        <div class="row">
                            <article class="col-md-12">
                                <section class="grabbable carousel-outer-wrap add-top-quarter">
                                    <!-- Set up your HTML -->
                                    <div class="owl-carousel owl-nav-sticky-extra-wide testimonial-carousel ">
                                        <div class="testimonial-block text-center">
                                            <div class="testimonial-info">
                                                <img alt="" title="" src="/images/testimonial/01.jpg">
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
                                                <img alt="" title="" src="/images/testimonial/01.jpg">
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
                                                <img alt="" title="" src="/images/testimonial/01.jpg">
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
            </div>
</section>
@endsection @section('scripts')
<script>
$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    $('.post-image-bg').css('top', -(scrollTop * 1) + 'px');
});
</script>
@endsection
