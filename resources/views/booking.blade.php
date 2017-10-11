@extends('layout')
@section('content')

<style type="text/css">
  body
{
  background-image:url(images/wallpaper.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  margin: 0px 0px;
}
</style>

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datetimepicker.css') }}" /> 
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/moment.js') }}"></script> 
 


<body>

<div class="contact-form">
  <div class="form">
    <div  class="tab-content">
    <form method="POST" action="/confirmbooking">
      <div>

        <h1>Hire Car Details</h1>

      </div>



      <div class="field-wrap">
        <label>Vehicle:</label>
        <input type=“text” name=“Model” value="{{$make .' '. $model}}" readonly=”readonly”>
        <input type="hidden" id ="car_used" name="car_used" type="text" value="{{$make .' '. $model}}">
      </div>

      <div class="field-wrap">
        <label>Rego Number:</label>
        <input type=“text” name=“Rego Number” value="{{$rego_number}}" readonly=”readonly”>
        <input type="hidden" id ="rego_number" name="rego_number" type="text" value="{{$rego_number}}">
      </div>

      <div class="field-wrap">
        <label>Car Location:</label>
        <input type=“text” name=“Car Location” value="{{$car_location}}" readonly=”readonly”>
        <input type="hidden" id ="car_location" name="car_location" type="text" value="{{$car_location}}">  
      </div>

      <div class="field-wrap">
        <label>Cost Per Hour ($):</label>
        <input type=“text” name=“Cost Per Hour” value="{{$cost_per_hour}}" readonly=”readonly”>
        <input type="hidden" id ="cost_per_hour" name="cost_per_hour" type="text" value="{{$cost_per_hour}}">
      </div>

      <div class="field-wrap">
        <label>Max Cost Per Day ($):</label>
        <input type=“text” name=“Max Cost Per Day” value="{{$cost_per_day}}" readonly=”readonly”>
        <input type="hidden" id ="cost_per_day" name="cost_per_day" type="text" value="{{$cost_per_day}}">
      </div>

      <div>
        <label >From:</label>
      </div>
      <div>
        <input style = "width: 50%; float:left;" id ="date_from" name ="date_from" class="pickupdatepicker" type="text" placeholder="Pick-up Date" required>
        <input style = "width: 50%; float:left;" id ="time_from" name ="time_from" class="timepicker" type="text" placeholder="Pick-up Time" required>
      </div>
      <div>
        <label >To:</label>
      </div>
      <div">
        <input style = "width: 50%; float:left;" id = "date_to" name ="date_to" class="dropoffdatepicker" type="text" placeholder="Drop-off Date" required>
        <input style = "width: 50%; float:left;" id = "time_to" name ="time_to" class="timepicker" type="text" placeholder="Drop-off Time" required>
      </div>

      <div>
        <label id="total_cost_label" name="total_cost_label" value = "3.30">Estimated Fee: $0.00</label>
        <input type="hidden" id = "total_cost_value" name="total_cost_value" value="0.00">
      </div>
      <br>
      <br>
      <button class="button button-block">Confirm Booking</button> 
    </form>
  </div>
</div>
</div>
</body>

<script>
    $('.timepicker').datetimepicker({
    
    
    datepicker:false,
    ampm: true,
    step: 5,
    format: 'g:i A',
        formatTime: 'g:i A',
    minDate:'-1970/01/01',
    onChangeDateTime: myfunction


    });

    $('.pickupdatepicker').datetimepicker({
    
    
    timepicker:false,
    
    
    format: 'Y/m/d',
        
    minDate:'-1970/01/01',
    onChangeDateTime: myfunction
    

    });

    var dateToDisable = new Date();
  dateToDisable.setDate(dateToDisable.getDate() + 14);
    $('.dropoffdatepicker').datetimepicker({
    
    
    timepicker:false,
    step: 5,
    
    format: 'Y/m/d',
       
    minDate:'-1970/01/01',
    
    
    onChangeDateTime: myfunction


    });




  
  function myfunction() {
    var pickUpDate = document.getElementById("date_from").value;
    var pickUpTime = document.getElementById("time_from").value;
    var getPickUpDate = new Date(pickUpDate + " " + moment(pickUpTime, 'h:mm a').format('H:mm')); 

    var dropOffDate = document.getElementById("date_to").value;
    var dropOffTime = document.getElementById("time_to").value;
    var getDropOffDate = new Date(dropOffDate + " " + moment(dropOffTime, 'h:mm a').format('H:mm')); 
    var pickUpMilli = getPickUpDate.getTime(); 
    var dropOffMilli = getDropOffDate.getTime();
      
    var cost_per_hour = <?php echo json_encode($cost_per_hour); ?>;
    var cost_per_day = <?php echo json_encode($cost_per_day); ?>;

      var hours = Math.abs(pickUpMilli - dropOffMilli) / 36e5;
      var totalFee = hours * cost_per_hour;

      if(totalFee > cost_per_day) {
        totalFee = parseInt(cost_per_day);
      } else {
        totalFee = hours * cost_per_hour;
      }

      document.getElementById("total_cost_label").innerHTML = "Estimated Fee: $" + totalFee.toFixed(2);
      document.getElementById("total_cost_value").value = totalFee.toFixed(2);
     

     
  }

</script>

@endsection



