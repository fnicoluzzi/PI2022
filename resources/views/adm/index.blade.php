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
            
        @if($coletas)
            @foreach($coletas as $coleta)
        		{{$coleta->name}}
                {{$coleta->endereco}}
                {{$coleta->ddd}}
                {{$coleta->telefone}}
                {{$coleta->email}}
                {{$coleta->responsavel}}
                {{$coleta->horario}}
                <a href="/coletas/editar/{{$coleta->id}}">Editar</a>
            @endforeach
        @endif

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>