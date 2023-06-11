<?php
require '../../modelos/Area.php';
    try {
        $area = new Area($_GET);

        $areas = $area->buscar();
        // echo "<pre>";
        // var_dump($areas[0]['area_ID']);
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
        <h1 class="text-center">Modificar areas</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/area/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="area_id" value="<?= $areas[0]['AREA_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nombre">Nombre del area</label>
                        <input type="text" name="area_nombre" id="area_nombre" class="form-control">
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
