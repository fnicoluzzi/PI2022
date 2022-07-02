@section('cabecalho')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
		<img src="{{ asset('img/logo.jpg') }}">
@endsection



@section('rodape')
		<a href="/home">
			<img id="back" src="{{ asset('img/back.jpg') }}">
		</a>
	</div>
</body>
</html>
@endsection