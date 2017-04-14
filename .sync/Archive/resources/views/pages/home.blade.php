
@extends('main')
@section('stylesheets')

    {{-- ADD ALL STYLESHEETS --}}

    <style media="screen">
      .typed-cursor{
        opacity: 1;
        -webkit-animation: blink 0.7s infinite;
        -moz-animation: blink 0.7s infinite;
        animation: blink 0.7s infinite;
      }
      @keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-webkit-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
      @-moz-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
      }
    </style>

@endsection
@section('title', '| Digital Brand Design')
@section('works-filter')
  <article class="col-md-5 no-pad">
      <!--works filter panel :starts -->
        <div class="works-filter-wrap">
            <ul class="works-filter  text-right clearfix font2">
                <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li><li><a href="#" data-filter=".branding"><span>Branding</span></a></li>
                <li><a href="#" data-filter=".graphics"><span>Graphics</span></a></li>
                <li><a href="#" data-filter=".logos"><span>Logos</span></a></li>
                <li><a href="#" data-filter=".ui"><span>UI</span></a></li>
                <li><a href="#" data-filter=".web"><span>Web</span></a></li>
            </ul>
      </div>
    <!-- works filter panel :ends -->
  </article>
@endsection
@section('content')

  <section class="mastwrap add-bottom">

    <section class="container about pad-top-half pad-bottom-half">

      <div class="row">
            <article class="col-md-5 text-left inner-pad">
              <h6 class="super-text font2bold black">Hi! I'm Hos <span class="pronounciation"><small>pronounced / HAHZ /</small></span></h6>
              <p class="font2light black avail-para">I am <span class="availability">available</span><span class="services"></span></p>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left light-text">
              <h4 class="main-heading font2light white">web design company based in New York City.</h4>
            </article>
      </div>

    </section>


  <section class="container intro-01 ">

       <section id="works-container" class="works-container  works-masonry-container clearfix works-thumbnails-view">


            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom ui web">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/01.gif"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/01.gif">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Anonymous</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->



            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info logos ui">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/02.jpg"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Capdevilla</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->


            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom branding graphics">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/03.jpg"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/03.jpg">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Oregon</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->

        <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info web graphics">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/04.jpg"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Benterivo</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->



            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom branding">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/05.gif"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/05.jpg">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Laura's Inn</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->




            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info logos">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/07.jpg"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Green Fox</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->



            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom logos ui">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/08.jpg"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/08.jpg">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Nexxa</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->



            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info web">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/06.jpg"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Novomoto</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->




             <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom logos graphics">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/09.jpg"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/09.jpg">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">100Degree</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->



            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info branding">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/10.gif"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">R.T.W</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->


            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half info branding">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/11.jpg"/>
                    <a  href="project.html">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">CenterPort</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->


            <!-- start : works-item -->
            <div class="works-item  ImageWrapper works-item-one-half zoom branding">
                    <img data-no-retina alt="" title="" class="img-responsive" src="images/works/13.jpg"/>
                    <a  class="venobox" data-gall="portfolio-gallery" href="images/works/12.jpg">
                        <div class="works-item-inner ImageOverlayCl">
                          <p class="valign text-center"><span class="white font1">Classic 32</span></p>
                        </div>
                    </a>
            </div>
            <!-- end : works-item -->

          </section>
          <!-- end : works-container -->

  </section>


  </section>


@endsection

@section('scripts')

  <script src="js/libs/typed.js"></script>
  <script>
      $(function(){
          $(".services").typed({
              strings: [
                " for projects.", 
                " to grow your ^1000 social media accounts.",
                ],
              typeSpeed: 0
          });
      });
  </script>

@endsection
