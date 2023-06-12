<?php
require '../../modelos/Asignacion_area.php';
        try {
            $asignacion_area = new Asignacion_area();
            $producto = new Area();
            $asignacion_areas = $asignacion_area->buscar();
            $areas = $area->buscar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Asignacion de Empleados</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/asignacion_area/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="asig_id" value="<?= $asignacion_area[0]['ASIG_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nombre">Nombre_empleado</label>
                        <select name="emp_nombre" id="emp_nombre" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($empleados as $key => $empleado) : ?>
                                <option value="<?= $empleado['EMP_ID'] ?>"><?= $empleado['EMP_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nombre">Area</label>
                        <select name="area_nombre" id="area_nombre" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($areas as $key => $area) : ?>
                                <option value="<?= $area['AREA_ID'] ?>"><?= $area['AREA_NOMBRE'] ?></option>
                            <?php endforeach?>
                        </select>
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