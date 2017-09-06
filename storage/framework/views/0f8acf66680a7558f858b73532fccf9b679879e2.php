<!DOCTYPE html>

<html>
  <head>
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

    <div id="map"></div>

    <script>     
     
    function initMap() {
      var melbourne = {lat: -37.8136, lng: 144.9631};

      var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: melbourne
      });

      var marker = new google.maps.Marker({
      position: melbourne,
      map: map,
      title: 'Test Marker'
      });
    }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ&callback=initMap">
    </script>

  </body>
</html>