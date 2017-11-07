@extends('layout')
@section('content')

<?php  

  use App\Http\Controllers\CarController;

  $totalCarCount = CarController::getTotalCarCount();
  $carArray = CarController::getCarInformation();

?>

<head>
	<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

	<style type="text/css">

		label {
			font-size: 17px;
		}

		select {
			font-size: 12px;
			background: rgba(19, 35,160, 0.1);
			width:520px;
		}

	</style>

</head>

<body>
	<div class="form">

		<div class="tab-content">

			<form method="POST" action="">

				<select id="carSelection" onclick="removeCarFunc()"></select>

				<label id="makeLabel">Make: </label></br>
				<label id="modelLabel">Model: </label></br>
				<label id="regoLabel">Registration: </label></br>
				<label id="locationLabel">Location: </label></br>

				<input type="hidden" name="selectedCarID" id="selectedCarID">
				<button class="button button-block">Confirm</button>

			</form>

		</div>
		
	</div>
</body>

<script type="text/javascript">

	var totalCarCount = <?php echo json_encode($totalCarCount); ?>;
	var carArray = <?php echo json_encode($carArray); ?>;

	carSelection = document.getElementById('carSelection');
	carSelection.size = 10;

	for (var i = 0; i < totalCarCount; i++) {

		var option = document.createElement('option');


		option.label = carArray[i].make + " " + carArray[i].model + " - " + carArray[i].car_location;
		carSelection.add(option);


	}

	function removeCarFunc(){
		makeLabel = document.getElementById('makeLabel');
		modelLabel = document.getElementById('modelLabel');
		regoLabel = document.getElementById('regoLabel');
		locationLabel = document.getElementById('locationLabel');
		selectedCarID = document.getElementById('selectedCarID');
		
		makeLabel.innerHTML = "Make: " + carArray[carSelection.selectedIndex].make;
		modelLabel.innerHTML = "Model: " + carArray[carSelection.selectedIndex].model;
		regoLabel.innerHTML = "Registration: " + carArray[carSelection.selectedIndex].rego_number;
		locationLabel.innerHTML = "Location: " + carArray[carSelection.selectedIndex].car_location;

		selectedCarID.value = carArray[carSelection.selectedIndex].id;


	}

</script>

@endsection