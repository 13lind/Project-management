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

        


        //address search function here





      }


      function addInfoWindow(map, marker, id) {

        infoWindow.setContent("<div id='tabs'>"+
                        "<form id='button' method='POST' action='/findcar'>"+
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

         

      }
    

     google.maps.event.addDomListener(window, 'load', initMap);



    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ&callback=initMap">
    </script>

  </body>
</html>

