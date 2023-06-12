
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Asignacion_areas</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/asignacion_area/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                    <div class="col">
                        <label for="asig_area_id">Area</label>
                        <input type="number" name="asig_area_id" id="asig_area_id" class="form-control">
                    </div>
                </div>
            <div class="row mb-3">
                    <div class="col">
                        <label for="asig_emp_id">Nombre del empleado</label>
                        <input type="text" name="asig_emp_id" id="asig_empleado" class="form-control">
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