<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<div class="container">
    <h1 class="text-center">Ingresar Puesto</h1>
    <div class="row justify-content-center">
        <form action="/final_bolvito/controladores/puesto/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
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
                    <button type="submit" class="btn btn-info w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once '../../includes/footer.php'?>
