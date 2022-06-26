<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastrar Ponto de Retirada</title>
</head>
<body>
	<form action="{{route('registrar_users')}}" method="POST">
		@csrf
		<labelfor="">Nome:</label><br/>
		<input type="text" name="name"><br/>
		<labelfor="">E-mail:</label><br/>
        <input type="text" name="email"><br/>
        <labelfor="">Senha:<br/>
        <input type="text" name="password"><br/>
        <labelfor="">Repita a Senha:</label><br/>
        <input type="text" name="senha_repetida"><br/>
        <button>Salvar</button>
	</form>
</body>
</html>