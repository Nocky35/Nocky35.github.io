
<link rel="stylesheet" href="css/carrito.css">

<?php 
include 'global/config.php';
include 'templates/cabecera.php';
include 'carrito.php';
?>
<br>
<body class="fondo">
<div class="containercarrito">
<h3>Carrito de compras</h3>

<?php if(!empty($_SESSION['CARRITO'])){?>
<table class="table table-light">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%">Cantidad</th>
            <th width="20%">Precio</th>
            <th width="20%">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            <td width="40%"><?php echo $producto["nombre"] ?></td>
            <td width="15%"><?php echo $producto["cantidad"] ?></td>
            <th width="20%"><?php echo $producto["precio"] ?></td>
            <td width="20%"><?php echo number_format($producto["precio"]*$producto["cantidad"],2); ?></td>
            <td width="5%">
                
            
            <form action="" method="post">

                <input type="hidden" 
                name="ID"
                id="ID"  
                value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                <div class="divbtneliminar">
            <button 
            class="btneliminar" 
            type="submit"
            name="btnAccion"
            value="Eliminar">Limpiar pedido </button></div>
            </form>
            </td>
        </tr>
        <?php $total=$total+($producto["precio"]*$producto["cantidad"]);?>
       <?php }?>
        <tr>
            <td colspan="3" align="right"><h3 class="celdatotal">Total</h3></td>
            <td align="right"><h3 class="celdatotal">$<?php echo number_format($total,2); ?></h3></td>
            <td></td>
        </tr>
    </tbody>

</table>
<br/><br/><br/>

<form action="" class="">
<label type="label" name="label"><h3 class="celdatotal">Escriba un correo para proceder a pagar.</h3></label>
<br/>
<input type="email" name="email" id="email" value="" size="30" required placeholder="Correo">
<br/>
<button type="submit" value="Enviar" name="Enviar" class="Enviar">Enviar</button>

</form>
<?php }else{ ?>
    <div class="<div class="alert alert-primary" role="alert">
        No hay productos en el carrito.
    </div> 
    <?php }?>
</div>
</body>

<?php 
include 'templates/pie.php'
?>