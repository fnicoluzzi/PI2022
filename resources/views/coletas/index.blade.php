<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Pontos de Coleta</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Endereco</th>
            <th>DDD</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Responsável</th>
            <th>Horário</th>
        </tr>
        @if($coletas)
            @foreach($coletas as $coleta)
            <tr>
        		<td>{{$coleta->name}}</td>
                <td>{{$coleta->endereco}}</td>
                <td>{{$coleta->ddd}}</td>
                <td>{{$coleta->telefone}}</td>
                <td>{{$coleta->email}}</td>
                <td>{{$coleta->responsavel}}</td>
                <td>{{$coleta->horario}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</body>
</html>