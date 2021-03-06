<?php
  require_once('libs/Smarty.class.php');
/**
 *
 */
class ViewUsuarios
{
  private $smarty;
  private $baseDir;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarRegistro($titulo){
    $this->smarty->assign("titulo", $titulo);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('registro.tpl');
  }

  function mostrarAdministracion($titulo){
    $this->smarty->assign("titulo", $titulo);
    $this->smarty->assign("baseDir", $this->baseDir);
    //$this->smarty->caching = true;
    //$this->smarty->cache_lifetime = 30;

    $this->smarty->display('admin.tpl');
  }

  function mostrarAdminError(){
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('adminError.tpl');
  }

  function mostrarRegisterTrue(){
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('registerTrue.tpl');
  }

  function cargarVistaAdmin($usuarios){
    $this->smarty->assign("usuarios", $usuarios);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('edicion-usuarios.tpl');
  }

  function cargarVistaEditarAdmin($usuario){
    $this->smarty->assign("usuario", $usuario);
    $this->smarty->assign("baseDir", $this->baseDir);

    $this->smarty->display('admin-edit-usuario.tpl');
  }
}
?>
