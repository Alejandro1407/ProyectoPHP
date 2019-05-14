<?php
	class interes{
		private $idTipoTransaccion;
		private $interes;
		private $nGratuitas;
 
		function __construct(){}
 
		public function getidTipoTransaccion(){
		  return $this->idTipoTransaccion;
		}
 
		public function setidTipoTransaccion($idTipoTransaccion){
			$this->idTipoTransaccion = $idTipoTransaccion;
		}
 
		public function getinteres(){
			return $this->interes;
		}
 
		public function setinteres($interes){
			$this->interes = $interes;
		}
 
		public function getnGratuitas(){
		return $this->nGratuitas;
		}
 
		public function setnGratuitas($nGratuitas){
			$this->nGratuitas = $nGratuitas;
		}
	}
?>