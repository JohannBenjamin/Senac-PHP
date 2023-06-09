<?php
    $idCampo = '';
    $nomeCampo = '';
    $statusCampo = '';
    $obsCampo = '';
    $msg = 'Execute uma operação...';

    if($_POST)
    {
        $btn = $_POST['btn'];
        if($btn == 'buscar')
        {
            $msg = 'Busca realizada com sucesso!';
            include_once('../PHPCategoria/PesquisarCategoria.php');
        }
        if($btn == 'cadastrar')
        {
            include_once('../PHPCategoria/CadastrarCategoria.php');
            if($situacao)
            {
                $idCampo = $id;
                include_once('../PHPCategoria/PesquisarCategoria.php');
            }
        }
        if($btn == 'alterar')
        {
            include_once('../PHPCategoria/AlterarCategoria.php');
            if($situacao)
            {
                $idCampo = $id;
                include_once('../PHPCategoria/PesquisarCategoria.php');
            }
        }
        if($btn == 'excluir')
        {
            include_once('../PHPCategoria/DeletarCategoria.php');
        }
    }
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Gerenciamento de Categorias</h1>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-3">
                    <input type="number" name="txtId" id="txtId" class="form-control" min="0" placeholder="Id" value="<?=$idCampo?>">
                </div>
                <div class="col-sm-9">
                    <button id="btnBuscar" name="btn" class="btn btn-primary" formaction="_sistema.php?tela=categoria" value="buscar">&#128269;</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-9">
                    <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Nome" value="<?=$nomeCampo?>">
                </div>
                <div class="col-sm-3">
                    <select name="txtStatus" class="form-control" id="txtStatus">
                        <option value="">-- Selecione um Status --</option>
                        <option value="Ativo" <?=($statusCampo=="Ativo"?"selected":"")?>>Ativo</option>
                        <option value="Inativo" <?=($statusCampo=="Inativo"?"selected":"")?>>Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" rows="5" class="form-control" placeholder="Observações"><?=$obsCampo?></textarea>
                </div>
            </div>
            <div class="row mt-3">
            <div class="col-sm-6">
                    <div class="col-sm-12 text-center p-1" style="background-color: lightgray; border-radius: 10px;">
                        <h5><?=$msg?></h5>
                    </div>
                </div>
                <div class="col-sm-6 text-end">
                    <button id="btnCadastrar" name="btn" class="btn btn-success" formaction="_sistema.php?tela=categoria" value="cadastrar">Cadastrar</button>
                    <button id="btnAlterar" name="btn" class="btn btn-secondary" formaction="_sistema.php?tela=categoria" value="alterar">Alterar</button>
                    <button id="btnLimpar" name="btn" class="btn btn-warning" formaction="_sistema.php?tela=categoria" value="limpar">Limpar</button>
                    <button id="btnExcluir" name="btn" class="btn btn-danger" formaction="_sistema.php?tela=categoria" value="excluir">Excluir</button>
                    <button id="btnSair" name="btn" class="btn btn-dark" formaction="" value="sair">Sair</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../js/bootstrap.js"></script>