@extends('layout')


@section('content')


<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

	<body style="background-color: #f5f8fa">
		@yield('content')
	


<div class="container">
	<form>

	 <div>

	<h2>Personal Details</h2>

	</div>



	<label> First Name: </label>
	<input type=“text” name=“firstname”>


	<label> Last Name: </label>
	<input type=“text” name=“lastname”>



	<label>Email:</label>
	<input type=“text” name=“email”>



	<label>Mobile Phone:</label>
	<input type=“text” name=“mobile”>




	<button>Update Details</button>

	</form>
    

  

</div>
</body>




@endsection