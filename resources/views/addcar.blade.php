@extends('layout')
@section('content')

<head>
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.1.0/mapquest.js"></script>


    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.1.0/mapquest.css"/>

    <style type="text/css">
    	option {
    		background: rgba(19, 35, 47, 0.9);
    	}

    	li {
    		color: white;
    	}
    </style>

    <script type="text/javascript">


    //Grab coordinates from address inputted via Add Car form
    function geolocateNewCarLocation() {

    	//Mapquest API Key
        L.mapquest.key = 'PPilvcgNopRTh5JcEA0Zwh6M6HRNxGWS';

        //Grab the relevant fields to add for geolocating
        var street_address = document.getElementById("street_address").value;
        var suburb = document.getElementById("suburb").value;
        var state = document.getElementById("state").value;
        var postcode = document.getElementById("postcode").value;
        
        //Combine address components into a relevant address name, i.e. "124 LaTrobe Street, Melbourne VIC 3000"
        var full_address = street_address + ", " + suburb + " " + state + " " + postcode;
        
        //Search for the address through MapQuest and grab the JSON 
		var gjson ;
		gjson = getJSON('http://www.mapquestapi.com/geocoding/v1/address?key=PPilvcgNopRTh5JcEA0Zwh6M6HRNxGWS&location='+ full_address + '') ;
		coordinates = JSON.parse(gjson);
		
		//Grab the latitude and longitude from the JSON and change the values of lat and long to allow for submitting
		document.getElementById("lat").value = JSON.stringify(coordinates.results[0].locations[0].latLng.lat);
		document.getElementById("long").value = JSON.stringify(coordinates.results[0].locations[0].latLng.lng);


        
      }

      //JSON parsing functions
      function getJSON(url) {
        var resp ;
        var xmlHttp ;

        resp  = '' ;
        xmlHttp = new XMLHttpRequest();

        if(xmlHttp != null)
        {
            xmlHttp.open( "GET", url, false );
            xmlHttp.send( null );
            resp = xmlHttp.responseText;
        }

        return resp ;
    }
    </script>
</head>

<body>
	<div class="form">

		<div class="tab-content">

			
			<form method="POST" action="" onsubmit="geolocateNewCarLocation()">

				<h1>Add Car</h1>
				<div class="field-wrap">
					<label>Car Make</label>

					<div>
						<input id="make" type="text" name="make" placeholder="Ford"
						 required autofocus>
						@if ($errors->has('make'))
						    <div>
						        <ul>
						            @foreach ($errors->get('make') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>

				<div class="field-wrap">
					<label>Car Model</label>

					<div>
						<input id="model" type="text" name="model" placeholder="Falcon" 
						 required autofocus>
						@if ($errors->has('model'))
						    <div>
						        <ul>
						            @foreach ($errors->get('model') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>

				<div class="field-wrap">
					<label>Car Registration</label>

					<div>
						<input id="rego_number" type="text" name="rego_number"  placeholder="AAA-000" 
						 required autofocus>
						@if ($errors->has('rego_number'))
						    <div>
						        <ul>
						            @foreach ($errors->get('rego_number') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					</div>
				</div>



				<div class="field-wrap">
					<label>Car Cost Per Hour ($)</label>

					<div>
						<input id="cost_per_hour" type="text" name="cost_per_hour"  placeholder="8.50" 
						 required autofocus>
						@if ($errors->has('cost_per_hour'))
						    <div>
						        <ul>
						            @foreach ($errors->get('cost_per_hour') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif					 
					</div>
				</div>		

				<div class="field-wrap">
					<label>Max Car Cost Per Day ($)</label>

					<div>
						<input id="cost_per_day" type="text" name="cost_per_day" placeholder="70" 
						 required autofocus>
						@if ($errors->has('cost_per_day'))
						    <div>
						        <ul>
						            @foreach ($errors->get('cost_per_day') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>

				<div class="field-wrap">
					<h2>Car Location</h2>
					<label>Street Address</label>

					<div>
						<input id="street_address" type="text" name="street_address" placeholder="123 Smith Street" 
						 required autofocus>
						@if ($errors->has('street_address'))
						    <div>
						        <ul>
						            @foreach ($errors->get('street_address') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>					

				<div class="field-wrap">
					<label>Suburb</label>

					<div>
						<input id="suburb" type="text" name="suburb" placeholder="Fitzroy" 
						 required autofocus>
						@if ($errors->has('suburb'))
						    <div>
						        <ul>
						            @foreach ($errors->get('suburb') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>		

				<div class="field-wrap">
					<label> State</label>

					<div>
						<select id="state" type="text" name="state" placeholder="VIC" 
						 required autofocus>
						 		<option>ACT</option>
						 		<option>NT</option>
						 		<option>NSW</option>
						 		<option>QLD</option>
						 		<option>SA</option>
						 		<option>TAS</option>
						 		<option selected>VIC</option>
						 		<option>WA</option>
						 		
						 </select>
					</div>
				</div>

				<div class="field-wrap">
					<label>Postcode</label>

					<div>
						<input id="postcode" type="text" name="postcode" placeholder="3065" 
						 required autofocus>
						@if ($errors->has('postcode'))
						    <div>
						        <ul>
						            @foreach ($errors->get('postcode') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif						 
					</div>
				</div>

				<input type="hidden" name="lat" id="lat" value="">
				<input type="hidden" name="long" id="long" value="">

				<button class="button button-block">Submit</button>

			</form>
		</div>
	</div>
</body>


@endsection