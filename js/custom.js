$(function () {

    function initMap() {

        var location = new google.maps.LatLng(-6.861935, 109.164416);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            scrollwheel: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = 'marker.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        var contentString = '<div class="info-window">' +
        '<h3>Info Window Content</h3>' +
        '<div class="info-content">' +
        '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>' +
        '</div>' +
        '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });

        var styles = [
        {
            "stylers": [
            {
                "hue": "#2c3e50"
            },
            {
                "saturation": 250
            }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
            {
                "lightness": 50
            },
            {
                "visibility": "simplified"
            }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        }
        ];

        map.set('styles', styles);


    }

    google.maps.event.addDomListener(window, 'load', initMap);
});