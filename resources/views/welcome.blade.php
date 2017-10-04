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

        <style>
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                margin-bottom: 200px;
            }
        </style>
        
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

        <div>
           
            <input type="button" class = "button" value="BOOK NOW" onclick="window.location.href='/findcar'">
        </div>
            
        </div>
                
        
    <div class="heading-home">
        <h1>THE CAR SHARE</h1>
    </div>

    </body>
    
</html>
