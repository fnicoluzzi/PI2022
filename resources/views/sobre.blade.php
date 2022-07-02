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
	<h2>
		Lorem Ipsum
	</h2>
	<p>
		"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
		"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."<br>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat eleifend est ut ultricies. Fusce risus mauris, commodo eu finibus ut, accumsan at leo. Curabitur tincidunt lorem ac gravida scelerisque. Etiam sodales turpis id felis convallis, in aliquet erat finibus. Suspendisse et mi a leo pharetra porttitor. Nam vestibulum justo vitae aliquet condimentum. Proin consectetur, libero scelerisque porta sagittis, orci ante hendrerit purus, sed tempor urna nisi ac turpis. Sed rhoncus, metus a vestibulum pulvinar, nunc urna molestie velit, et ullamcorper ex arcu ac ex. Integer ut pretium tortor. Mauris ultrices odio sed est euismod, eu laoreet odio eleifend. Nulla quis dui mollis, consectetur neque ut, egestas nulla. Nam fermentum odio non commodo blandit. In hac habitasse platea dictumst. Suspendisse et leo ante. Vestibulum blandit, justo sed molestie suscipit, mauris purus ullamcorper mauris, et auctor ipsum odio ac purus. Etiam pellentesque risus eu sapien ultricies, a volutpat tellus ultricies.
	<br>
		Aenean venenatis ut ante sed venenatis. Nulla facilisi. Ut et massa leo. Pellentesque non mauris molestie, venenatis neque non, lacinia mauris. Suspendisse ut felis sagittis, imperdiet elit eu, pulvinar eros. Morbi ultrices odio sed vulputate elementum. Nullam in semper ex. Nam a urna eget nisi lobortis pretium. Phasellus feugiat egestas urna eu bibendum. Etiam sit amet malesuada mi. Vestibulum ut bibendum ipsum, sed dapibus urna. Maecenas ut libero scelerisque massa malesuada tempor ac in lacus. Nunc in sollicitudin massa. Ut auctor lacus libero, vel consequat justo pellentesque vel.
	<br>
		Phasellus accumsan tellus quis tempus dignissim. Etiam lectus erat, rutrum ut rhoncus id, iaculis nec justo. Cras ut varius quam. Sed a placerat turpis. Proin in elit ultrices urna tincidunt sodales ac quis neque. Nam lorem est, tristique non rutrum ut, lacinia ut est. Suspendisse non augue efficitur, semper ipsum ut, suscipit sapien. Cras at dapibus lectus. Vestibulum maximus, quam a tincidunt dictum, mi mi sagittis diam, vitae cursus magna sem quis urna. Vivamus ac elementum metus, et pellentesque mauris. Fusce pellentesque euismod est, non tempus tortor semper quis. Nulla eget quam ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In tellus sapien, faucibus sit amet quam vel, posuere laoreet odio.
	<br>
		Generated 3 paragraphs, 354 words, 2367 bytes of Lorem Ipsum</p>
	</p>
	</div>
		
		<a href="/home">
			<img id="back" src="{{ asset('img/back.jpg') }}">
		</a>
	</div>
</body>
</html>