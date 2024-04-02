<?php
require_once './controller/autenticationController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>CRUD</title>
    </head>
    <body>
        <header>
            <a href="index.php">Cadastro</a>
            <a style="color: red" href="controller/logoutcontroller.php?cod=logout">Logout</a>
        </header>
        <?php
        require_once './controller/usuarioController.php';
        @$usuario = $_REQUEST['usuario'];
        if($usuario==1){
            echo 'polenteira';
        }else if ($usuario==2){
            
        }
        ?>
    </body>
</html>
