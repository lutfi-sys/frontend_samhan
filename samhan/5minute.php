<!DOCTYPE html>
<html>
<head>
    <title>Leaflet Map with Custom Icons on Route</title>
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
    // Initialize the map and set its view to a default location
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    // Add a tile layer to our map
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    // Create custom icons with transparent background
    var startIcon = L.icon({
        iconUrl: 'path/to/start-icon.png',  // Replace with the path to your transparent PNG icon
        iconSize: [38, 95], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var endIcon = L.icon({
        iconUrl: 'path/to/end-icon.png',  // Replace with the path to your transparent PNG icon
        iconSize: [38, 95], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var routingControl;

    // Function to initialize the route with the start point at the given coordinates
    function initializeRoute(startLatLng) {
        if (routingControl) {
            mymap.removeControl(routingControl);
        }
        routingControl = L.Routing.control({
            waypoints: [
                L.latLng(startLatLng),
                L.latLng(-6.591309887542925, 110.67075145276088)
            ],
            // createMarker: function(i, waypoint, n) {
            //     // Choose the icon based on the waypoint index
            //     var icon = (i === 0) ? startIcon : endIcon;
            //     return L.marker(waypoint.latLng, {
            //         icon: icon
            //     });
            // },
            routeWhileDragging: true
        }).addTo(mymap);
    }

    // Function to get the user's current location and initialize/update the route
    function updateLocation() {
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
    }

    // Initial location update
    updateLocation();

    // Update location every 5 minutes (300,000 milliseconds)
    setInterval(updateLocation, 300000);
</script>
