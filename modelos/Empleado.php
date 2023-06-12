<?php
require_once 'Conexion.php';

class Empleado extends Conexion{
    public $emp_id;
    public $emp_nombre;
    public $emp_dpi;
    public $emp_id_puesto;
    public $emp_edad;
    public $emp_sexo;
    public $emp_situacion;

    public function __construct($args = [] )
    {
        $this->emp_id = $args['emp_id'] ?? null;
        $this->emp_nombre = $args['emp_nombre'] ?? '';
        $this->emp_dpi = $args['emp_dpi'] ?? '';
        $this->emp_id_puesto = $args['emp_id_puesto'] ?? '';
        $this->emp_edad = $args['emp_edad'] ?? '';
        $this->emp_sexo = $args['emp_sexo'] ?? '';
        $this->emp_situacion = $args['emp_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO empleados(emp_nombre, emp_dpi, emp_id_puesto, emp_edad, emp_sexo) values('$this->emp_nombre','$this->emp_dpi', '$this->emp_id_puesto','$this->emp_edad','$this->emp_sexo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * from empleados where emp_situacion = 1 ";

        if($this->emp_nombre != ''){
            $sql .= " and emp_nombre like '%$this->emp_nombre%' ";
        }

        if($this->emp_dpi != ''){
            $sql .= " and emp_dpi = $this->emp_dpi ";
        }
      
        if($this->emp_id_puesto != ''){
            $sql .= " and emp_id_puesto = $this->emp_id_puesto ";
        }

        if($this->emp_edad != ''){
            $sql .= " and emp_edad = $this->emp_edad ";
        }

        if($this->emp_sexo != ''){
            $sql .= " and emp_sexo = $this->emp_sexo ";
        }

        if($this->emp_id != null){
            $sql .= " and emp_id = $this->emp_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE empleados SET emp_nombre = '$this->emp_nombre', emp_dpi = $this->emp_dpi, emp_id_puesto = $this->emp_id_puesto, emp_edad = $this->emp_edad, emp_sexo = $this->emp_sexo where emp_id = $this->emp_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE empleados SET emp_situacion = 0 where emp_id = $this->emp_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
