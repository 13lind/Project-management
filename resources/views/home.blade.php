@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">


    <div>
        <nav class = "left-nav">
            <ul style="list-style: none;">
                <li><h2><a href="/findcar">Find a Car</a></h2></li>
                <li><h2><a href="/triphistory">Trip History</a></h2></li>
                <li><h2><a href="/profile">Profile</a></h2></li>
                <li><h2><a href="/payment">Payment</a></h2></li>
                <li><h2><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></h2></li>

            </ul>
        </nav>
    </div>
    <div class = "centre-console">
        <div class="container" >
            <div>
                
                    <div class="panel panel-default" >
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            Welcome!
                        </div>
                    </div>
                
            </div>
        </div>
    </div>




@endsection
