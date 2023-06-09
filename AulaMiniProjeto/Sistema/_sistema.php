<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="./css/estiloSistema.css">
    <title>Sistema</title>
</head>
<body>  
    <div class="container">
        <div class="row mt-2">
            <?php
            include_once('../Login/login_autenticar.php');
            include_once('_topo.php');
            ?>
        </div>
        <div class="row mt-2">
            <div class="col-sm-2" id="menu">
                <?php include_once('_menu.php')?>
            </div>
            <div class="col-sm-10" id="conteudo">
                <?php
                if(isset($_GET['tela']))
                {
                    if($_GET['tela']=='usuario')
                    {
                        include_once('../TelaUsuario.php');
                    }
                    else if($_GET['tela']=='categoria')
                    {
                        include_once('../TelaCategoria.php');
                    }
                    else if($_GET['tela']=='produto')
                    {
                        include_once('../TelaProduto.php');
                    }
                    else if($_GET['tela']=='historico')
                    {
                        include_once('../TelaHistorico.php');
                    }
                    else if($_GET['tela']=='sair')
                    {
                        include_once('_inicio.php');
                    }
                }
                else
                {
                    include_once('_inicio.php');
                }
                ?>
            </div>
        </div>
        <div class="row mt-2">
            <?php include_once('_rodape.php')?>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>