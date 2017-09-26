<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

@if (Auth::guest())
@else
<div>
       <nav class = "left-nav">
            <a href="/admin">Admin Menu</a>
            <a href="/findcar">Find a Car</a>
            <a href="/triphistory">Trip History</a>
            <a href="/home">Profile</a>
            <a href="/payment">Payment</a>    
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>

        </ul>
    </nav>
</div>
@endif

