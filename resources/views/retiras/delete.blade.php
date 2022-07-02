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
		<div class="opcoes">
			
    <form action="{{route('excluir_retiras', ['id'=>$retira->id])}}" method="POST">
        @csrf
		<labelfor="">Tem certeza que deseja excluir este Ponto de Retirada?</label><br/>
        <input type="text" name="name" value="{{$retira->name}}"><br/>
        <button>Sim</button>
	</form>

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>