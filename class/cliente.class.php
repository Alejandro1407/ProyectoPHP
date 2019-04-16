<?php
    class cliente{
        private $_producto = array();
        private $_nomProduct;
        private $_saldo;
        private $_fecha;

        public function getNombreProducto(){
            return $this->_nomProduct;
        }

        public function setNombreProducto($nombre){
            $this->_nomProduct = $nombre;
        }

        public function getFehcaCompra(){
            return $this->_fecha;
        }

        public function setFehcaCompra($fecha){
            $this->_fecha = $fecha;
        }

        public function addProducto($producto){
            return $this->_producto[] = $producto;
        }

        public function stockUp($precio){
            foreach($this->_producto as $producto){
                $producto->addStock($precio);
            }
        }

        public function addStock($cantidad){
            $this->_saldo += $cantidad;
        }

        public function vender($precio) {
            if($this->_saldo > 0){
                $this->_saldo -= $precio;
                return true;
            }
            else {
                return false;
            }
        }

        public function depositar($depositar) {
            if($this->_saldo > 0){
                $this->_saldo += $depositar;
                return true;
            }
            else {
                return false;
            }
        }

        public function getSaldo(){
            return $this->_saldo;
        }
    }
?>