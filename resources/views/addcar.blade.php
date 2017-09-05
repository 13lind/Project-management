@extends('layout')
@section('content')

<h2>Add Car</h2>

<form method="POST" action="">
		   


	<div>
		<label>Car Make</label>

		<div>
			<input id="make" type="text" name="make" placeholder="Toyota" 
			 required autofocus>
		</div>
	</div>

	<div>
		<label>Car Model</label>

		<div>
			<input id="model" type="text" name="model" placeholder="Corolla" 
			 required autofocus>
		</div>
	</div>

	<div>
		<label>Car Registration</label>

		<div>
			<input id="rego_number" type="text" name="rego_number"  placeholder="AAA-000" 
			 required autofocus>
		</div>
	</div>

	<div>
		<label>Car Cost Per Hour ($)</label>

		<div>
			<input id="cost_per_hour" type="text" name="cost_per_hour"  placeholder="8.50" 
			 required autofocus>
		</div>
	</div>		

	<div>
		<label>Max Car Cost Per Day ($)</label>

		<div>
			<input id="cost_per_day" type="text" name="cost_per_day" placeholder="70" 
			 required autofocus>
		</div>
	</div>

	<div>
		<h2>Car Location</h2>
		<label>Street Address</label>

		<div>
			<input id="street_address" type="text" name="street_address" placeholder="124 La Trobe Street" 
			 required autofocus>
		</div>
	</div>					

	<div>
		<label>Suburb</label>

		<div>
			<input id="surburb" type="text" name="surburb" placeholder="Melbourne" 
			 required autofocus>
		</div>
	</div>		

	<div>
		<label> State</label>

		<div>
			<input id="state" type="text" name="state" placeholder="VIC" 
			 required autofocus>
		</div>
	</div>

	<div>
		<label>Postcode</label>

		<div>
			<input id="postcode" type="text" name="postcode" placeholder="3000" 
			 required autofocus>
		</div>
	</div>

	<button>Submit</button>

</form>

@endsection