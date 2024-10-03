<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ceebad55d6.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <style>
        #mapid {  width:70%; height: 400px; }
    </style>
    <style>
        :root{
            --primer:#b80e0e;
            --body:#f2f2f2;
            --pasive:#e8b2b2;
        }
        body{
            background-color: var(--body);
        }
        .headermenu{
            min-height: 70px;
        }
        #left-sidebar{
            height: calc(100vh - 70px);
        }
        #left-sidebar ul{
            list-style: none;
            padding-left: 10px;
        }
        #left-sidebar ul li {
            border-radius: 10px;
            border: 3px solid transparent;
            padding: 6px;
            margin-bottom: 30px;
        }
        #left-sidebar ul li:hover{
            
            border-color: #b80e0e;
            
        }
        #left-sidebar ul li:hover  a{
            color: var(--primer)!important;
        }
        #left-sidebar ul li a{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: bold;
            color: var(--pasive);
            height: 100%;
            
            display: flex;
            justify-content: left;
            align-items: center;
            width: 100%; /* Make the link take up the full width of the li */
        }
        .panel{
            width:260px;
            height: 100px;
           margin-right: 45px;

        }
        
        .panel .left{
            background-color: #cf0303;
            border-top-left-radius: 30px;
            
            
        }
        .panel .right{
            background-color: #e6e6e6;
            border-bottom-right-radius: 30px;
        }
        .panel .right{
            font-size: .8rem!important;
        }
        .panel .right h4{
            font-size: 1.9rem!important;
            font-weight: bold;
        }
    </style>
  </head>

  <body>
    <div class="container-fluid p-0">
        <div class="row gx-4 headermenu">
            <div class="col-md-2 bg-white text-center">
            <img src="logo.png" alt="" srcset=""  height="60px">
            </div>
            <div class="col-md-10 ">
            <div class="p-3 border  bg-white headermenu">
                
            </div>
            </div>
        </div>
    </div>


    <div class="container-fluid p-0 mt-1">
        <div class="row g-4 ">
            <div class="col-md-2 bg-white " id="left-sidebar">
                <ul class="mt-4">
                    <li>
                        <a href="http://"><span><i class="fa fa-home me-3" style="font-size: 1.6rem!important;"></i></span>DASHBOARD</a>
                    </li>

                    <li>
                        <a href="http://"><span><i class="fa fa-money me-3" style="font-size: 1.6rem!important;"></i></span>ORDER</a>
                    </li>

                    <li>
                        <a href="http://"><span><i class="fa fa-home me-3" style="font-size: 1.6rem!important;"></i></span>FINANCE</a>
                    </li>

                    <li>
                        <a href="http://"><span><i class="fa fa-home me-3" style="font-size: 1.6rem!important;"></i></span>MANAGEMEN VENDOR</a>
                    </li>

                    <li>
                        <a href="http://"><span><i class="fa fa-home me-3" style="font-size: 1.6rem!important;"></i></span>MY PROJECT</a>
                    </li>
                </ul>
                
            </div>
            <div class="col-md-10 ">
                <div class="row p-3 ">
                    <div class="panel">
                        <div class="row">
                            <div class="col-5 left p-2">
                               <img src="icon1.png" class="rounded mx-auto d-block" width="80px">
                            </div>
                            <div class="col-7 right py-2 px-4 text-center">
                                <h4>0</h4>
                                ORDER BARU
                            </div>
                        </div>
                    </div>


                    <div class="panel">
                        <div class="row">
                            <div class="col-5 left p-2">
                               <img src="icon.png" class="rounded mx-auto d-block" width="80px">
                            </div>
                            <div class="col-7 right py-2 px-4 text-center">
                                <h4>0</h4>
                                ORDER AKTIF
                            </div>
                        </div>
                    </div>


                    <div class="panel">
                        <div class="row">
                            <div class="col-5 left p-2">
                               <img src="icon3.png" class="rounded mx-auto d-block" width="80px">
                            </div>
                            <div class="col-7 right py-2 px-4 text-center">
                                <h4>0</h4>
                                ARMADA AKTIF
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row p-3">
                    <div class="text-end pt-1" style="height: 40px;width:70%;background-color:#556c7e;color:white;font-weigth:bold">
                        Perbarui Data Setiap 5 Menit <input type="checkbox" class="form-check-input ms-2" name="" id="">
                    </div>
                    <div id="mapid"></div>
                </div>


            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
  </body>
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
</html>