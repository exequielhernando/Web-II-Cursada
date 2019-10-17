<?php
require_once('libs/Smarty.class.php');

class UsuarioView{
    
    private $Smarty;
    
    function __construct() {
        $this->Smarty = new Smarty();
    }
    
    function Mostrar($Titulo, $Usuarios){
        $this->Smarty->assign('Titulo',$Titulo);
        $this->Smarty->assign('Usuarios',$Usuarios);
        $this->Smarty->display('templates/mostrarUsuarios.tpl');
    }    
}
?>