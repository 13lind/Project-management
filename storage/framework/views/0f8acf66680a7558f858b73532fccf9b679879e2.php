<!DOCTYPE html>
<style>

body, html {
    height: 100%;
    margin: 0;
}

.bg {
    height: 100%; 
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<html>
	<body>

	<div id="googleMap" class="bg"></div>

	<script>
	function myMap() {
	var mapProp= {
	    center:new google.maps.LatLng(-37.815018,144.946014),
	    zoom:12,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ&callback=myMap"></script>

	</body>
</html>