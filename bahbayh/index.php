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
        <form method="post" action="controller/usuarioController.php">
        <div>
        <h1>Cadastro de usuarios</h1>
            <div class="form-group"> 
                <input class="form-control" type="hidden" name="id" id="">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input class="form-control" type="password" name="senha" id="">
            </div>
            <div class="form-group">
                <label for="tipo_usuario">Usuario:</label>
                <select name="tipo_usuario" class="form-control">
                    <option>Selecione uma opção</option>
                    <option>Administrador</option>
                    <option>Normal</option>
                </select>
            </div>
            <div class="form-group">
                <br>
                <input class="form-control" type="submit" id="">
            </div>
        </div>
</form>
        <?php
        ?>
    </body>
</html>
