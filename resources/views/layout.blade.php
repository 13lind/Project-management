<!DOCTYPE html>
@include('layouts.navbar')
@include('layouts.sidebar')
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
<html>
	
	@yield('content')
	

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    	{{ csrf_field() }}
	</form>
	
</html>


