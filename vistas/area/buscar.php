
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Areas</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/area/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nombre">Nombre del Area</label>
                        <input type="text" name="area_nombre" id="area_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>