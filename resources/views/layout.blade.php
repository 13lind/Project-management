<!DOCTYPE html>
@include('layouts.navbar')
@include('layouts.sidebar')
<style type="text/css">

</style>
<html>
	
	@yield('content')
	

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    	{{ csrf_field() }}
	</form>
	
</html>
