@extends('layout')
@section('content')


<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

	

<body>


	<div class="form">
		<div class="tab-content">
			<form method="POST" action="">
				<div>

					<h1>Personal Details</h1>

				</div>


				<div class="field-wrap">
					<label> First Name: </label>
					<input type=“text” name=“firstname” value="{{App\Http\Controllers\HomeController::getUserFirstName()}}">
				</div>

				<div class="field-wrap">
					<label> Last Name: </label>
					<input type=“text” name=“lastname” value="{{App\Http\Controllers\HomeController::getUserLastName()}}">
				</div>	

				<div class="field-wrap">
					<label>Email:</label>
					<input type=“text” name=“email” value="{{App\Http\Controllers\HomeController::getUserEmail()}}">
				</div>

				<div class="field-wrap">
					<label>Mobile Phone:</label>
					<input type=“text” name=“mobile”>
				</div>



				<button class="button button-block">Update Details</button>	
			</form>
		</div>
	</div>
</body>


@endsection
