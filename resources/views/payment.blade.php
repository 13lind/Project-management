@extends('layout')
@section('content')


<?php

  if (isset($_GET['delete'])) {
    App\Http\Controllers\PaymentController::delete();
  }
?>



 <link href="{{ asset('css/payment.css') }}" rel="stylesheet">


<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
<script type="text/javascript">
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});
</script>
<style>
.ui-datepicker-calendar {
    display: none;
    }
</style>
</head>

<body>

	<dialog id="window">  

		<form class="form-horizontal" method="POST" action="/payment">
		                        {{ csrf_field() }}


			<div class="form-group{{ $errors->has('card_type') ? ' has-error' : '' }}">
				<label for="card_type" class="col-md-5 control-label">Card Type</label>

				<div class="col-md-6">
					<select id = card_type name="card_type">
					  <option value="mastercard">Mastercard</option>
					  <option value="visa">Visa</option>
					</select>



					@if ($errors->has('card_type'))
					<span class="help-block">
						<strong>{{ $errors->first('card_type') }}</strong>
					</span>
					@endif
				</div>
			</div>


			<div class="form-group{{ $errors->has('card_number') ? ' has-error' : '' }}">
				<label for="card_number" class="col-md-5 control-label">Card Number</label>

				<div class="col-md-6">
					<input title = "16-digit number" id="card_number" type="text" class="form-control" name="card_number"
					 pattern="[0-9]{16}" maxlength="16" value="{{ old('card_number') }}" required autofocus>

					@if ($errors->has('card_number'))
					<span class="help-block">
						<strong>{{ $errors->first('card_number') }}</strong>
					</span>
					@endif
				</div>
			</div>


			<!-- Exp. Date field -->
			<div class="form-group{{ $errors->has('exp_date') ? ' has-error' : '' }}">
				<label for="exp_date" class="col-md-5 control-label">Exp. Date</label>

				<div class="col-md-6">
					
   					<input name="exp_date" maxlength="0" name="startDate" id="startDate" class="date-picker" />

					@if ($errors->has('exp_date'))
					<span class="help-block">
						<strong>{{ $errors->first('exp_date') }}</strong>
					</span>
					@endif
				</div>
			</div>


			<!-- CVV number field -->
			<div >
				<label for="cvv" class="col-md-5 control-label">CVV</label>

				<div class="col-md-6">
					<input title = "3-digit code" pattern="[0-9]{3}" maxlength="3" id="cvv" type="text" class="form-control" name="CVV" 
					 required>

				</div>
			</div>



			<div class="form-group">
				<div class="col-md-6 col-md-offset-5">
					<button type="submit" class="btn btn-primary">
						Add Card
					</button>
				</div>
			</div>
		</form>

	    <button id="exit">Close</button>  
	</dialog>  


	<div style="margin-left: 40%; margin-top: 3%">
		<h2> Current Payment Methods </h2>
		{{ App\Http\Controllers\PaymentController::getID()}}
		<br> <button id="show">Add Card</button>  
		

		
		<form>
			<input type="button" value="Delete" onclick="window.location.href='payment?delete=true'" />
		</form>

	</div>


</body>

<script type="text/javascript">
		(function() {  
	    var dialog = document.getElementById('window');  
	    document.getElementById('show').onclick = function() {  
	        dialog.show();  
	    };  
	    document.getElementById('exit').onclick = function() {  
	        dialog.close();  
	    };  
	})(); 

	

</script>
@endsection

