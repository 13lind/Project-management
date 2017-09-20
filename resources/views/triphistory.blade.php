@extends('layout')
@section('content')

<style type="text/css">
	table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:15px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
	width: 50%;
	margin: auto;

}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
table.gridtable tr:hover td {
	background-color: #45a049;
}





.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}


.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 400px;
}


.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}





</style>

<?php  
  //Retrieve car information from database via CarController

  use App\Http\Controllers\TripHistoryController;

  $cars_used = TripHistoryController::getCarUsed();
  $rego_numbers = TripHistoryController::getCarRego();
  $locations = TripHistoryController::getCarLocation();
  $lats = TripHistoryController::getLat();
  $lngs = TripHistoryController::getLng();
  $pickup_dates = TripHistoryController::getPickupDate();
  $pickup_times = TripHistoryController::getPickupTime();
  $dropoff_dates = TripHistoryController::getDropoffDate();
  $dropoff_times = TripHistoryController::getDropoffTime();
  $booking_costs = TripHistoryController::getBookingCosts();
  $bookings = TripHistoryController::getBookings();
  //$user_id = App\Http\Controllers\HomeController::getUserFirstName()

?>

<body>
<div id="content">



</div>

<div>


<div id="myModal" class="modal">


  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="bookingInfo"></div>
    <img id ="staticMap" src="">
  </div>

</div>

<div>
<label id="car_info"></label>
</div>



</body>
<script type="text/javascript" src="{{ asset('js/moment.js') }}"></script> 
<script type="text/javascript">
	
	var cars_used = <?php echo json_encode($cars_used); ?>;
	var rego_numbers = <?php echo json_encode($rego_numbers); ?>;
	var locations = <?php echo json_encode($locations); ?>;
	var lats = <?php echo json_encode($lats); ?>;
	var lngs = <?php echo json_encode($lngs); ?>;
	var pickup_dates = <?php echo json_encode($pickup_dates); ?>;
	var pickup_times = <?php echo json_encode($pickup_times); ?>;
	var dropoff_dates = <?php echo json_encode($dropoff_dates); ?>;
	var dropoff_times = <?php echo json_encode($dropoff_times); ?>;
	var booking_costs = <?php echo json_encode($booking_costs); ?>;
	var bookings = <?php echo json_encode($bookings); ?>;

	 

	// var sel = document.getElementById('drop_down_view');
	// var fragment = document.createDocumentFragment();

	// cars_used.forEach(function(car_used, index) {
	//     var opt = document.createElement('option');
	//     opt.innerHTML = car_used;
	//     opt.value = car_used;
	//     fragment.appendChild(opt);
	// });

	// for (var i = 0; i < cars_used.length; i++) {

	// var testlabel = document.createElement('label');
	// testlabel.innerHTML = cars_used[i];
	// document.body.appendChild(testlabel);
	// 	document.write("<br>");


	// }



//sel.appendChild(fragment);

// function changeInfo() {
// 	var sel = document.getElementById("drop_down_view");
// 	var text = pickup_dates[sel.selectedIndex-1] + " $" + booking_costs[sel.selectedIndex-1] + " " + cars_used[sel.selectedIndex-1];
// 	document.getElementById("car_info").innerHTML = text;
// }
</script>




<script>

var tablez;

function buildTable(bookings) {

    var table = document.createElement("table");
    table.className="gridtable";
    var thead = document.createElement("thead");
    var tbody = document.createElement("tbody");
    var headRow = document.createElement("tr");
    ["Pickup Date","Fare ($)","Car Used"].forEach(function(el) {
      var th=document.createElement("th");
      th.appendChild(document.createTextNode(el));
      headRow.appendChild(th);
    });
    thead.appendChild(headRow);
    table.appendChild(thead); 
    var i = 0;
    bookings.forEach(function(el) {
      var tr = document.createElement("tr");

      var j = i;

      for (var o in el) {  
        var td = document.createElement("td");
        td.appendChild(document.createTextNode(el[o]))
        td.addEventListener("click", function() {


		    var getPickUpDate = new Date(pickup_dates[j] + " " + moment(pickup_times[j], 'h:mm a').format('H:mm')); 


		    var getDropOffDate = new Date(dropoff_dates[j] + " " + moment(dropoff_times[j], 'h:mm a').format('H:mm')); 

		    var pickUpMilli = getPickUpDate.getTime(); 
		    var dropOffMilli = getDropOffDate.getTime();

		    var hours = Math.abs(pickUpMilli - dropOffMilli) / 36e5;



        	var getPickUpDate = moment(pickup_dates[j]).format('dddd, DD MMMM YYYY');
        	var getPickUpTime = moment(pickup_times[j], 'h:mm a').format('H:mm');

        	var getDropoffDate = moment(dropoff_dates[j]).format('dddd, DD MMMM YYYY');
        	var getDropoffTime = moment(dropoff_times[j], 'h:mm a').format('H:mm');

        	document.getElementById("staticMap").src=
        	"https://maps.googleapis.com/maps/api/staticmap?center=" + parseFloat(lats[j]) + "," + parseFloat(lngs[j]) + "&zoom=15&size=400x400&maptype=roadmap\
			&markers=size:mid%7Ccolor:red%7C" + parseFloat(lats[j]) + "," + parseFloat(lngs[j]) + "&key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ";

        	document.getElementById("bookingInfo").innerHTML = 
        	cars_used[j] + "<br>" + 
        	rego_numbers[j] + "<br>" + 
        	locations[j] + "<br>$" +
        	booking_costs[j] + "<br><br>" +
        	getPickUpDate + " " + getPickUpTime + " to<br>" +
        	getDropoffDate + " " + getDropoffTime + "<br><br>" +
        	"Total Hours: " + hours.toFixed(2) + "<br>" + "";


        									
		    modal.style.display = "block";
		});

        tr.appendChild(td);
      }
      i++;
      tbody.appendChild(tr);  
    });
    table.appendChild(tbody);             
    return table;
}


window.onload=function() {
  document.getElementById("content").appendChild(buildTable(bookings));
  
  
  
}







// Get the modal
var modal = document.getElementById('myModal');



// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).on('click','.get-data' ,function(){
    var $item = $(this).closest("tr").find('td');
    $.each($item, function(key, value){
        alert($(value).text());
    })
});











</script>

@endsection
