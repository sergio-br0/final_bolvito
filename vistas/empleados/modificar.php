<?php
require '../../modelos/Empleado.php';
    try {
        $empleado = new Empleado($_GET);

        $empleados = $empleado->buscar();
        // echo "<pre>";
        // var_dump($empleados[0]['empleado_ID']);
        // echo "</pre>";
        // exit;
        // $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar empleados</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/empleados/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="em_id" value="<?= $empleados[0]['EMPLEADO_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="empleado_nombre">Nombre del empleado</label>
                        <input type="text" name="empleado_nombre" id="empleado_nombre" class="form-control" value="<?= $empleados[0]['empleado_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="empleado_precio">Precio del empleado</label>
                        <input type="number" step="0.01" min="0" name="empleado_precio" id="empleado_precio" class="form-control" value="<?= $empleados[0]['empleado_PRECIO'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>
