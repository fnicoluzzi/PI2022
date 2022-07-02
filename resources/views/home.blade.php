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
			<a href="/coletas/index">
				<div class="esquerda">
					<span>
							Pontos<br>de<br>Coleta
					</span>
				</div>
			</a>
			<a href="/retiras/index">
				<div class="direita">
					<span>
							Onde<br>Retirar a<br>casinha?
					</span>
				</div>
			</a>
			<a href="">
				<div class="esquerda">
					<span>
							Galeria<br>de<br>Fotos
					</span>
				</div>
			</a>
			<a href="/sobre">
				<div class="direita">
					<span>
							Sobre<br>o<br>Projeto
					</span>
				</div>
			</a>
		</div>
		<a href="/home">
			<img id="back" src="{{ asset('img/back.jpg') }}">
		</a>
	</div>
</body>
</html>