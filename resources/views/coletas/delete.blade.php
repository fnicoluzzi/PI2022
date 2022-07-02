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
			
    <form action="{{route('excluir_coletas', ['id'=>$coleta->id])}}" method="POST">
        @csrf
		<labelfor="">Tem certeza que deseja excluir este Ponto de Coleta?</label><br/>
		<input type="text" name="name" value="{{$coleta->name}}"><br/>
        <button>Sim</button>
	</form>

        </div>
        <a href="/home">
            <img id="back" src="{{ asset('img/back.jpg') }}">
        </a>
    </div>
</body>
</html>