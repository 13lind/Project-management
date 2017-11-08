@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/tables.css') }}">


<style type="text/css">
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

  $booking_info = TripHistoryController::getBookingInformation();


  $lats = TripHistoryController::getLat();
  $lngs = TripHistoryController::getLng();

  $booking_costs = TripHistoryController::getBookingCosts();

  $bookings = TripHistoryController::getBookings();
  $car_id = TripHistoryController::getCarIDs();
  $completion_status = TripHistoryController::getCompletion();
  


?>

<body style="margin-top: 50px">
<div id="content" class = "container">



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
	
  var booking_info = <?php echo json_encode($booking_info); ?>;

	var lats = <?php echo json_encode($lats); ?>;
	var lngs = <?php echo json_encode($lngs); ?>;

	var booking_costs = <?php echo json_encode($booking_costs); ?>;

	var bookings = <?php echo json_encode($bookings); ?>;
  var car_id = <?php echo json_encode($car_id); ?>;
  var completion_status = <?php echo json_encode($completion_status); ?>;
	 


</script>




<script>


function buildTable(bookings) {

    var table = document.createElement("table");
    table.className="gridtable";
    var thead = document.createElement("thead");
    var tbody = document.createElement("tbody");

    var headRow = document.createElement("tr");
    ["Date","Fare ($)","Car Used", "Pickup In", "Dropoff Due", "Completed"].forEach(function(el) {

      var th = document.createElement("th");
      th.appendChild(document.createTextNode(el));
      headRow.appendChild(th);

    });

    thead.appendChild(headRow);
    table.appendChild(thead); 
    var overBookingFee = 0;
    var i = 0;
    bookings.forEach(function(el) {
      var tr = document.createElement("tr");

      var j = i;

      for (var o in el) {  
        var td = document.createElement("td");
        td.appendChild(document.createTextNode(el[o]))
  

            var getPickUpDate = new Date(booking_info[j].date_from + " " + moment(booking_info[j].time_from, 'h:mm a').format('H:mm')); 


            var getDropOffDate = new Date(booking_info[j].date_to + " " + moment(booking_info[j].time_to, 'h:mm a').format('H:mm')); 

            var pickUpMilli = getPickUpDate.getTime(); 
            var dropOffMilli = getDropOffDate.getTime();

            var hours = Math.abs(pickUpMilli - dropOffMilli) / 36e5;

            var d = new Date();
            var n = d.getTime();
            var timeUntilDrop = dropOffMilli - n;
            var timeUntilPickup = n - pickUpMilli;


            var getPickUpDate = moment(booking_info[j].date_from).format('dddd, DD MMMM YYYY');
            var getPickUpTime = moment(booking_info[j].time_from, 'h:mm a').format('H:mm');

            var getDropoffDate = moment(booking_info[j].date_to).format('dddd, DD MMMM YYYY');
            var getDropoffTime = moment(booking_info[j].time_to, 'h:mm a').format('H:mm');         

        
        if(o != 'completed') {


          td.addEventListener("click", function() {



            	document.getElementById("staticMap").src=
            	"https://maps.googleapis.com/maps/api/staticmap?center=" + parseFloat(lats[j]) + "," + parseFloat(lngs[j]) + "&zoom=15&size=400x400&maptype=roadmap\
    			&markers=size:mid%7Ccolor:red%7C" + parseFloat(lats[j]) + "," + parseFloat(lngs[j]) + "&key=AIzaSyAvsxxIPeWUltcyoYBVnjzIY9xOYDAEiTQ";

            	document.getElementById("bookingInfo").innerHTML = 
            	booking_info[j].car_used + "<br>" + 
            	booking_info[j].rego_number + "<br>" + 
            	booking_info[j].car_location + "<br>$" +
            	booking_info[j].total_cost + "<br><br>" +
            	getPickUpDate + " " + getPickUpTime + " to<br>" +
            	getDropoffDate + " " + getDropoffTime + "<br><br>" +
            	"Total Hours: " + hours.toFixed(2) + "<br>" + "";
          									
  		    modal.style.display = "block";
  		  });


        if(o == 'date_from') {
          td.innerHTML = getPickUpDate + " @ " + getPickUpTime;
        }


        if(o == 'total_cost') {
           if(timeUntilDrop < 0 && completion_status[j] == false) {
             overBookingFee = parseFloat(booking_costs[j]) + (parseFloat(booking_info[j].cost_per_hour) * (Math.abs(timeUntilDrop) / 36e5) * 3);
             overBookingFee = overBookingFee.toFixed(2);

             td.innerHTML = booking_costs[j] + " + " + (booking_info[j].cost_per_hour * (Math.abs(timeUntilDrop) / 36e5)  * 3).toFixed(2);
           } else {
              overBookingFee = parseFloat(booking_costs[j]);
              td.innerHTML = parseFloat(booking_costs[j]).toFixed(2);

           }
        }


        function addZero(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        if(o == 'date_to') {
          if(completion_status[j] == false){
            

           if(timeUntilDrop > 0) {


              if(timeUntilDrop > 3600000) {
                 
                  td.innerHTML = (Math.abs(timeUntilDrop) / 36e5).toFixed(2) + " hours";
                  
              } else {

                

                td.innerHTML = ((Math.abs(timeUntilDrop) % 36e5) / 6e4).toFixed(2) + " minutes";
              }

            } else {
              td.innerHTML = "<label style='font-weight: bold;'>" + (Math.abs(timeUntilDrop) / 36e5).toFixed(2) + " hours OVERDUE";

            }
          } else {
            td.innerHTML = "-";
          }
        }



        if(o == 'time_from') {
          if(timeUntilPickup < 0) {
            if(timeUntilPickup < -3600000) {
              td.innerHTML = (Math.abs(timeUntilPickup) / 36e5).toFixed(2) + " hours";
            } else {
              td.innerHTML = ((Math.abs(timeUntilPickup) % 36e5) / 6e4).toFixed(2) + " minutes";
            }
          } else {
            td.innerHTML = "-";
          }
        }



      }


        if(o == 'completed') {
            if(el[o] == 0) {



            var time = new Date().getTime();
            var date = new Date(time);
            var getHours = date.getHours();
            var am;
           

                if (getHours > 12) {
                    getHours -= 12;
                    am = " PM";
                } else if (getHours === 0) {
                   getHours = 12;
                   am = " AM";
                } else {
                  am = " AM";
                }

            finalDropOffTime = getHours + ":" + addZero(date.getMinutes()) + am;
            finalDropOffDate = date.getFullYear() + "/" + addZero(date.getMonth() + 1) + "/" + addZero(date.getDate());

            

               if(timeUntilPickup < 0) {
                 
                 td.innerHTML = "<form action = '/triphistory' method = 'POST'>" +
                              "&#x2718;  <input type = 'hidden' name = 'test' value = '" + car_id[i] + "'>" +
                              "<input type = 'hidden' name = 'total_fee' value = '" + overBookingFee + "'>" +
                              "<input type = 'hidden' name = 'revised_dropoffdate' value = '" + finalDropOffDate + "'>" +
                              "<input type = 'hidden' name = 'revised_dropofftime' value = '" + finalDropOffTime + "'>" +
                              "<button id = 'completeButton' disabled='disabled'> Complete Trip </button>" +
                              "</form>";

              } else {

                 td.innerHTML = "<form action = '/triphistory' method = 'POST'>" +
                              "&#x2718;  <input type = 'hidden' name = 'test' value = '" + car_id[i] + "'>" +
                              "<input type = 'hidden' name = 'total_fee' value = '" + overBookingFee + "'>" +
                              "<input type = 'hidden' name = 'revised_dropoffdate' value = '" + finalDropOffDate + "'>" +
                              "<input type = 'hidden' name = 'revised_dropofftime' value = '" + finalDropOffTime + "'>" +
                              "<button id = 'completeButton'> Complete Trip </button>" +
                              "</form>";

              }



            } else {

              td.innerHTML = "&#x2714;";

            }
        }





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
