@extends('layout')
@section('content')


<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

	

<body>


	<div class="container">
		<form method="POST" action="">
			<div>

				<h2>Personal Details</h2>

			</div>


			<div>
				<label> First Name: </label>
				<input type=“text” name=“firstname” value="{{App\Http\Controllers\HomeController::getUserFirstName()}}">
			</div>

			<div>
				<label> Last Name: </label>
				<input type=“text” name=“lastname” value="{{App\Http\Controllers\HomeController::getUserLastName()}}">
			</div>	

			<div>
				<label>Email:</label>
				<input type=“text” name=“email” value="{{App\Http\Controllers\HomeController::getUserEmail()}}">
			</div>

			<div>
				<label>Mobile Phone:</label>
				<input type=“text” name=“mobile”>
			</div>



			<button>Update Details</button>	
		</form>
	</div>
</body>



@endsection
