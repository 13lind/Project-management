<!DOCTYPE html>



<?php  
  //Retrieve car information from database via CarController

  use App\Http\Controllers\CarController;

  $totalCarCount = CarController::getTotalCarCount();
  $make = CarController::getCarMake();
  $model = CarController::getCarModel();
  $rego_number = CarController::getCarRego();
  $location = CarController::getCarLocation();
  $cost_per_hour = CarController::getCarCostHour();
  $cost_per_day = CarController::getCarCostDay();
  $avaliable = CarController::getCarAvaliability();
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
    </style>
  </head>

  <body>

    <div id="floating-panel">
      <input id="address" type="textbox" style="width: 15%" placeholder="Enter an Address or Postcode">
      <input id="submit" type="button" value="Go">
   

    </div>

    <div id="map"></div>

    <script>
      var infoWindow;
      
      var car_number = 0;

      //Convert PHP arrays to Javascript
      var locations = <?php echo json_encode($location); ?>;
      var makes = <?php echo json_encode($make); ?>;
      var models = <?php echo json_encode($model); ?>;
      var rego_numbers = <?php echo json_encode($rego_number); ?>;
      var costs_per_hour = <?php echo json_encode($cost_per_hour); ?>;
      var costs_per_day = <?php echo json_encode($cost_per_day); ?>;

      //Remove Point of Interests from the map
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

          var location = locations[i];


          geocodeAddress(geocoder, location, map, function(results){
            
            setMarkers(results[0].address_components[0].long_name + " " + results[0].address_components[1].short_name 
              + ", " + results[0].address_components[2].long_name + " " + results[0].address_components[4].short_name + " " + 
              results[0].address_components[6].short_name, results[0].geometry.location.lat(), results[0].geometry.location.lng(), map);
          });

        }
        

      }

      function geocodeAddress(geocoder, address, resultsMap, callback) {
        
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            callback(results);  

            
          } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) { 
            wait = true;
            setTimeout("wait = true", 2000);
            //alert("OQL: " + status);
          }  else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }


      function setMarkers(location, lat, lng, map) {

          var make = makes[car_number];
          var model = models[car_number];
          var rego_number = rego_numbers[car_number];
          var cost_per_hour = costs_per_hour[car_number];
          var cost_per_day = costs_per_day[car_number];

          var marker = new google.maps.Marker({
            position: {lat: lat, lng: lng},
            map: map,
            title: location,           
          });

          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent("<div id='tabs'>"+
                "<form id='button' method='POST' action='/findcar'>"+
                "<label>Make: " + make + "</label><br>" +
                "<input type='hidden' name='make' value='" + make + "'/>" +
                "<label>Model: " + model + "</label><br>" +
                "<input type='hidden' name='model' value='" + model + "'/>" +
                "<label>Registration: " + rego_number + "</label><br>" +
                "<input type='hidden' name='rego_number' value='" + rego_number + "'/>" +
                "<label>Car Location: " + location + "</label><br>" +
                "<input type='hidden' name='car_location' value='" + location + "'/>" +
                "<label>Cost Per Hour: $" + cost_per_hour + "</label><br>" +
                "<input type='hidden' name='cost_per_hour' value='" + cost_per_hour + "'/>" +
                "<label>Cost Per Day: $" + cost_per_day + "</label><br>" +
                "<input type='hidden' name='cost_per_day' value='" + cost_per_day + "'/>" +
                //"<img src='images/toyotacorolla.jpeg' height='180' width='360'>" +
                "<div>"+
                "<button>Book Car</button>"+ // here
                "</div>"+
                "</form>"+
                "</div>");
            infoWindow.open(map, marker); 
          });
         
          car_number++;
      }

     


     google.maps.event.addDomListener(window, 'load', initMap);






    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ&callback=initMap">
    </script>

  </body>
</html>

