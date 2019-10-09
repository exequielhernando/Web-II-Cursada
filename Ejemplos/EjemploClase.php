<?php
    $edades = array( 
        "juan" => 35, 
        "nico" => 17, 
        "julia" => 23 
    ); 
    
    function promedio($edades){ 
        $promedio = array_sum($edades) / count($edades);
          return $promedio;
    } 
    $resultado = promedio($edades);
    
    echo "Promedio: $resultado"; 
?>