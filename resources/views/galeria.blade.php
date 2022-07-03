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

	.horizontal{
		width:350px;
	}

	.vertical{
		height: 200px;
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
	<div class="container">
		<img src="{{ asset('img/logo.jpg') }}">
		<div class="opcoes">
			<h2>
				Galeria
			</h2>
			<a href="img/1.jpg">
				<img class="horizontal" src="{{ asset('img/1.jpg') }}">
			</a><br>
			<a href="img/2.jpg">
				<img class="vertical" src="{{ asset('img/2.jpg') }}">
			</a>
			<a href="img/3.jpg">
				<img class="vertical" src="{{ asset('img/3.jpg') }}">
			</a>
			<a href="img/4.jpg">
				<img class="vertical" src="{{ asset('img/4.jpg') }}">
			</a><br>
			<a href="img/6.jpg">
				<img class="horizontal" src="{{ asset('img/6.jpg') }}">
			</a><br>
			<a href="img/5.jpg">
				<img class="vertical" src="{{ asset('img/5.jpg') }}">
			</a>
			<a href="img/7.jpg">
				<img class="vertical" src="{{ asset('img/7.jpg') }}">
			</a>
			<a href="img/9.jpg">
				<img class="vertical" src="{{ asset('img/9.jpg') }}">
			</a><br>
			<a href="img/10.jpg">
				<img class="horizontal" src="{{ asset('img/10.jpg') }}">
			</a><br>
			<a href="img/8.jpg">
				<img class="horizontal" src="{{ asset('img/8.jpg') }}">
			</a>
		</div>
		<a href="/home">
			<img id="back" src="{{ asset('img/back.jpg') }}">
		</a>
	</div>
</body>
</html>