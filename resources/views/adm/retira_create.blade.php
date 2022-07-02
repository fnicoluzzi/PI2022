<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo.jpg') }}">
        <div class="opcoes">
            
	<form action="{{route('registrar_retiras')}}" method="POST">
        @csrf
		<labelfor="">Nome:</label><br/>
		<input type="text" name="name"><br/>
		<labelfor="">Endereco:<br/>
        <input type="text" name="endereco"><br/>
        <labelfor="">DDD:</label><br/>
        <input type="text" name="ddd"><br/>
        <labelfor="">Telefone:<br/>
        <input type="text" name="telefone"><br/>
        <labelfor="">E-mail:</label><br/>
        <input type="text" name="email"><br/>
        <labelfor="">Responsável:<br/>
        <input type="text" name="responsavel"><br/>
        <labelfor="">Horário de Atendimento:</label><br/>
        <input type="text" name="horario"><br/>
        <button>Salvar</button>
	</form>

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>