<?php
   
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    include("conexion.php");
            
              
            $filas = mysqli_fetch_array(mysqli_query($conexion, "SELECT id FROM usuarios WHERE Usuarios = '$usuario' AND Contraseña = '$contraseña'"));
            echo $filas['id'];
    
    
            
    
?>