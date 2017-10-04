<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

	 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <div class = "menu">
    @if (Auth::guest())
	<a href = "/">Home</a>
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @else
	<a href = "/">Home</a>
	<a href="/admin">Admin Menu</a>
	<a href="/findcar">Find a Car</a>
	<a href="/triphistory">Trip History</a>
	<a href="/home">Profile</a>
	<a href="/payment">Payment</a>    
    <a href="{{ route('logout') }}" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          Logout
    </a>
	
    @endif
  </div>
  
</div>