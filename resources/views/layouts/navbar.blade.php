<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


<div class = "menu">
  
  <ul class="menu-unordered" id ="main-nav-div">
    @if (Auth::guest())
  	  <li class="menu-ordered"><a href = "/">Home</a></li>
      <li class="menu-ordered"><a href="/login">Login/Register</a></li>
    @endif

    @if (!Auth::guest())
      @if (Auth::user()->isAdmin())
        <li class="menu-ordered"><a href="/admin">Admin Menu</a></li>
      @endif
    @endif

    @if (Auth::user())     
      
        

      	<li class="menu-ordered"><a href = "/">Home</a></li>
      	<li class="menu-ordered"><a href="/findcar">Find a Car</a></li>
      	<li class="menu-ordered"><a href="/triphistory">Trip History</a></li>
      	<li class="menu-ordered"><a href="/profile">Profile</a></li>
      	<li class="menu-ordered"><a href="/payment">Payment</a></li>
        <li class="menu-ordered"><a href="{{ route('logout') }}" 
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
        </a></li>

      
  	
    @endif

  </ul>

    @if(Request::path() === '/')
    <ul class="menu-unordered" id="contact-div">
      <li class="menu-ordered"><a href="/aboutus">About Us</a></li>
      <li class="menu-ordered"><a href="/contact">Contact</a></li>
    </ul>
    @endif

</div>
  
