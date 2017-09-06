@extends('layout')


@section('content')



<html>

<link rel="stylesheet" href=".css">

	<body style="background-color: #f5f8fa">
		@yield('content')
	


<div class="container">
<form>

 <div style="background-color:lightblue;color:white;padding:2px;">

<h2>Personal Details</h2>

</div>


<br><br>

First Name:
<input type=“text” name=“firstname”>


<br>
<br>

Last Name:
<input type=“text” name=“lastname”>

<br>
<br>

Email:
<input type=“text” name=“email”>

<br>
<br>

Mobile Phone:
<input type=“text” name=“mobile” value=0412648263>

<br>
<br>
————————————————————————
<br>
<br>

<div style="background-color:lightblue;color:white;padding:2px;">

<h2>Car Details</h2>

</div>

<br><br>

Type of Car chosen: 
<input type=“text” name=“carname”><br>

<br>

<th>Dates being borrowed:</th>
<td><input type=“text” name=“dates”></td><br>
 
<button>Submit</button>

</form>
    

  

</div>
</body>

</html>



@endsection