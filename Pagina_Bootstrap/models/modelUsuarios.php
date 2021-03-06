<?php
class ModelUsuarios
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_usuarios;charset=utf8',
            'root', '');
  }

  function GetUsuarios()
  {
    $consulta = $this->db->prepare("SELECT * FROM usuarios");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function InsertarUsuario($nombre_usuario, $password)
  {
    $consulta = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, password) ".
                "VALUES (?,?)");
    $result = $consulta->execute(array($nombre_usuario,$password));
    //var_dump($consulta->errorInfo());
  }

  function InsertarUsuarioAdmin($nombre_usuario,$password,$admin)
  {
    $consulta = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, password, administrador) ".
                "VALUES (?,?,?)");
    $result = $consulta->execute(array($nombre_usuario, $password, $admin));
    //var_dump($consulta->errorInfo());
  }

  function BorrarUsuario($id_usuario)
  {
    $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=?");
    $sentencia->execute(array($id_usuario));
  }

  function GetUsuario($id_usuario)
  {
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
    $result = $consulta->execute(array($id_usuario));
    return $consulta->fetch();
  }

  function ModificarUsuario($id_usuario,$nombre_usuario,$password,$admin)
  {
    $sentencia = $this->db->prepare("UPDATE usuarios SET nombre_usuario=?,password=?,administrador=? WHERE id_usuario=?");
    $sentencia->execute(array($nombre_usuario,$password,$admin,$id_usuario));
    var_dump($sentencia->errorInfo());
  }

  function GetLogin($nombre_usuario)
  {
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE nombre_usuario=?");
    $result = $consulta->execute(array($nombre_usuario));
    return $consulta->fetch();
  }
}
?>
