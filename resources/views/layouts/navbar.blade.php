<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


<div class = "menu">
  
  <ul id="main-nav-div">
    @if (Auth::guest())
  	  <li><a href = "/">Home</a></li>
      <li><a href="/login">Login/Register</a></li>
    @endif

    @if (!Auth::guest())
      @if (Auth::user()->isAdmin())
        <li><a href="/admin">Admin Menu</a></li>
      @endif
    @endif

    @if (Auth::user())     
      
        

      	<li><a href = "/">Home</a></li>
      	<li><a href="/findcar">Find a Car</a></li>
      	<li><a href="/triphistory">Trip History</a></li>
      	<li><a href="/profile">Profile</a></li>
      	<li><a href="/payment">Payment</a></li>
        <li><a href="{{ route('logout') }}" 
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
        </a></li>

      
  	
    @endif

  </ul>

    @if(Request::path() === '/')
    <ul id="contact-div">
      <li><a href="/aboutus">About Us</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
    @endif

</div>
  
