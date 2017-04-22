@extends('main')
@section('stylesheets')

    {{-- ADD ALL STYLESHEETS --}}

    <style media="screen">

        .typed-cursor {
            opacity: 1;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>

@endsection
@section('title', '| Digital Brand Design')
@if (count($projects) > 0)

@else
  @section('works-filter')
      <article class="col-md-6 no-pad">
          <!--works filter panel :starts -->
          <div class="works-filter-wrap">
              <ul class="works-filter  text-right clearfix font2">
                  <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li>
                  <li><a href="#" data-filter=".branding"><span>Branding</span></a></li>
                  <li><a href="#" data-filter=".graphics"><span>Graphics</span></a></li>
                  <li><a href="#" data-filter=".logos"><span>Logos</span></a></li>
                  <li><a href="#" data-filter=".ui"><span>UI</span></a></li>
                  <li><a href="#" data-filter=".web"><span>Web</span></a></li>
              </ul>
          </div>
          <!-- works filter panel :ends -->
      </article>
  @endsection

@endif
@section('content')

    <section class="mastwrap add-bottom">

        <section class="container about pad-top-half pad-bottom-half">

            <div class="row">
                <article class="col-md-6 text-left inner-pad">
                    <h6 class="super-text font2bold black animated fadeInDown">Hi! I'm Hos <span class="pronounciation"><small>pronounced / HAHZ /</small></span>
                    </h6>
                    <p class="font2light black avail-para">I am <span class="availability">available</span><span
                                class="services"></span></p>
                </article>
                <article class="col-md-4 col-md-offset-1 text-left light-text">
                    <h4 class="main-heading font2light white">Web Developer / Brand Consultant</h4>
                </article>
            </div>

        </section>


        <section class="container intro-01 ">

            <section id="works-container" class="works-container works-masonry-container clearfix works-thumbnails-view">

                @if (count($projects) > 0 )

                  @foreach ($projects as $project)
                    <!-- start : works-item -->
                    @if ( $project->type_id == 1 )
                      <div class="works-item ImageWrapper works-item-one-third @foreach($project->identities as $identity) {{strtolower($identity->name)}}@endforeach @if ( $project->type_id == 1 )zoom @else info @endif">
                          <img data-no-retina alt="" title="" class="img-responsive" src="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}"/>
                          <a class="venobox" data-gall="portfolio-gallery" href="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}">
                              <div class="works-item-inner ImageOverlayCl">
                                  <p class="valign text-center"><span class="white font1">{{ $project->title }}</span></p>
                                  {{-- <p class="text-center">
                                    {{ $project->overview}}
                                  </p> --}}
                              </div>
                          </a>
                      </div>
                    @else
                      <div class="works-item ImageWrapper works-item-one-third @foreach($project->identities as $identity) {{strtolower($identity->name)}}@endforeach @if ( $project->type_id == 1 )zoom @else info @endif">
                          <img data-no-retina alt="" title="" class="img-responsive" src="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}"/>
                          <a href="{{ url('works/' . $project->slug) }}">
                              <div class="works-item-inner ImageOverlayCl">
                                  <p class="valign text-center"><span class="white font1">{{ $project->title }}</span></p>
                                  {{-- <p class="text-center">
                                    {{ $project->overview}}
                                  </p> --}}
                              </div>
                          </a>
                      </div>
                    @endif
                    <!-- end : works-item -->

                  @endforeach
                @else
                  <div class="row">
                    <div class="col-lg-12">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div>
                @endif
            </section>
            <!-- end : works-container -->

        </section>


    </section>

@include('partials._usermeta')

@endsection

@section('scripts')

    <script src="js/libs/typed.js"></script>
    <script>
        $(function () {
            $(".services").typed({
                strings: [" for projects.", " to manage your ^1000 social media accounts."],
                typeSpeed: 0
            });
        });
    </script>

@endsection
