<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Pontos de Retirada</title>
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
        @if($retiras)
            @foreach($retiras as $retira)
            <tr>
        		<td>{{$retira->name}}</td>
                <td>{{$retira->endereco}}</td>
                <td>{{$retira->ddd}}</td>
                <td>{{$retira->telefone}}</td>
                <td>{{$retira->email}}</td>
                <td>{{$retira->responsavel}}</td>
                <td>{{$retira->horario}}</td>
            </tr>
            @endforeach
        @endif
    </table>

</body>
</html>