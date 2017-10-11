<!DOCTYPE html>

<?php  

  use App\Http\Controllers\CarController;

  $totalCarCount = CarController::getTotalCarCount();
  $car_array = CarController::getCarInformation();

?>


<html>
  <head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
   
    <style>
      #map {
        height: 100%;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
      .search{
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 30px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);      
      }
	  
	  #floating-panel {
		position: absolute;
		top: 10px;
		left: 10%;
		width: 500px;
		z-index: 99;
		padding: 0 11px 0 13px;
	  }

    </style>

  </head>

  <body>

    <div id="floating-panel" >
      <input id="address" class="search" type="textbox" style="width: 45%;" placeholder="Enter an Address or Postcode">
      <input id="submit" type="button" class="search" style=" background-color=fff;" value="Go">

    </div>

    <div id="map"></div>

    <script>
      var infoWindow;    
      var markers = [];

      var car_array = <?php echo json_encode($car_array); ?>;

      var removePOI =[
        {
            featureType: "poi",
            elementType: "labels",
            stylers: [
                  { visibility: "off" }
            ]
        }
      ];


      function initMap() {
        var melbourne = {lat: -37.8136, lng: 144.9631};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: melbourne,
          styles: removePOI 
        });
        
        var geocoder = new google.maps.Geocoder();
       
 
        infoWindow = new google.maps.InfoWindow();



        var total_cars = <?php echo json_encode($totalCarCount); ?>;
        for (var i = 0; i < total_cars; i++) {



            setMarkers(map, i);



        }

        


        document.getElementById('submit').addEventListener('click', function(results) {
          geocodeAddress(geocoder, map, function(results){
            

        var searchedLocation = results[0].geometry.location;
        var compareLocation = new google.maps.LatLng(car_array[0].lat, car_array[0].long);
        var closestCar = getDistance(compareLocation, searchedLocation);

        var closestCarID;

        for (var i = 1; i < total_cars; i++) {
         compareLocation = new google.maps.LatLng(car_array[i].lat, car_array[i].long)

         
         var currentDistance = getDistance(compareLocation, searchedLocation);

          if(currentDistance < closestCar) {
            closestCar = currentDistance;
            closestCarID = i;
          }


        }
        


        var getClosestLatLng = new google.maps.LatLng(car_array[closestCarID].lat, car_array[closestCarID].long);



        addInfoWindow(map, markers[closestCarID], closestCarID);



        map.setCenter(getClosestLatLng);




          });
        });




      }



      var rad = function(x) {
        return x * Math.PI / 180;
      };

      var getDistance = function(p1, p2) {
        var R = 6378137; // Earth’s mean radius in meter
        var dLat = rad(p2.lat() - p1.lat());
        var dLong = rad(p2.lng() - p1.lng());
        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
          Math.sin(dLong / 2) * Math.sin(dLong / 2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var d = R * c;
        return d; // returns the distance in meter
      };




      function geocodeAddress(geocoder, resultsMap, callback) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
             callback(results);  


          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }


      function addInfoWindow(map, marker, id) {

        infoWindow.setContent("<div id='tabs'>"+
                        "<form id='button' method='POST' action='/set'>"+
                        "<label>Make: " + car_array[id].make + "</label><br>" +
                        "<input type='hidden' name='make' value='" + car_array[id].make + "'/>" +
                        "<label>Model: " + car_array[id].model + "</label><br>" +
                        "<input type='hidden' name='model' value='" + car_array[id].model + "'/>" +
                        "<label>Registration: " + car_array[id].rego_number + "</label><br>" +
                        "<input type='hidden' name='rego_number' value='" + car_array[id].rego_number + "'/>" +
                        "<label>Car Location: " + car_array[id].car_location + "</label><br>" +
                        "<input type='hidden' name='car_location' value='" + car_array[id].car_location + "'/>" +
                        "<label>Cost Per Hour: $" + car_array[id].cost_per_hour + "</label><br>" +
                        "<input type='hidden' name='cost_per_hour' value='" + car_array[id].cost_per_hour + "'/>" +
                        "<label>Cost Per Day: $" + car_array[id].cost_per_day + "</label><br>" +
                        "<input type='hidden' name='cost_per_day' value='" + car_array[id].cost_per_day + "'/>" +
                        //"<img src='images/toyotacorolla.jpeg' height='180' width='360'>" +
                        "<div>"+
                        "<button>Book Car</button>"+ // here
                        "</div>"+
                        "</form>"+
                        "</div>");
        infoWindow.open(map, marker); 
      }


      function setMarkers(map, i) {

    
          setLatLng = new google.maps.LatLng(car_array[i].lat, car_array[i].long)

          var marker = new google.maps.Marker({
            position: setLatLng,
            map: map,
            title: car_array[i].location,           
          });

          

          google.maps.event.addListener(marker, 'click', function() {
            
            addInfoWindow(map, marker, i);

          });
          markers.push(marker);
         

      }
    

     google.maps.event.addDomListener(window, 'load', initMap);



    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ&callback=initMap">
    </script>

  </body>
</html>

