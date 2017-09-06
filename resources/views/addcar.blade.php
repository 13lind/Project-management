@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/addcar.css') }}">
<body>
<div class="video-background">
    <div class="video-foreground">
		<iframe width="854" height="480" src="https://www.youtube.com/embed/5_VR31lrtl8?&amp;rel=0&amp;controls=0&amp;showinfo=0;loop=1&amp;autoplay=1&amp" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div class="container">
<form method="POST" action="">
	<h2>Add Car</h2>
	<div>
		<label>Car Make</label>

		<div>
			<input id="make" type="text" name="make" placeholder="Ford" 
			 required autofocus>
		</div>
	</div>

	<div>
		<label>Car Model</label>

		<div>
			<input id="model" type="text" name="model" placeholder="Falcon" 
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
			<input id="street_address" type="text" name="street_address" placeholder="123 Smith Street" 
			 required autofocus>
		</div>
	</div>					

	<div>
		<label>Suburb</label>

		<div>
			<input id="suburb" type="text" name="suburb" placeholder="Fitzroy" 
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
			<input id="postcode" type="text" name="postcode" placeholder="3065" 
			 required autofocus>
		</div>
	</div>

	<button>Submit</button>

</form>
</div>
</body>

@endsection