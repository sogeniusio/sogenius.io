@extends('main')
@section('stylesheets')
    {{-- STYLESHEETS --}}
    <style media="screen">
      .instagram-feed,
      .masthead .container {
        display: none;
      }

      p {
        margin: 10px 0;
      }

      .social-area {
        /*display: flex;*/
        /*flex-direction: row;*/
      }

      .confirmation {
        margin-top: 20px;
      }
      .alert-success {
        background-color: #fff;
      }

      .tm-data {
        margin-top: 20px;
        display: none;
      }

    </style>
    {{ Html::style('/bower_components/font-awesome/css/font-awesome.min.css') }}
    {!! Html::style('/css/parsley.css') !!}



@endsection
@section('title', '| Contact')
@section('content')
    <section class="mastwrap">


{{-- Heading Area   --}}
<section class="container about pad-top-half pad-bottom-half">

    <div class="row">

        <article class="col-md-5 text-left  inner-pad">
            <h6 class="super-text font2bold black">How was I?</h6>
        </article>

    </div>

</section>
{{-- END Heading Area   --}}


        <section class="container pad silver-bg ">

            <div class="row">
                <article class="col-md-12 pad text-left">
                  <p>
                    Please take a moment to provide some valuable feedback for us so that we can continue to improve the services we offer. </p>

                              {!! Form::open(['id' => 'review', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'name' => 'review', 'action' => 'ReviewController@postReview' ]) !!}

      {{--                           <form id="reviewForm" action="{{ url('review') }}" method="POST" data-parsley-validate="">
                                  {{ csrf_field() }}
 --}}
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

                                <div class="questionnaire">
                                  <article class="text-left bx1-margin">
                                    <h4 class="header">Contact Information</h4>
                                  </article>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <article>
                                        <label for="fullname">First Name</label>
                                          <input type="text" required="" value="{{ old('firstname') }}" id="firstname" name="firstname" size="100"
                                                 class="form-control border-form white font4light">
                                        <label for="fullname">Last Name</label>
                                          <input type="text" required="" value="{{ old('lastname') }}" id="lastname" name="lastname" size="100"
                                                 class="form-control border-form white font4light">
                                      </article>
                                    </div>
                                  </div>


                            <div class="row">
                              <div class="col-lg-6">
                                <article>
                                  <label for="company">Company</label>
                                    <input type="text" required="" value="{{ old('company') }}" id="company" name="company" size="100"
                                           class="form-control border-form white font4light">
                                </article>
                              </div>
                              <div class="col-lg-6">
                                <article>
                                  <label for="email">Email</label>
                                    <input type="text" required="" value="{{ old('email') }}" name="email" id="email" size="30"
                                           class="form-control border-form white font4light">
                                </article>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <h4>Social media</h4>
                                <p>Add your social media accounts below:</p>

                              </div>
                              <div class="social-area">
                                <div class="col-lg-4">
                                  <i class="fa fa-facebook-square fa-2x"></i><input value="{{ old('facebook') }}" type="text" placeholder="http://facebook.com/your-url" id="facebook" name="facebook" size="100"
                                         class="form-control border-form white font4light">
                                </div>
                                <div class="col-lg-4">
                                  <i class="fa fa-instagram fa-2x"></i><input value="{{ old('instagram') }}" type="text" placeholder="@instagram" id="instagram" name="instagram" size="100"
                                         class="form-control border-form white font4light">
                                </div>
                                <div class="col-lg-4">
                                  <i class="fa fa-twitter-square fa-2x"></i><input value="{{ old('twitter') }}" type="text" placeholder="@twitter" id="twitter" name="twitter" size="100"
                                         class="form-control border-form white font4light">
                                </div>
                              </div>


                            </div>
                          </div>
                            <div class="questionnaire">
                              <article class="text-left bx1-margin">
                                <h4 class="header">Questionnaire</h4>
                              </article>
                              <article>
                                  <label for="q1">Do you feel like we listened and advised you during your initial consultation in a clear and friendly manner?</label>
                                  <input type="text" id="q1" name="q1" size="100"  value="{{ old('q1') }}"
                                         class="form-control border-form white font4light">
                              </article>
                              <article>
                                  <label for="q2">Did we respond promptly to your calls / emails?</label>
                                  <input type="text" id="q2" name="q2" size="100"  value="{{ old('q2') }}"
                                         class="form-control border-form white font4light">
                              </article>
                              <article>
                                  <label for="q3">Do you feel we understood your comments and effectively produced results?</label>
                                  <input type="text" id="q3" name="q3" size="100"  value="{{ old('q3') }}"
                                         class="form-control border-form white font4light">
                              </article>
                              <article>
                                  <label for="q4">Would your recommend this service to a colleague or friend?</label>
                                  <input type="text" id="q4" name="q4" size="100"  value="{{ old('q4') }}"
                                         class="form-control border-form white font4light">
                              </article>
                              <article>
                                <label for="comments">Overall Comments: <span class="label label-danger">required</span></label>
                                  <textarea required="" name="comments" cols="40" rows="5" id="comments"  value="{{ old('comments') }}"
                                            class="form-control border-form white font4light"></textarea>
                              </article>
                              <article class="confirmation">
                                  <p>Do you agree?</p>

                                <div class="form-group">
                                    {{-- {{ Form::checkbox('agree', 1, null) }} --}}
                                    {{ Form::checkbox('agree', 'By clicking the "Yes" checkbox you agree to allow us to publish your survey on our website and social media channels using your first name and last initial. ') }}
                                    {{-- <input required="" type="checkbox" name="agree" id="agree" value="{{old('option')}}"> --}}
                                    {{-- {{ Form::label('agree', 1, 'By clicking the "Yes" checkbox you agree to allow us to publish your survey on our website and social media channels using your first name and last initial. ')}} --}}
                                    <span class="label label-danger">required</span>
                                </div>
                              </article>
                            </div>
                            <article class="recaptcha">
                              <div class="contain-recaptcha">
                                {!! app('captcha')->display(); !!}

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <span class="label label-danger"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                                    </span>
                                @endif
                              </div>
                            </article>

                            <article class="submit">
                              <div class="btn-wrap text-left">
                                  <button class="btn  btn-oscar btn-oscar-dark" id="submit" name="submit"
                                          type="submit">Submit review
                                  </button>
                              </div>
                            </article>

                            <article class="tm-data">
                              <div class="text-left">
                                  <fieldset disabled>
                                    <div class="form-group">
                                      <input type="text" id="tm_id" class="form-control" placeholder="{{ $testimony->auth_token }}">
                                    </div>
                                  </fieldset>                                
                              </div>
                            </article>
                    </div>
{{--                     </form>
 --}}                
                {!! Form::close() !!}
              </article>
            </div>

        </section>

    </section>



@endsection
@section('scripts')

      {{-- <script src="js/libs/common.js"></script> --}}
      <script src="elements/js/elements.js"></script>
      <script src="js/custom/form-validation.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
          var logID = 'log',
            log = $('<div id="'+logID+'"></div>');
          $('body').append(log);
            $('[type*="radio"]').change(function () {
              var me = $(this);
              log.html(me.attr('value'));
            });
      </script>
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
