<?php
require_once('views/viewTorneos.php');
require_once('models/modelTorneos.php');

class ControllerTorneos
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewTorneos();
      $this->modelo = new ModelTorneos();
  }

  function ctrlVistaTorneos(){
    $torneos = $this->modelo->GetTorneos();
    $torneosAMostrar = array();
    foreach ($torneos as $torneo) {
        $torneosAMostrar[]= $torneo;
    }
    session_start();
    if ($_SESSION == null) {
    $this->vista->mostrarTorneos("Fechas Torneos", $torneosAMostrar,0,0,0);
    }
    else{
    $this->vista->mostrarTorneos("Fechas Torneos", $torneosAMostrar,$_SESSION['loggedin'],$_SESSION['username'],$_SESSION['admin']);
    }
  }

  function agregarTorneo(){
    $nombre_torneo = $_POST["nombre_torneo"];
    $lugar = $_POST["lugar"];
    $fecha_torneo = $_POST["fecha_torneo"];
    $this->modelo->InsertarTorneo($nombre_torneo,$lugar,$fecha_torneo);
  }

  function modificarTorneo($id_torneo){
    $nombre_torneo = $_POST["nombre_torneo"];
    $lugar = $_POST["lugar"];
    $fecha_torneo = $_POST["fecha_torneo"];
    $this->modelo->ModificarTorneo($id_torneo,$nombre_torneo,$lugar,$fecha_torneo);
    $this->cargarTorneosVista();
  }

  function eliminarTorneo($id_torneo){
    $this->modelo->BorrarTorneo($id_torneo);
    $this->cargarTorneosVista();
  }

  function getTorneos(){
    $datos = $this->modelo->GetTorneos();
    $torneos = array();
    foreach ($datos as $dato) {
        $torneos[]= $dato;
    }
    return $torneos;
  }

  function cargarTorneosVista(){
    $torneos = $this->getTorneos();
    $this->vista->cargarVistaAdmin($torneos);
  }

  function cargarEditarTorneo($id){
    $torneo = $this->modelo->GetTorneo($id);
    $this->vista->cargarVistaEditarAdmin($torneo);
  }
}
?>
