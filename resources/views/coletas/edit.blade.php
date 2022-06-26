<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastrar Ponto de Coleta</title>
</head>
<body>
	<form action="{{route('alterar_coletas', ['id'=>$coleta->id])}}" method="POST">
        @csrf
        <labelfor="">Nome:</label><br/>
        <input type="text" name="name" value="{{$coleta->name}}"><br/>
        <labelfor="">Endereco:<br/>
        <input type="text" name="endereco" value="{{$coleta->endereco}}" ><br/>
        <labelfor="">DDD:</label><br/>
        <input type="text" name="ddd" value="{{$coleta->ddd}}" ><br/>
        <labelfor="">Telefone:<br/>
        <input type="text" name="telefone" value="{{$coleta->telefone}}" ><br/>
        <labelfor="">E-mail:</label><br/>
        <input type="text" name="email" value="{{$coleta->email}}" ><br/>
        <labelfor="">Responsável:<br/>
        <input type="text" name="responsavel" value="{{$coleta->responsavel}}" ><br/>
        <labelfor="">Horário de Atendimento:</label><br/>
        <input type="text" name="horario" value="{{$coleta->horario}}" ><br/>
        <button>Salvar</button>
	</form>
</body>
</html>