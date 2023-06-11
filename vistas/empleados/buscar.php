
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Empleados</h1>
        <div class="row justify-content-center">
            <form action="/final_bolvito/controladores/empleados/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nombre">Nombre del empleado</label>
                        <input type="text" name="emp_nombre" id="emp_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_dpi">Precio del producto</label>
                        <input type="number" name="emp_dpi" id="emp_dpi" class="form-control">
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