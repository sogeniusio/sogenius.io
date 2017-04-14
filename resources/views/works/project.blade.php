@extends('main')
@section('title', ' | Works')

@section('stylesheets')
  {{-- STYLESHEETS --}}

  {{ Html::style('/css/owl.carousel.css') }}


  <style media="screen">

    .pad-bottom {
      padding-bottom: 200px;
    }

    .parallax-showcase .parallax-showcase-overlay {
      background-color: initial !important;
    }
    .parallax-showcase-01{
      background-image: url('{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}');
    }
    .parallax-showcase-02{
      background-image: url('{{ asset('/storage/uploads/projects/' . $project->feat_image2 ) }}');
    }
    .parallax-showcase-03{
      background-image: url('{{ asset('/storage/uploads/projects/' . $project->feat_image3 ) }}');
    }
  </style>


@endsection

@section('content')

<!-- MASTER CONTENT
 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <section class="mastwrap">


     <section class="container about  pad-top pad-bottom">

       <div class="row">
             <article class="col-md-5 text-left  inner-pad">
               <h6 class="super-text  font2bold black">{{ $project->title }}</h6>
             </article>
             <article class="col-md-5 col-md-offset-2 text-left ">
               <h3 class="main-heading  font2light white">{{ $project->overview }}</h3>
             </article>
       </div>

     </section>



    <section class="parallax-showcase-wrap ">

           <!-- parallax section -->
           <section class="parallax-showcase parallax-showcase-01 fullheight parallax" data-stellar-background-ratio="0.5">
             <div class="parallax-showcase-overlay fullheight">
               <div class="valign">
                   <div class="project-title text-center">
                       {{-- <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" target="_top"><h1 class="font3bold white">Caption Here</h1></a> --}}
                   </div>
               </div>
             </div>
           </section>

           <!-- parallax section -->
           <section class="parallax-showcase parallax-showcase-02 fullheight parallax" data-stellar-background-ratio="0.5">
             <div class="parallax-showcase-overlay fullheight">
               <div class="valign">
                   <div class="project-title text-center">
                       {{-- <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" target="_top"><h1 class="font3bold white">Caption Here</h1></a> --}}
                   </div>
               </div>
             </div>
           </section>

           <!-- parallax section -->
           <section class="parallax-showcase parallax-showcase-03 fullheight parallax" data-stellar-background-ratio="0.5">
             <div class="parallax-showcase-overlay fullheight">
               <div class="valign">
                   <div class="project-title text-center">
                       {{-- <a href="{{ asset('/storage/uploads/projects/' . $project->feat_image1 ) }}" target="_top"><h1 class="font3bold white">Caption Here</h1></a> --}}
                   </div>
               </div>
             </div>
           </section>

     </section>





     <section class="container-outer silver-bg">
     <section class="container about  pad-top pad-bottom">

       <div class="row">
             <article class="col-md-12 text-left">
             </article>
       </div>

        <div class="row ">
                <a href="{{$project->link}}">https://www.first-project.com/</a>

                 <article class="col-md-6">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur.</p>
                 </article>
                 <article class="col-md-6">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat.</p>
                 </article>
                 <div class="col-lg-12 text-center">
                   <a href="news.html" class="btn  btn-oscar btn-oscar-dark add-top-quarter">View Project</a>
                 </div>
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








   </section>
   <!-- end : mastwrap -->
 @endsection
