<?php
//NO MOVER NADA CTM
session_start();
$mensaje="";

if(isset($_POST['btnAccion']))   
    switch ($_POST['btnAccion']) {
        case 'Agregar':
            # validacion id
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY) )){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="ID correcto".$ID."<br/>"; 
            }else{
                $mensaje.="ID incorrecto".$ID."<br/>";}

            if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY) )){
                $Nombre=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="nombre correcto".$Nombre."<br/>"; 
            }else{
                $mensaje.="nombre incorrecto".$Nombre."<br/>";  break;}
                
                
            if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY) )){
                $Precio=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="precio correcto".$Precio."<br/>"; 
            }else{
                $mensaje.="precio incorrecto".$Precio."<br/>";  break;}

            if(is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY) )){
                $Cantidad=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.="cantidad correcta".$Cantidad."<br/>"; 
            }else{
                $mensaje.="cantidad incorrecta".$Cantidad."<br/>";  break;}


                if (!isset($_SESSION['CARRITO'])) {
                    # SI no tienen nada
                    $producto=array(
                        'id'=>$ID,
                        'nombre'=>$Nombre,
                        'precio'=>$Precio,
                        'cantidad'=>$Cantidad
                    );
                    $_SESSION['CARRITO'][0]=$producto;
                }else{
                    $numeroProds=count($_SESSION['CARRITO']);
                    $producto=array(
                        'id'=>$ID,
                        'nombre'=>$Nombre,
                        'precio'=>$Precio,
                        'cantidad'=>$Cantidad
                );
                $_SESSION['CARRITO'][$numeroProds]=$producto;
                }
            break;
        
        case 'Eliminar':
            if(is_numeric( openssl_decrypt($_POST['ID'],COD,KEY) )){
                $ID=openssl_decrypt($_POST['ID'],COD,KEY);
                $mensaje.="ID correcto".$ID."<br/>"; 
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if($producto['id']==$ID){
                    unset($_SESSION['CARRITO'][$indice]);
                   //echo "<script>alert('Elemento borrado')</script>";
                }
            }

        }else{
                echo "incorrecto";
            }

        break;
        }
?>  
