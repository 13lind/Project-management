<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Car Share</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcomepage.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>



        <div class="flex-center position-ref full-height">


            @if (Route::has('login'))
                <div class="top-right links">


                    @auth
                        <a href="{{ url('/home') }}">Home</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth

                    <a href="{{ url('/aboutus') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>
            @endif

            <div id="floating-panel">
		<input id="address" type="textbox" style="width: 15%" placeholder="Enter an Address or Postcode">
		<input id="submit" type="button" value="Go">
	</div>
        </div>
		
	
        
    </body>
    
</html>
