<!DOCTYPE html>
<html>
    <head>
        <title>Usuarios | Projeto para Web com PHP</title>
        <link rel="stylesheet"
             href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include 'includes/topo.php';
                        include 'includes/valida_login.php';
                        if ($_SESSION['login']['usuario']['adm'] !==){
                            header('Location: index.php');
                        }
                    ?>
                </div>
            </div>
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
                </div>
                <div class="col-md-10" style="padding-top: 50px
            <h2>Usuario</h2>
        </div>
</html>