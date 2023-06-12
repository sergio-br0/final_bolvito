<?php
require '../../modelos/Empleado.php';

try {
    $empleado = new Empleado($_GET);
    $empleados = $empleado->buscar2();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

// Organizar los empleados por área
$empleadosPorArea = [];
foreach ($empleados as $empleado) {
    $area = $empleado['AREA_NOMBRE'];
    if (!isset($empleadosPorArea[$area])) {
        $empleadosPorArea[$area] = [];
    }
    $empleadosPorArea[$area][] = $empleado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .cuadro {
            border: 1px solid grey;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
    <title>Resultados</title>
</head>
<body>
    <div class="container">
        <?php foreach ($empleadosPorArea as $area => $empleadosArea) : ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cuadro">
                        <h2><?= $area ?></h2>
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>NO. </th>
                                    <th>NOMBRE</th>
                                    <th>DPI</th>
                                    <th>PUESTO</th>
                                    <th>EDAD</th>
                                    <th>SEXO</th>
                                    <th>SUELDO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($empleadosArea) > 0) : ?>
                                    <?php foreach ($empleadosArea as $key => $empleado) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $empleado['EMP_NOMBRE'] ?></td>
                                            <td><?= $empleado['EMP_DPI'] ?></td>
                                            <td><?= $empleado['PUE_DESCRIPCION'] ?></td>
                                            <td><?= $empleado['EMP_EDAD'] ?></td>
                                            <td><?= $empleado['EMP_SEXO'] ?></td>
                                            <td><?= $empleado['PUE_SUELDO'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="7">NO EXISTEN REGISTROS</td>
                                    </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/final_bolvito/vistas/empleados/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>
