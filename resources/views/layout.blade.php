<!DOCTYPE html>
@include('layouts.navbar')
@include('layouts.sidebar')
<html>
	<body style="background-color: #f5f8fa">
		@yield('content')
	</body>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    	{{ csrf_field() }}
	</form>
	
</html>