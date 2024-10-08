@extends('site.layout.master')
@section('title','Contact Us')
@section('content') 
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container-fluid  p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                
                <div class="contact-form-inner">
                    @include("admin.include.msg")
                    <h2>TELL US YOUR PROJECT</h2>
                    <form method="POST" action="{{url('contact/request')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="text" placeholder="First name*" name="firstname">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text"  placeholder="Last name*" name="lastname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="email"  placeholder="Email*" name="email">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" placeholder="Subject*" name="subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea placeholder="Message *" name="message"></textarea>
                            </div>
                        </div>
                        <div class="contact-submit-btn">
                            <button class="submit-btn" type="submit">Send Email</button>
                             <p class="form-messege"></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 plr-0">
                <div class="contact-address-area">
                    <h2>CONTACT US</h2>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                        notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                    <ul>
                        <li>
                        <i class="fa fa-fax">&nbsp;</i> Address : {{$SiteSetting->address}}</li>
                        <li>
                            <i class="fa fa-phone">&nbsp;</i> {{$SiteSetting->email}}</li>
                        <li>
                            <i class="fa fa-envelope-o"></i>&nbsp; {{$SiteSetting->mobile_number}}</li>
                    </ul>
                    <h3>
                        Opening Time
                    </h3>
                    <p class="m-0">{{$SiteSetting->opening_time}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-map">
        <!-- Google Map Start -->
        <div class="container-fluid p-0">
            <div id="map"></div>
        </div>
        <!-- Google Map End -->
    </div>
</div>
<!-- content-wraper end -->

            
@endsection
@section('js')
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#314453"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "lightness": "-12"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#EB3E32"
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
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
@endsection