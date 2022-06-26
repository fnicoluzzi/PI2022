<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastrar Ponto de Coleta</title>
</head>
<body>
	<form action="<?php echo e(route('registrar_coletas')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
	</form>
</body>
</html><?php /**PATH /var/www/html/PI2022/resources/views/coletas/create.blade.php ENDPATH**/ ?>