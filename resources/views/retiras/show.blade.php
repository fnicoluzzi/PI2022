<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        
    /* regras gerais*/
@media all{
    body{
        font-family: helvetica, verdana, arial;
        color: #3b2612;
        text-align: center;
    }
    div{
        border-radius: 10px;
        border: 1px;
        margin-left:10px;
        margin-top:10px;
        padding: 10px;

    }
    .container{
    }

    .opcoes{
        background: rgba(0, 255, 150, 0.5);
        width:500px;
        height:190px;
        margin-left: auto;
        margin-right: auto;
        overflow-y: auto;
    }


    .esquerda{
        float: left;
    }
    .direita{
        float: right;
    }

    .esquerda , .direita{
        background: rgba(255, 150, 150, 1.0);
        width:90px;
        height:50px;
        color: rgba(255, 0, 0, 1.0);
        padding: 10px;
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 25px;
    }


    #back{
        padding-top: 10px;
        width: 50px;
        height: 50px;
    }

    p{
        text-align: justify;
        padding-left: 50px;
        padding-right: 50px;
    }

}
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/logo.jpg') }}">
        <div class="opcoes">

		<labelfor="">Nome:</label>
		<input type="text" name="name" value="{{$retira->name}}"><br/>
		<labelfor="">Endereco:</label>
        <input type="text" name="endereco" value="{{$retira->endereco}}" ><br/>
        <labelfor="">DDD:</label>
        <input type="text" name="ddd" value="{{$retira->ddd}}" ><br/>
        <labelfor="">Telefone:</label>
        <input type="text" name="telefone" value="{{$retira->telefone}}" ><br/>
        <labelfor="">E-mail:</label>
        <input type="text" name="email" value="{{$retira->email}}" ><br/>
        <labelfor="">Responsável:</label>
        <input type="text" name="responsavel" value="{{$retira->responsavel}}" ><br/>
        <labelfor="">Horário de Atendimento:</label>
        <input type="text" name="horario" value="{{$retira->horario}}" ><br/>
    
        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>