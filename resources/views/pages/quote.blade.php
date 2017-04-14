@extends('main')
@section('stylesheets')
    {{-- STYLESHEETS --}}
    <style media="screen">
      .main-heading a {
        color: #fff !important;
      }

      @media (max-width: 992px) {
    
    .main-heading a {
        color: #b40404 !important;
    }
  }

      </style>


@endsection
@section('title', '| Quote Request')
@section('content')
    <section class="mastwrap">

      @if(Session::has('message'))
<div class="alert-box success">
    {{ Session::get('message') }}
</div>


@endif


        {{-- Heading Area   --}}
        <section class="container about pad-top-half pad-bottom-half">

            <div class="row">

                <article class="col-md-5 text-left  inner-pad">
                    <h6 class="super-text font2bold black">Quote Request</h6>
                </article>

                <article class="col-md-5 col-md-offset-2 text-left ">
                    <h3 class="main-heading font2light white"><a href="mailto:hi@sogenius.io?subject=Hi">hi@sogenius.io</a> / <a href="tel:+13479728827">347-972-8827</a> <br/>New York, NY</h3>
                </article>

            </div>

        </section>
        {{-- END Heading Area   --}}


        <section class="container silver-bg ">

          <div class="row pad">

              <article class="col-md-12 text-left introduction">
                    <h3 class="bx1-margin ">Standard quote request form</h3>

                    <p class="bx1-margin">Request a website design quote by filling out the form below and I will be in touch with you.
                        This form is detailed and designed for you to share as much information as possible about your Web vision.</p>

              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4 class="header">Contact information</h4>
              </article>
              <form name="quoteform" id="quoteform" action="{{ url('quote') }}" method="POST">

                    {{ csrf_field() }}

              <article class="col-md-12 text-left">
                <div class="row">
                  <div class="col-lg-3 bx1-margin">
                    <label for="salutation">Salutations: </label>
                    <select id="salutation" name="salutation[]">
                      <option value="null" selected label="None">None</option>
                      <option value="Dr">Dr.</option>
                      <option value="Mr">Mr.</option>
                      <option value="Mrs">Mrs.</option>
                      <option value="Ms">Ms.</option>
                      <option value="Sir">Sir</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      {{ Form::label('firstname', "First Name:") }}
                      {{ Form::text('firstname', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      {{ Form::label('lastname', "Last Name:") }}
                      {{ Form::text('lastname', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      {{ Form::label('suffix', "Suffix:") }}
                      {{ Form::text('suffix', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10')) }}
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-6 text-left bx1-margin">
                {{ Form::label('email', "Email:") }}
                {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}
              </article>

              <article class="col-md-6 text-left bx1-margin">
                {{ Form::label('phone', "Phone Number:") }}
                {{ Form::text('phone', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}
              </article>

              <article class="col-md-6 text-left bx1-margin">
                {{ Form::label('date', "Desired completion date:") }}
                {{ Form::selectMonth('month') }}
                {{ Form::selectYear('year', 2017, 2018, 2019, ['class' => 'date-year', 'required' => '']) }}
                <p class="input-caption">Select a reasonable amount of time.</p>
              </article>

              <article class="col-md-6 text-left bx1-margin">
                <label for="budgetrange">Budget range</label>
                <input type="text" name="budgetrange" class="form-control input-with-caption" id="budgetrange">
                <p class="input-caption">What is your budget for this project?</p>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4 class="header">Features and functions</h4>
              </article>

              <article class="col-md-12 text-left services bx1-margin">
                {{ Form::label('services', "Please check all the functionality you would like to see in your new website:") }}
                <ul>
                @foreach ($services as $servicesid => $service)
                  <li>
                    <input id="srv-{{$servicesid}}" value="{{$service}}" name="service[]" type="checkbox" class="custom-control-input form-check-input">
                    <span class="custom-control-description">{{$service}}</span>



                  </li>
                @endforeach
                </ul>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4 class="header">Design information</h4>
              </article>

              <article class="col-md-12 text-left bx1-margin design-info">
                {{ Form::label('designitems', "What are your design needs?") }}
                <ul>
                @foreach ($designitems as $designitemid => $designitem)
                  <li>
                    <input name="designitem[]" id="di-{{$designitemid}}" value="{{$designitem}}" type="checkbox" class="custom-control-input form-check-input">
                    <span class="custom-control-description">{{$designitem}}</span>
                  </li>
                @endforeach
                </ul>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                {{ Form::label('competitors', "List your competitors:") }}
                {{ Form::textarea('competitors', null, ['class' => 'form-control input-with-caption', 'required' => '',]) }}
                <p class="input-caption">Please include a list of your competition. Be very specific and list your direct competitors.</p>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4 class="header">Current website information</h4>
              </article>

              <article class="col-md-6 text-left bx1-margin registrar">
                {{ Form::label('registrar', "What is your domain name registerred with?") }}
                {{ Form::text('registrar', null, array('class' => 'form-control input-with-caption', 'maxlength' => '100')) }}
                <p class="input-caption">A domain name is "xyz.com". If you don't have a domain name, you can register one with us for $14.99/year.</p>

              </article>

              <article class="col-md-6 text-left bx1-margin hosting">
                {{ Form::label('hosting', "What is your domain name registerred with?") }}
                {{ Form::text('hosting', null, array('class' => 'form-control input-with-caption', 'maxlength' => '100')) }}
                <p class="input-caption">Hosting is where you files and/or database of your website are stored. You can host with us for $120.00/year or host elsewhere list Hostek, Hostgator, WP Engine, GoDaddy, etc.</p>
              </article>

              <article class="col-md-12 text-left bx1-margin needs">
                {{ Form::label('siteneeds', "What is it about your current website that is not meeting your needs?") }}
                {{ Form::textarea('siteneeds', null, ['class' => 'form-control']) }}
                <p class="input-caption">Is it the colors? Inability to update content on your own? Ready for a new design? Lack of Search Engine Visibility? Please also list your current Website address.</p>
              </article>

              <article class="col-md-12 text-left bx1-margin updates">
                {{ Form::label('updates', "Please describe any updates or features you are looking for:") }}
                {{ Form::textarea('updates', null, ['class' => 'form-control']) }}
                <p class="input-caption">Blogging / Articles, E-Commerce, Custom Web Form, etc.</p>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4 class="header">New website information</h4>
              </article>

              <article class="col-md-12 text-left bx1-margin cms-type">
                {{ Form::label('cms', "Which Content Management System (CMS) are you looking to work with?") }}
                <ul>
                @foreach ($cmses as $cmsid => $cms)
                  <li>
                    <input type="radio" class="form-check-input" name="cms[]" id="cmsid-{{$cmsid}}" value="{{$cms}}">
                    <span class="custom-control-description">{{$cms}}</span>
                  </li>
                @endforeach
                </ul>
                {{ Form::label('othercms', "If other is selected above, specify which CMS you want to work with:") }}
                {{ Form::text('othercms', null, array('class' => 'form-control input-with-caption', 'maxlength' => '100')) }}
                <p class="input-caption">Joomla, etc...</p>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                {{ Form::label('audience', "Please tell me about your Website and intended audience:") }}
                {{ Form::text('audience', null, array('class' => 'form-control input-with-caption', 'maxlength' => '100')) }}
                <p class="input-caption">Is this a business or non-profit website? Are you selling a product or service? Who is your target market?</p>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <h4>If you have a lot of data / files to share, please share on Dropbox.com. Invite hos@sogenius.io to your shared folder.</h4>
              </article>

              <article class="col-md-12 text-left bx1-margin">
                <div class="btn-wrap text-center bx1-margin">
                  {{ Form::button('Submit Form', array('class' => 'btn btn-oscar btn-oscar-dark btn-block', 'id' => 'submit', 'name' => 'submit', 'type' => 'submit')) }}

                </div>
              </article>
              {!! Form::close() !!}


          </div>


        </section>





        <div class="container-fluid">
            <div class="row">
                <article class="col-md-12 map-wrap" style="padding: 0;">
                    <div class="overlay" onClick="style.pointerEvents='none'"></div>
                    <div id="map" class="fullheight"></div>
                </article>
            </div>
        </div>


    </section>

@endsection
@section('scripts')

    {{-- <script src="js/libs/common.js"></script> --}}
    <script src="elements/js/elements.js"></script>
    <script src="js/custom/form-validation.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.6700, -73.9400), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'New York City!'
            });
        }
    </script>

    <!-- Show Pop up Window if there is message called back -->
    <?php
    if (session('message')) {
        echo '<script>
            document.getElementById("popup_message").click();
        </script>';
    }
    ?>



@endsection
