<?php
require_once 'Conexion.php';

class Puesto extends Conexion{
    public $pue_id;
    public $pue_descripcion;
    public $pue_sueldo;
    public $pue_situacion;



    public function __construct($args = [] )
    {
        $this->pue_id = $args['pue_id'] ?? null;
        $this->pue_descripcion = $args['pue_descripcion'] ?? '';
        $this->pue_sueldo = $args['pue_sueldo'] ?? '';
        $this->pue_situacion = $args['pue_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO puestos(pue_descripcion, pue_sueldo,) values('$this->pue_descripcion','$this->pue_sueldo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from puestos where pue_situacion = 1 ";

        if($this->pue_descripcion != ''){
            $sql .= " and pue_descripcion like '%$this->pue_descripcion%' ";
        }

        if($this->pue_sueldo != ''){
            $sql .= " and pue_sueldo = $this->pue_sueldo ";
        }

        if($this->pue_id != null){
            $sql .= " and pue_id = $this->pue_id ";
        }



        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE puestos SET pue_descripcion = '$this->pue_descripcion', pue_sueldo = $this->pue_sueldo where pue_id = $this->pue_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE puestos SET pue_situacion = 0 where pue_id = $this->pue_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
