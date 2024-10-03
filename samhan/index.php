<!-- <!DOCTYPE html>
<html>
<head>
    <title>Leaflet Map</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #mapid { height: 100vh; }
    </style>
</head>
<body>
    <div id="mapid"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Your JavaScript code will go here
    </script>
</body>
</html> -->
<!-- <script>
    // Initialize the map and set its view to the chosen geographical coordinates and zoom level
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    // Add a tile layer to add to our map, in this case, it's a Mapbox Streets tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    // Create a custom icon
    var customIcon = L.icon({
        iconUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxPW3J81xkOZk83mumrIJ9gKr5lqceL-It_g&sour/custom-icon.png',
        iconSize: [38, 95], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    // Add a marker at the specified coordinates with the custom icon
    var marker = L.marker([51.5, -0.09], {icon: customIcon}).addTo(mymap);

    // Add a popup to the marker
    marker.bindPopup("<b>Hello world!</b><br>I am a custom icon.").openPopup();
</script> -->



<!DOCTYPE html>
<html>
<head>
    <title>Leaflet Map with Route</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <style>
        #mapid { height: 100vh; }
    </style>
</head>
<body>
    <div id="mapid"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <script>
        // Your JavaScript code will go here
    </script>
</body>
</html>


<script>
    // Initialize the map and set its view to the chosen geographical coordinates and zoom level
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    // Add a tile layer to add to our map, in this case, it's a Mapbox Streets tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    var customIcon = L.icon({
        iconUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxPW3J81xkOZk83mumrIJ9gKr5lqceL-It_g&sour/custom-icon.png',
        iconSize: [38, 95], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    var startIcon = L.icon({
        iconUrl: 'icon/start.png',
        iconSize: [70, 70], // size of the icon
        iconAnchor: [60, 70], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -56] // point from which the popup should open relative to the iconAnchor
    });

    var endIcon = L.icon({
        iconUrl: 'https://png.pngtree.com/png-clipart/20230619/original/pngtree-red-location-icon-vector-design-png-image_9190459.png',
        iconSize: [95, 95], // size of the icon
        iconAnchor: [87, 60], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    // var marker = L.marker([-6.573207523634432, 110.66916336523278], {icon: customIcon}).addTo(mymap);
    // Set a route using Leaflet Routing Machine
    // L.Routing.control({
    //     waypoints: [
    //         L.latLng(-6.573207523634432, 110.66916336523278),
    //         L.latLng(-6.595898628506254, 110.66601166137795)
    //     ],
    //     createMarker: function(i, waypoint, n) {
    //         // Choose the icon based on the waypoint index
    //         var icon = (i === 0) ? startIcon : endIcon;
    //         return L.marker(waypoint.latLng, {
    //             icon: icon
    //         });
    //     },
        
    //     routeWhileDragging: true
    // }).addTo(mymap);


     // Function to initialize the route with the start point at the user's current location
     function initializeRoute(startLatLng) {
        // Set a route using Leaflet Routing Machine with custom icons for waypoints
        L.Routing.control({
            waypoints: [
                L.latLng(startLatLng),
                L.latLng(-6.591309887542925, 110.67075145276088)
            ],
            createMarker: function(i, waypoint, n) {
                // Choose the icon based on the waypoint index
                var icon = (i === 0) ? startIcon : endIcon;
                return L.marker(waypoint.latLng, {
                    icon: icon
                });
            },
            routeWhileDragging: true
        }).addTo(mymap);
    }

    // Get the user's current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var startLatLng = [position.coords.latitude, position.coords.longitude];
            mymap.setView(startLatLng, 13);  // Center the map on the user's current location
            initializeRoute(startLatLng);
        }, function(error) {
            console.error("Error getting location: ", error);
            // Fallback to a default location if geolocation fails
            var defaultLatLng = [51.505, -0.09];
            initializeRoute(defaultLatLng);
        });
    } else {
        // Geolocation is not supported by this browser
        console.error("Geolocation is not supported by this browser.");
        var defaultLatLng = [51.505, -0.09];
        initializeRoute(defaultLatLng);
    }
</script>
