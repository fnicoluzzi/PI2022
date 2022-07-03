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
        <input id="cep" type="text" name="name"><br/>
        <labelfor="">Nome:</label><br/>
        <input id="name" type="text" name="name"><br/>
        <labelfor="">Endereco:<br/>
        <input id="logradouro" type="text" name="endereco"><br/>
        <labelfor="">DDD:</label><br/>
        <input id="ddd" type="text" name="ddd"><br/>
        <labelfor="">Telefone:<br/>
        <input id="telefone" type="text" name="telefone"><br/>
        <labelfor="">E-mail:</label><br/>
        <input id="email" type="text" name="email"><br/>
        <labelfor="">Responsável:<br/>
        <input id="responsavel" type="text" name="responsavel"><br/>
        <labelfor="">Horário de Atendimento:</label><br/>
        <input id="horario" type="text" name="horario"><br/>
        <button>Salvar</button>
    </form>
    <script type="text/javascript">
    $("#cep").focusout(function(){
        //Início do Comando AJAX
        $.ajax({
            //O campo URL diz o caminho de onde virá os dados
            //É importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/',
            //Aqui você deve preencher o tipo de dados que será lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS é referente a função que será executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O parâmetro dentro da função se refere ao nome da variável
            //que você vai dar para ler esse objeto.
            success: function(resposta){
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#logradouro").val (resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                //Vamos incluir para que o Número seja focado automaticamente
                //melhorando a experiência do usuário
                $("#numero").focus();
            }
        });
    });
</script>

        </div>
        <a href="/home">
            <img id="back" src="<?php echo e(asset('img/back.jpg')); ?>">
        </a>
    </div>
</body>
</html><?php /**PATH /var/www/html/PI2022/resources/views/coletas/create.blade.php ENDPATH**/ ?>