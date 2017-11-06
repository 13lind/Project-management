<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.navbar')
        <style type="text/css">
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background-image: url("/images/mainbackground.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }
        </style>
    </head>


	
	@yield('content')
	
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    	{{ csrf_field() }}
	</form>
	
</html>


