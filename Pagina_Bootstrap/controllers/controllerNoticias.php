<?php
require_once('views/viewNoticias.php');
require_once('models/modelNoticias.php');

class ControllerNoticias
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewNoticias();
      $this->modelo = new ModelNoticias();
  }

  function ctrlVistaNoticias(){
    $noticias = $this->modelo->GetNoticias();
    $noticiasAMostrar = array();
    foreach ($noticias as $noticia) {
        $noticiasAMostrar[]= $noticia;
    }
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        //print_r($_SESSION);
        if ($_SESSION == null) {
          $this->vista->mostrarNoticias("Noticias MMA", $noticiasAMostrar,0,0,0);
        }
        else{
        $this->vista->mostrarNoticias("Noticias MMA", $noticiasAMostrar,$_SESSION['loggedin'],$_SESSION['username'],$_SESSION['admin']);
        }
    }
    else {
      //print_r($_SESSION);
      if ($_SESSION == null) {
        $this->vista->mostrarNoticias("Noticias MMA", $noticiasAMostrar,0,0,0);
      }
      else{
      $this->vista->mostrarNoticias("Noticias MMA", $noticiasAMostrar,$_SESSION['loggedin'],$_SESSION['username'],$_SESSION['admin']);
      }
    }
  }

  function agregarNoticia(){
    $titulo = $_POST["titulo"];
    $titulo_muted = $_POST["titulo_muted"];
    $detalle = $_POST["detalle"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $this->modelo->InsertarNoticia($titulo,$titulo_muted,$detalle,$autor,$imagen);
  }

  function modificarNoticia(){
    $titulo = $_POST["titulo"];
    $titulo_muted = $_POST["titulo_muted"];
    $detalle = $_POST["detalle"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $this->modelo->ModificarNoticia($_POST["id_noticia"],$titulo,$titulo_muted,$detalle,$autor,$imagen);
  }

  function borrarNoticia(){
    $id_noticia = $_POST["id_noticia"];
    $this->modelo->BorrarNoticia($id_noticia);
  }

  function getNoticias(){
    $datos = $this->modelo->GetNoticias();
    $noticias = array();
    foreach ($datos as $dato) {
        $noticias[]= $dato;
    }
    return $noticias;
  }

  function cargarNoticiasVista(){
    $noticias = $this->getNoticias();
    $this->vista->cargarVista($noticias);
  }
}
?>
