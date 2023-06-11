<?php
require_once 'Conexion.php';

class Asignacion_area extends Conexion{
    public $asig_area_id;
    public $asig_emp_id;
    public $asig_situacion;



    public function __construct($args = [] )
    {
        $this->asig_area_id = $args['asig_area_id'] ?? null;
        $this->asig_emp_id = $args['asig_emp_id'] ?? '';
        $this->asig_sueldo = $args['asig_sueldo'] ?? '';
        $this->asig_situacion = $args['asig_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO asigstos(asig_emp_id, asig_sueldo,) values('$this->asig_emp_id','$this->asig_sueldo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from asigstos where asig_situacion = 1 ";

        if($this->asig_emp_id != ''){
            $sql .= " and asig_emp_id like '%$this->asig_emp_id%' ";
        }

        if($this->asig_sueldo != ''){
            $sql .= " and asig_sueldo = $this->asig_sueldo ";
        }

        if($this->asig_area_id != null){
            $sql .= " and asig_area_id = $this->asig_area_id ";
        }



        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE asigstos SET asig_emp_id = '$this->asig_emp_id', asig_sueldo = $this->asig_sueldo where asig_area_id = $this->asig_area_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE asigstos SET asig_situacion = 0 where asig_area_id = $this->asig_area_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
