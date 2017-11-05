@extends('layout')
@section('content')
<head>
	<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>

<body>
	<div class="form">

		<div class="tab-content">

			<select id="daySelect"></select>

		</div>
	</div>
</body>

<script type="text/javascript">
	
	daySelect = document.getElementById('daySelect');
	var option = document.createElement('option');
	option.text = 'cool';
	daySelect.appendChild(option);

</script>


@endsection