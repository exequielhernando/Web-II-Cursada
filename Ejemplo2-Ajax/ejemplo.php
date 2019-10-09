<?php
    if(isset($_POST['user']) && isset($_POST['pass']) && $_POST['user']!= "" && $_POST['pass'] != ""){
        $usuarioNombre = $_POST['user'];
        $usuarioPassword =$_POST['pass'];
        echo "<h1>Nombre: " .$usuarioNombre . "</h1></br>";
        echo "Password: " .$usuarioPassword . "</br>";
    }
    else{
        echo "Introduzca nombre y mail";
    }

?>