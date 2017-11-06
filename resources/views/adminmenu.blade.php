@extends('layout')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
	<div class="form">

	

		<a style="text-decoration: none" href = "/admin/removecar">
			<button class="button button-block">Add Car</button>
		</a>

		<a style="text-decoration: none" href = "/admin/removecar">
			<button class="button button-block">Remove Car</button>
		</a>

		
	</div>
</body>
@endsection