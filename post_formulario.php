<!DOCTYPE html>
<html>
    <head>
        <title>Post | Projeto para Web com PHP</title>
        <link rel="stylesheet"
              href="lib/bottstrap-4.2.1-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include 'includes/topo.php';
                        include 'includes/valida_login.php';
                    ?>

                </div>
            </div>
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
        </div>
        <div class="col-md-10" style="padding-top: 50px;">
            <?php 
                require_once 'includes/funcoes.php';
                require_once 'core/conexao_mysql.php';
                require_once 'core/sql.php';
                require_once 'core/mysql.php';

                foreach($_GET as $indice => $dado){
                    $indice = limparDados($dado);
                }

                if(!empty($id)){
                    $id = (int)$id;

                    $criterio = [
                        ['id', '=',$id]
                    ];

                    $retorno = buscar(
                        'post',
                        ['*'],
                        $criterio
                    );

                    $entidade = $retorno[0];
                }
            ?>
            <h2>Post</h2>
            <form method="post" action="core/post_repositorio.php">
                <input type="hidden" name="acao"
                        value="<?php echo empty($id) ? 'insert' : 'update' ?>">
                <input type="hidden" name="id"
                        value="<?php echo $entidade['id'] ?? '' ?>">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input class="form-control" type="text"
                        require="required" id="titulo" name="titulo"
                        value="<?php echo $entidade['titulo'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea class="form-control" type="text"
                        require="required" id="texto" name="texto" rows="5">
                        <?php echo $entidade['texto'] ?? '' ?>
                    </textarea>
                </div>

    </body>
</html>