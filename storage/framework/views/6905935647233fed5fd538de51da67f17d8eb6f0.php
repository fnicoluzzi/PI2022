<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        
    /* regras gerais*/
@media  all{
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
        <img src="<?php echo e(asset('img/logo.jpg')); ?>">
        <div class="opcoes">
            
	<form action="<?php echo e(route('registrar_retiras')); ?>" method="POST">
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

        </div>
        <a href="/home_adm">
            <img id="back" src="<?php echo e(asset('img/back.jpg')); ?>">
        </a>
    </div>
</body>
</html><?php /**PATH /var/www/html/PI2022/resources/views/retiras/create.blade.php ENDPATH**/ ?>