<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Pontos de Retirada</title>
</head>
<body>
    <div>
    <h2>Onde Retirar?</h2>
        @if($retiras)
            @foreach($retiras as $retira)

                <p>
                <a href="/retiras/editar/{{$retira->id}}">Editar</a><br>
                {{$retira->name}}<br>
                {{$retira->endereco}}<br>
                {{$retira->ddd}}<br>
                {{$retira->telefone}}<br>
                {{$retira->email}}<br>
                {{$retira->responsavel}}<br>
                {{$retira->horario}}</p>

            @endforeach
        @endif
        <div><a href="/home">Voltar</a></div>
</body>
</html>