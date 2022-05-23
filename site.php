<link rel="stylesheet" href="site2.css">
<?php 
//NO LE MUEVAS AQUI CTM

include 'templates/cabecera.php';
include 'carrito.php';

?>

  <div class="page-content">
      <?php
        require "global/devuelvevariable.php";

        $listProductos = new devuelvevariable();
    
        $arrayProductos = $listProductos->get_Productos();
      
        ?>
        <?php foreach($arrayProductos as $producto){ ?>
          <div class="producto-container">
          <div class="col-3">
        
        <div class="card">
            <img
            title="Titulo producto"
            alt="titulo"
            class="card-img-top"
            src="<?php echo $producto["4"];?>"
            data-toggle="popover"
            data-content="<?php echo $producto["3"];?>"
            height="317"
            >
            <div class="card-body">
                <h2 class="card-name"><?php echo $producto["1"];?></h2>
                <h5 class="card-title">$<?php echo $producto["2"];?></h5>
                <p class="card-text">Descripcion</p>

                <form action=""  method="post">
                
                <div class="encriptaciones">

                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto["0"],COD,KEY) ;?>"> 
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto["1"],COD,KEY) ;?>"> 
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $producto["2"],COD,KEY);?>"> 
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt( 1,COD,KEY);?> "> 

                </div>

                <div class="btnagregar">

                <button class="agregar"
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit"> Agregar al carrito
                </button>

                </div>
                </form>
                
            </div>  
        </div>
           </div> 
        </div>
        <?php } ?>                                   
   </div>

   <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
   </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<?php 
include 'templates/pie.php'
?>