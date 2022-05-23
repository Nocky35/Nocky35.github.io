<?php
	require ("global/config.php");
	class conexionBD
	{
		private $host="localhost";
		private $db="tienda";
		private $user="root";
		private $pass="";
		protected $conexiondb;
		public function __construct(){
			$this-> conexiondb=new mysqli($this->host,$this->user,$this->pass,$this->db);

			if($this->conexiondb->connect_errno){
				echo "La conexion fallo".$this->conexiondb->coonnect_error;
				return;
			}
			
		}
	}
?>
