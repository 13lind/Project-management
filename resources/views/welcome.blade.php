@extends('layout')
@section('content')

    <head>


        <title>The Car Share</title>


        <link href="{{ asset('css/welcomepage.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       

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
        <div class="flex-center full-height">
        
            
            <div>
                <input type="button" class="book-button" value="BOOK NOW" onclick="window.location.href='/findcar'">
            </div>
        </div>
        <div class="heading-home">
            <h1>THE CAR SHARE</h1>
        </div>
    </body>

@endsection
