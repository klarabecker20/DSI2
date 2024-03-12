<?php
class usuarioModel{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $tipo_usuario;
 public function getId() {
return $this->id;
}
public function getNome() {
return $this->nome;
}
public function getEmail() {
return $this->email;
}
public function getSenha() {
return $this->senha;
}
public function getTipo_usuario() {
return $this->tipo_usuario;
}
public function setId($id): void {
$this->id = $id;
}
public function setNome($nome): void {
$this->nome = $nome;
}
public function setEmail($email): void {
$this->email = $email;
}
public function setSenha($senha): void {
$this->senha = $senha;
}
public function setTipo_usuario($tipo_usuario): void {
$this->tipo_usuario = $tipo_usuario;
}

}