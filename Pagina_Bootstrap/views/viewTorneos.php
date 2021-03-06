<?php
  require_once('libs/Smarty.class.php');
/**
 *
 */
class ViewTorneos
{
  private $smarty;
  private $baseDir;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarTorneos($titulo,$torneos,$login,$username,$admin){
    $this->smarty->assign("titulo", $titulo);
    $this->smarty->assign("torneos", $torneos);
    $this->smarty->assign("login", $login);
    $this->smarty->assign("username", $username);
    $this->smarty->assign("admin", $admin);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('table-torneos.tpl');
  }

  function cargarVistaAdmin($torneos){
    $this->smarty->assign("torneos", $torneos);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('edicion-torneos.tpl');
  }

  function cargarVistaEditarAdmin($torneo){
    $this->smarty->assign("torneo", $torneo);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('admin-edit-torneo.tpl');
  }
}
?>
