<?php
if($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$nome = $_POST['nome'];
    $tipo_usuario = $_POST['tipo_usuario'];
    @$id = $_POST['id'];
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    if (isset($_POST['id'])) {
        //update
    } else {
        echo $tipo_usuario;
        $usuario->Autenticar($email, $senha,$tipo_usuario);
        
    }
}