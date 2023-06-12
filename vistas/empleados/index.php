<?php
require_once '../../modelos/Puestos.php';

try {
    $puesto = new Puesto();
    $puestos = $puesto->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Ingresar Empleado</h1>
    <div class="row justify-content-center">
        <form action="/final_bolvito/controladores/empleados/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="emp_nombre">Nombre del empleado</label>
                    <input type="text" name="emp_nombre" id="emp_nombre" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="emp_dpi">DPI</label>
                    <input type="number" name="emp_dpi" id="emp_dpi" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="emp_id_puesto">Puesto</label>
                    <select name="emp_id_puesto" id="emp_id_puesto" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($puestos as $key => $puesto) : ?>
                            <option value="<?= $puesto['PUE_ID'] ?>"><?= $puesto['PUE_DESCRIPCION'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="emp_edad">Edad</label>
                    <input type="number" name="emp_edad" id="emp_edad" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="emp_sexo">Género del Empleado</label>
                    <select name="emp_sexo" id="emp_sexo" class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-info w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once '../../includes/footer.php'?>
