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
            
    <div>
        <label>CEP:</label>
        <input wire:change='buscaCep($event.target.value)' type="text" class="form-control" id="cep" name="cep" placeholder="Cep">
        <button wire:click='buscaCep'>Busca CEP</button>
        
    </div>
        <input wire:model='logradouro' type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Endereço">
        <input wire:model='bairro' type="text" class="form-control" id="bairo" name="bairo" placeholder="Bairro">
        <input wire:model='cidade' type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
        <input wire:model='estado' type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
	<!--<form action="{{route('registrar_coletas')}}" method="POST">
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
	</form>-->

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>