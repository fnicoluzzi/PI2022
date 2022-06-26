<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Excluir Ponto de Retirada</title>
</head>
<body>
    <form action="{{route('excluir_retiras', ['id'=>$retira->id])}}" method="POST">
        @csrf
		<labelfor="">Tem certeza que deseja excluir este Ponto de Retirada?</label><br/>
        <input type="text" name="name" value="{{$retira->name}}"><br/>
        <button>Sim</button>
	</form>
</body>
</html>