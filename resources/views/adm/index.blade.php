<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Pontos de Coleta</title>
</head>
<body>
        @if($coletas)
            @foreach($coletas as $coleta)
        		{{$coleta->name}}
                {{$coleta->endereco}}
                {{$coleta->ddd}}
                {{$coleta->telefone}}
                {{$coleta->email}}
                {{$coleta->responsavel}}
                {{$coleta->horario}}
                <a href="/coletas/editar/{{$coleta->id}}">Editar</a>
            @endforeach
        @endif
</body>
</html>