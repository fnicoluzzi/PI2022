<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Consultar Ponto de Retirada</title>
</head>
<body>
		<labelfor="">Nome:</label><br/>
		<input type="text" name="name" value="{{$retira->name}}"><br/>
		<labelfor="">Endereco:<br/>
        <input type="text" name="endereco" value="{{$retira->endereco}}" ><br/>
        <labelfor="">DDD:</label><br/>
        <input type="text" name="ddd" value="{{$retira->ddd}}" ><br/>
        <labelfor="">Telefone:<br/>
        <input type="text" name="telefone" value="{{$retira->telefone}}" ><br/>
        <labelfor="">E-mail:</label><br/>
        <input type="text" name="email" value="{{$retira->email}}" ><br/>
        <labelfor="">Responsável:<br/>
        <input type="text" name="responsavel" value="{{$retira->responsavel}}" ><br/>
        <labelfor="">Horário de Atendimento:</label><br/>
        <input type="text" name="horario" value="{{$retira->horario}}" ><br/>
</body>
</html>