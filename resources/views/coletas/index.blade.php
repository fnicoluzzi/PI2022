<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Pontos de Coleta</title>
</head>
<body>
    <div>
    <h2>Pontos de Coleta</h2>
        @if($coletas)
            @foreach($coletas as $coleta)
        		<p>
                    {{$coleta->name}}<br>
                    {{$coleta->endereco}}<br>
                    {{$coleta->ddd}}<br>
                    {{$coleta->telefone}}<br>
                    {{$coleta->email}}<br>
                    {{$coleta->responsavel}}<br>
                    {{$coleta->horario}}<br>
                </p>
            </tr>
            @endforeach
        @endif
        
    </div><div><a href="/home">Voltar</a></div>
    </body>
</html>