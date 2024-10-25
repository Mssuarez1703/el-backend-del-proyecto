<?php
    Class Login {
        //atributo
        public $conexion;

        //metodo constructor
        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        //metodos
        public function consulta(){
           $con = "SELECT * FROM categoria ORDER BY nombre";
           $res = mysqli_query($this->conexion, $con);
           $vec = [];

           while($row = mysqli_fetch_array($res)){
            $vec[] = $row;
           }

           return $vec;
        }

        

    }
    
    
?>