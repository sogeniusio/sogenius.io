@extends('main')
@section('title', ' | Genius Blog')

@section('stylesheets')
    {{-- STYLESHEETS --}}

    {{ Html::style('/css/owl.carousel.css') }}

    <style>
      #no-projects {
        min-height: 400px;
        background: #fff;
        border: 2px solid yellow;
      }
    </style>

@endsection

@section('content')
  <!-- MASTER CONTENT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section class="mastwrap add-bottom">




    <section class="container about pad-top-half pad-bottom-half">

      <div class="row">
            <article class="col-md-5 text-left  inner-pad">
              <h6 class="super-text  font2bold black">Selected <br /> Work.</h6>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left ">
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
      </div>

    </section>


<section class="container intro-01 ">




       <section id="works-container" class="works-container works-masonry-container clearfix works-thumbnails-view">

        @if ( !empty($projects))
         <section id="no-projects" class="clearfix">
              <div class="text">
  <p class="black">No projects to show</p>              

  </div>
          </section>
        @else
     

          @foreach ($projects as $project)
           <!-- start : works-item -->
           @if ( $project->type_id == 1 )
             <div class="works-item ImageWrapper works-item-one-third @foreach($project->identities as $identity){{ strtolower($identity->name) }}@endforeach @if ( $project->type_id == 1 )zoom @else info @endif">
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
             <div class="works-item ImageWrapper works-item-one-third @foreach($project->identities as $identity){{ strtolower($identity->name) }}@endforeach @if ( $project->type_id == 1 )zoom @else info @endif">
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
        @endif








          </section>
          <!-- end : works-container -->

</section>


  </section>
  <!-- end : mastwrap -->
@endsection
