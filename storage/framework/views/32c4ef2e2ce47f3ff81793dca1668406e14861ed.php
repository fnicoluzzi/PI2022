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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <div class="container">
        <img src="<?php echo e(asset('img/logo.jpg')); ?>">
        <div class="opcoes">
            
	<form action="<?php echo e(route('registrar_coletas')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <labelfor="">CEP:</label><br/>
        <input id="cep" type="number" name="cep" required autofocus><br/>
        <labelfor="">Nome:</label><br/>
        <input id="name" type="text" name="name" required><br/>
        <labelfor="">Endereco:<br/>
        <input id="logradouro" type="text" name="endereco" required><br/>
        <labelfor="">DDD:</label><br/>
        <input id="ddd" type="number" size="2" maxlength="2" name="ddd" required><br/>
        <labelfor="">Telefone:<br/>
        <input id="telefone" type="telefone"  size="9" maxlength="9" name="telefone" required><br/>
        <labelfor="">E-mail:</label><br/>
        <input id="email" type="text" name="email" required><br/>
        <labelfor="">Respons??vel:<br/>
        <input id="responsavel" type="text" name="responsavel" required><br/>
        <labelfor="">Hor??rio de Atendimento:</label><br/>
        <input id="horario" type="text" name="horario" required><br/>
        <button>Salvar</button>
    </form>
    <script type="text/javascript">
    $("#cep").focusout(function(){
        //In??cio do Comando AJAX
        $.ajax({
            //O campo URL diz o caminho de onde vir?? os dados
            //?? importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/',
            //Aqui voc?? deve preencher o tipo de dados que ser?? lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS ?? referente a fun????o que ser?? executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O par??metro dentro da fun????o se refere ao nome da vari??vel
            //que voc?? vai dar para ler esse objeto.
            success: function(resposta){
                //Agora basta definir os valores que voc?? deseja preencher
                //automaticamente nos campos acima.
                $("#logradouro").val (resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                //Vamos incluir para que o N??mero seja focado automaticamente
                //melhorando a experi??ncia do usu??rio
                $("#numero").focus();
            }
        });
    });
</script>

        </div>
        <a href="/home_adm">
            <img id="back" src="<?php echo e(asset('img/back.jpg')); ?>">
        </a>
    </div>
</body>
</html><?php /**PATH /var/www/html/PI2022/resources/views/coletas/create.blade.php ENDPATH**/ ?>