<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Excluir Ponto de Coleta</title>
</head>
<body>
    <form action="{{route('excluir_coletas', ['id'=>$coleta->id])}}" method="POST">
        @csrf
		<labelfor="">Tem certeza que deseja excluir este Ponto de Coleta?</label><br/>
		<input type="text" name="name" value="{{$coleta->name}}"><br/>
        <button>Sim</button>
	</form>
</body>
</html>