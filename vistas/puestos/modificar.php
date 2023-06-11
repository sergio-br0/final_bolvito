<?php
require '../../modelos/Puesto.php';
    try {
        $puesto = new Puesto($_GET);

        $puestos = $puesto->buscar();
        // echo "<pre>";
        // var_dump($puestos[0]['puesto_ID']);
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
        <h1 class="text-center">Modificar puestos</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/puesto/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="pue_id" value="<?= $puestos[0]['PUE_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="pue_descripcion">Nombre del Puesto</label>
                        <input type="text" name="pue_descripcion" id="pue_descripcion" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="pue_sueldo">Sueldo</label>
                        <input type="number" name="pue_sueldo" id="pue_sueldo" class="form-control">
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