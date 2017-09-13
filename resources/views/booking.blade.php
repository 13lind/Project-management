@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
 
<body>
  <div class="container">

    <form>

    <div>

    <h2>Hire Car Details</h2>

    </div>

    <div>
      <label>Make:</label>
      <input type=“text” name=“Make” readonly=”readonly”>
    </div>

    <div>
      <label>Model:</label>
      <input type=“text” name=“Model” readonly=”readonly”>
    </div>

    <div>
      <label>Rego Number:</label>
      <input type=“text” name=“Rego Number” readonly=”readonly”>
    </div>

    <div>
      <label>Car Location:</label>
      <input type=“text” name=“Car Location” readonly=”readonly”>
    </div>

    <div>
      <label>Cost Per Hour:</label>
      <input type=“text” name=“Cost Per Hour” readonly=”readonly”>
    </div>

    <div>
      <label>Max Cost Per Day:</label>
      <input type=“text” name=“Max Cost Per Day” readonly=”readonly”>
    </div>

    <br>
    <div>
      <input type=“text” name=“Pick-up Date” placeholder=Pick-upDate>
      <input type=“text” name=“Pick-up Time” placeholder=Pick-upTime>
      <br>
      <input type=“text” name=“Drop-up Date” placeholder=Drop-upDate>
      <input type=“text” name=“Drop-up Time” placeholder=Drop-upTime>
    </div>
    <br>
     
    <button type="button" >Confirm Booking</button>
    </form>

  </div>
</body>

@endsection


