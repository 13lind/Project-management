<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">



<div class = "topbar" style = "background-image:url(images/wallpaper.jpg)">

  <div class = "title">
    <h1> <a href = "/">The Car Share</a></h1>
  </div>

  <div class = "menu">
    @if (Auth::guest())
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @else
    <a href="{{ route('logout') }}" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          Logout
    </a>
    @endif
  </div>
  
</div>