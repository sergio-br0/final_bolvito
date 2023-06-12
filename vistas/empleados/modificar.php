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
                <input type="hidden" name="em_id" value="<?= $empleados[0]['EMP_ID'] ?>" >
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
                        <label for="emp_puesto">Puesto</label>
                        <select name="emp_puesto" id="emp_puesto" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($empleados as $key => $empleado) : ?>
                                <option value="<?= $empleado['EMP_ID'] ?>"><?= $empleado['EMP_PUESTO'] ?></option>
                            <?php endforeach?>
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
                        <label for="emp_sexo">Sexo</label>
                        <select name="emp_sexo" id="emp_sexo" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($clientes as $key => $cliente) : ?>
                                <option value="<?= $cliente['SEX_ID'] ?>"><?= $cliente['SEX_DESCRIPCION'] ?></option>
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
