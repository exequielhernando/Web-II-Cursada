
<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])){
        $usuarioNombre = $_POST['nombre'];
        $usuarioApellido =$_POST['apellido'];
        $usuarioEdad = $_POST['edad'];
        echo "<h1>Nombre: " .$usuarioNombre . "</h1></br>";
        echo "Apellido: " .$usuarioApellido . "</br>";
        echo "Edad: " .$usuarioEdad . "</br>";
    }

?>