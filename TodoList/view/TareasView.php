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
    function MostrarEditarTarea($Titulo, $Tarea){
        $this->Smarty->assign('Titulo',$Titulo);
        $this->Smarty->assign('Tarea',$Tarea);
        $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        //$smarty->debugging = true;
        $this->Smarty->display('templates/mostrarEditarTarea.tpl');
    }
}

?>