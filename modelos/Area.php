<?php
require_once 'Conexion.php';

class Area extends Conexion{
    public $area_id;
    public $area_nombre;
    public $area_situacion;



    public function __construct($args = [] )
    {
        $this->area_id = $args['area_id'] ?? null;
        $this->area_nombre = $args['area_nombre'] ?? '';
        $this->area_situacion = $args['area_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO areas(area_nombre) values('$this->area_nombre')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from areas where area_situacion = 1 ";

        if($this->area_nombre != ''){
            $sql .= " and area_nombre like '%$this->area_nombre%' ";
        }

        if($this->area_id != null){
            $sql .= " and area_id = $this->area_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE areas SET area_nombre = '$this->area_nombre' where area_id = $this->area_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE areas SET area_situacion = 0 where area_id = $this->area_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
