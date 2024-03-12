<?php
if($_POST){
    require_once '../model/usuarioModel.php';
    $usuario = new usuarioModel();
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setTipo_usuario($_POST['tipo_usuario']);
    $usuario->setId($_POST['id']);
    
}