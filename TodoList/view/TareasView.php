<?php

require_once('libs/Smarty.class.php');
  
class TareasView{
        private $Smarty;
        function __construct() {
            $this->Smarty = new Smarty();
        }
    function Mostrar($Titulo, $Tareas){
        $this->Smarty->assign('Titulo',$Titulo);
        $this->Smarty->assign('Tareas',$Tareas);

        $this->Smarty->display('templates/home.tpl');
      
    }
}

?>