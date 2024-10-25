<?php
    Class Informe {
        //atributo
        public $conexion;

        //metodo constructor
        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        //metodos
        public function consulta(){
           $con = "SELECT * FROM informe ORDER BY nombre";
           $res = mysqli_query($this->conexion, $con);
           $vec = [];

           while($row = mysqli_fetch_array($res)){
            $vec[] = $row;
           }

           return $vec;
        }

        public function eliminar($id){
            $del = "DELETE FROM informe WHERE id_informe = $id";
            mysqli_query($this->conexion, $del);
            $vec = [];
            $vec['resultado'] = "OK";
            $vec['mensaje'] = "El informe ha sido eliminado";
            return $vec;
        } 

        public function insertar($params){
            $ins = "INSERT INTO informe(Nombre,fo_categoria,Peso,Edad) VALUES('$params->Nombre',$params->fo_categoria,$params->Peso,$params->Edad)";
            mysqli_query($this->conexion, $ins);
            $vec = [];
            $vec['resultado'] = "OK";
            $vec['mensaje'] = "El informe ha sido guardado";
            return $vec;
        }
            public function editar($id, $params){
            $editar = "UPDATE INFORME SET nombre = '$params->Nombre',$params->fo_categoria,$params->Peso,$params->Edad WHERE id_informe = $id";
            mysqli_query($this->conexion, $editar);
            $vec = [];
            $vec['resultado'] = "OK";
            $vec['mensaje'] = "El informe ha sido editado";
            return $vec;
        }

        public function filtro($valor){
            $filtro = "SELECT * FROM informe WHERE nombre LIKE '%$valor%'";
            $res = mysqli_query($this->conexion, $filtro);
            $vec = [];

            while($row = mysqli_fetch_array($res)){
                $vec[] = $row;
            }

        return $vec;
        }    }
    
    
?>