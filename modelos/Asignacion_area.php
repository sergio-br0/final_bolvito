<?php
require_once 'Conexion.php';

class Asignacion_area extends Conexion{
    public $asig_id;
    public $asig_area_id;
    public $asig_emp_id;
    public $asig_situacion;



    public function __construct($args = [] )
    {
        $this->asig_id = $args['asig_id'] ?? null;
        $this->asig_area_id = $args['asig_area_id'] ?? '';
        $this->asig_emp_id = $args['asig_emp_id'] ?? '';
        $this->asig_situacion = $args['asig_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO asignacion_area (asig_area_id, asig_emp_id,) values('$this->asig_area_id','$this->asig_emp_id')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from asignacion_area  where asig_situacion = 1 ";

        if($this->asig_area_id != ''){
            $sql .= " and asig_area_id like '%$this->asig_area_id%' ";
        }

        if($this->asig_emp_id != ''){
            $sql .= " and asig_emp_id = $this->asig_emp_id ";
        }

        if($this->asig_id != null){
            $sql .= " and asig_id = $this->asig_id ";
        }



        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE asignacion_area  SET asig_area_id = '$this->asig_area_id', asig_emp_id = $this->asig_emp_id where asig_id = $this->asig_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE asignacion_area  SET asig_situacion = 0 where asig_id = $this->asig_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
