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

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>