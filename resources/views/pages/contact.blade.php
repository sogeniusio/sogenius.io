@extends('main')
@section('stylesheets')
    {{-- STYLESHEETS --}}
    <style media="screen">
      .alert-success {
        background-color: #fff;
      }
      .request-quote {
        background-color: #fff;
        border: solid 2px #fff;
      }
      .request-quote:hover {
        background-color: #131313;
        border: solid 2px #131313;
        color: #fff !important;
      }
      .main-heading a {
        color: #fff;
      }
    </style>
    {!! Html::style('/css/parsley.css') !!}


@endsection
@section('title', '| Contact')
  @section('works-filter')
      <article class="col-md-5 no-pad text-right">
          <!--works filter panel :starts -->
          <a href="{{url('quote')}}" class="btn btn-oscar btn-oscar-light request-quote" role="button" aria-pressed="true">Request a quote</a>
          <!-- works filter panel :ends -->
      </article>
  @endsection
@section('content')



</div>
{{-- Heading Area   --}}
<section class="container about pad-top-half pad-bottom-half">

    <div class="row">

        <article class="col-md-5 text-left  inner-pad">
            <h6 class="super-text font2bold black">Say hello</h6>
        </article>

        <article class="col-md-5 col-md-offset-2 text-left ">
          <h3 class="main-heading font2light white"><a href="mailto:hi@sogenius.io?subject=Hi">hi@sogenius.io</a> / <a href="tel:+13479728827">347-972-8827</a> <br/>New York, NY</h3>
        </article>

    </div>

</section>
{{-- END Heading Area   --}}


        <section class="container pad silver-bg ">

            <div class="row">
                <article class="col-md-12 pad text-left">
                    <div class="contact-item">
                        {{-- <div class="alert alert-error error color-bg" id="fname">
                          <p class="white">Please enter your name</p>
                        </div>
                        <div class="alert alert-error error color-bg" id="fmail">
                          <p class="white">Please provide a valid email</p>
                        </div>
                        <div class="alert alert-error error color-bg" id="fmsg">
                          <p class="white">Subject should not be empty</p>
                        </div>
                         <div class="alert alert-error error color-bg" id="fmsg">
                           <p class="white">Message should not be empty</p>
                         </div> --}}

                              <div class="row">
                                <article class="col-md-12 text-left introduction">

                                      <p class="bx1-margin">Checkout our website <a href="{{url('quote')}}">quote request form</a>. Do you have a question to ask? Feel free to fill out our form below to send us an email.</p>


                              </div>

                              <form  id="contactForm" action="{{ url('contact') }}" method="POST" data-parsley-validate="">
                                {{ csrf_field() }}

                                @if(Session::has('success'))
                                    <div class="alert alert-success success color-bg">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p class="white"><strong>Thank you!</strong> {{ Session::get('message', '') }}</p>
                                    </div>
                                  @else
                                    <div class="alert alert-error error color-bg">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p class="white"><strong>Ah man!</strong> {{ Session::get('message', '') }}</p>
                                    </div>
                                @endif
                            <article class="{{ $errors->has('fullname') ? ' has-error' : '' }}">
                                <input required="" type="text" placeholder="Enter your full name" id="name" name="fullname" size="100" value="{{ old('fullname') }}"
                                       class="form-control border-form white font4light">
                            </article>
                            <div class="row">
                              <div class="col-lg-6">
                                <article class="{{ $errors->has('company') ? ' has-error' : '' }}">
                                    <input type="text" placeholder="Company" id="company" name="company" size="100" value="{{ old('company') }}"
                                           class="form-control border-form white font4light">
                                </article>
                              </div>
                              <div class="col-lg-6">
                                <article class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input required="" type="text" placeholder="Valid email address" name="email" id="email" size="30" value="{{ old('email') }}"
                                           class="form-control border-form white font4light">
                                </article>
                              </div>
                            </div>
                            <article>
                                <input type="text" placeholder="Subject" id="subject" name="subject" size="100" value="{{ old('subject') }}"
                                       class="form-control border-form white font4light">
                            </article>
                            <article>
                                <textarea required="" placeholder="Your Message" name="message" cols="40" rows="5" id="message"
                                          class="form-control border-form white font4light">{{ old('message') }}</textarea>

                            </article>
                            <article class="recaptcha">
                              <div class="contain-recaptcha">
                                {!! app('captcha')->display() !!}

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <span class="label label-danger"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                                    </span>
                                @endif

                              </div>
                            </article>
                            <article class="submit">
                              <div class="btn-wrap text-left">
                                  <button class="btn btn-oscar btn-oscar-dark" id="submit" name="submit"
                                          type="submit">Send Message
                                  </button>
                              </div>
                            </article>
                    </div>

                </article>
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

    {!! Html::script('/js/libs/parsley.min.js') !!}



@include('partials._usermeta')


@endsection
