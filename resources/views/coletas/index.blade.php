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
            
    <h2>Pontos de Coleta</h2>
        @if($coletas)
            @foreach($coletas as $coleta)
        	
            <h3>
                {{$coleta->name}}
            </h3>
            
            <p>
                {{$coleta->endereco}}<br>
                {{$coleta->ddd}}<br>
                {{$coleta->telefone}}<br>
                {{$coleta->email}}<br>
                {{$coleta->responsavel}}<br>
                {{$coleta->horario}}<br>
            </p>

            @endforeach
        @endif
        

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>