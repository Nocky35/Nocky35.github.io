<?php 
include 'global/conexion.php';
include 'global/config.php';
?>


<!DOCTYPE html>
<html lang="en">

    <link rel="stylesheet" href="site.css">
    <link rel="stykesheet" href="bootstrap/css/bootstrap-grid.css" />
    <link rel="stykesheet" href="bootstrap/css/bootstrap-grid.css.map" />
    <link rel="stykesheet" href="bootstrap/css/bootstrap-grid.min.css" />
    <link rel="stykesheet" href="bootstrap/css/bootstrap-grid.min.css.map"  />

    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Tortas "Los Tuki"</h1>
            </div>
            <nav class="menu">
            <a href="Index.php">Inicio</a>
               <a href="site.php">Pedir</a>
               <a href="contacto.php">Contacto</a>
               <a href="#"> Carrito </a>
            </nav>
        </div>
        
  </header>

  <br>
<div class="alert alert-success">Mensaje
    <a href="#"><span class="badge badge-success">Ver carrito</span>"</a>

</div>

  <br>
  <br>
  <br>
  <br>
  <body>
  <div class="page-content">
      <?php
        $consulta ="SELECT * FROM tblproductos";
        $result = mysqli_query($con,$consulta);
        $listProductos=$result->fetch_all();
        print_r($listProductos);
        ?>
    <div class="producto-container">
        
        <div class="col-3">
          <h3>Torta 1</h3>
          <img src="https://cdn1.matadornetwork.com/blogs/2/2019/08/Torta-comida-mexicana-1200x853.jpg">
           <h2> $50 </h2>
           <button class="agregar" class="btnAccion" value="Agregar" type="submit">Pedir </button>
        </div>  
    </div>

    <div class="producto-container">
        <div class="col-3">

        <h3>Torta 2</h3>
        <img src="https://cdn1.matadornetwork.com/blogs/2/2019/08/Torta-comida-mexicana-1200x853.jpg">
         <h2> $50 </h2>
            <button class="agregar" 
                    class="btnAccion" 
                    value="Agregar" 
                    type="submit">Pedir
                                            
            </button>
        </div>
    </div>

    <div class="producto-container">
        <div class="col-3">

        <h3>Torta 3</h3>
        <img src="https://cdn1.matadornetwork.com/blogs/2/2019/08/Torta-comida-mexicana-1200x853.jpg">
         <h2> $50 </h2>
            <button class="agregar" 
                 class="btnAccion" 
                 value="Agregar" 
                 type="submit">Pedir 
            </button>
         </div>
    </div>

    <div class="producto-container">
        <div class="col-3">

        <h3>Torta 4</h3>
        <img src="https://cdn1.matadornetwork.com/blogs/2/2019/08/Torta-comida-mexicana-1200x853.jpg">
         <h2> $50 </h2>
         <button class="agregar" class="btnAccion" value="Agregar" type="submit">Pedir </button>     
         
        </div>
    </div>
  </div>
<script> 
    

</script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
