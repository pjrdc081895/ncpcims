     <!-- Gmaps -->

     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYUwfwnJe-afGpUNbu5DC_IvHor7RvfWM&callback=initMap"
  type="text/javascript"></script>

  <script type="text/javascript">
  function initMap() {
          // Styles a map in night mode.
          var myLatLng = {lat: 13.620960, lng: 123.204803};
          
          var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15,
            styles: [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 12
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
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
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#282828"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#303030"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#3c3c3c"
                    },
                    {
                        "weight": 1
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#1b1b1b"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#1b1b1b"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#2D333C"
                    }
                ]
            }
        ]
          });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: "img/marker.png",
          title: 'Naga City Public Cemetery'
        });
        }

 
    </script>

    <script type = "text/javascript">
$(document).read(path: string, onError?: function)dy(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
    e.preventDefault();
    var param = $(this).attr("href").replace("#","");
    var concept = $(this).text();
    $('.search-panel span#searsch_concept').text(concept);
    $('.input-group #search_param').val(param);
  });
});
$(document).ready(function() {
        $('#datatable').dataTable();
        
         $("[data-toggle=tooltip]").tooltip();
        
    } );


 </script>
 <script type="text/javascript">
     $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
 </script>
  <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    
        
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script src="js/Dashboardjs.js"></script>
    <script src="/assets/js/custom_listeners.js"></script>