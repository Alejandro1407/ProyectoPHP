<?php
// incluye la clase Db

require_once(Raiz.'/ProyectoPHP/lib/conexion.php');
 
	class CrudInteres{
		// constructor de la clase
		public function __construct(){}

		// método para mostrar todos los myInteress
		public function mostrar(){
			$db=new Conexion();
			$listamyInteres = [];
			$select=$db->ExecuteQuery('CALL ver_interes');
 
			foreach($select as $interes){
				$myInteres= new interes();
				$myInteres->setidTipoTransaccion($interes['id']);
				$myInteres->setidTipoTransaccion($interes['transaccion']);
				$myInteres->setinteres($interes['interes']);
				$myInteres->setnGratuitas($interes['gratuitas']);
				$listamyInteres[] =$myInteres;
			}
			return $listamyInteres;
		}
		
		public function buscar($id){
			$db=new Conexion();
			$listamyInteres = [];
			$select=$db->ExecuteQuery('CALL buscar_interes(?)',$id);
 
			foreach($select as $interes){
				$myInteres= new interes();
				$myInteres->setidTipoTransaccion($interes['id']);
				$myInteres->setTipoTransaccion($interes['transaccion']);
				$myInteres->setinteres($interes['interes']);
				$myInteres->setnGratuitas($interes['gratuitas']);
				$listamyInteres[] =$myInteres;
			}
			return $listamyInteres;
        }
        
		// método para actualizar un myInteres, recibe como parámetro el myInteres
		public function actualizar($interes){
			$db=new Conexion();
			$actualizar=$db->ExecuteUpdate('UPDATE interes SET interes= ?, nGratuitas=? WHERE idTipoTransaccion=?',$interes);
		}
	}
?>