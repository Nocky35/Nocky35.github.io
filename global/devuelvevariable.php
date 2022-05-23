<?php 
require("global/conexion.php");
        
      class devuelvevariable extends conexionBD
        {
          public function __construct() //constructor versión moderna php 7.0 en adelante
          {
              parent::__construct(); //este es el constructor del archivo conexion.php
          }

        public function get_productos(){
           $result=$this->conexiondb->query("SELECT * FROM tblproductos");
           $listProductos=$result->fetch_all();
           return $listProductos;
           
        }
        }
?>  