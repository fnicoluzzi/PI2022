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

    <h2>Onde Retirar?</h2>
        @if($retiras)
            @foreach($retiras as $retira)

            <h3>
                {{$retira->name}}
            </h3>

        	<p>
                {{$retira->endereco}}<br>
                {{$retira->ddd}}<br>
                {{$retira->telefone}}<br>
                {{$retira->email}}<br>
                {{$retira->responsavel}}<br>
                {{$retira->horario}}
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