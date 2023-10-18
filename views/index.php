<?php
include "../includes/header.php";
?>
<!-- Begin Page Content -->
<div class="banner shadow"></div>
<div class="container mt-3">

    <!-- Page Heading -->
    <div class="mb-4">
        <h1 class="text-center">Panel Principal</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Total alumnos -->
        <div class="col-sm-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col align-middle">
                            <i class="bi bi-people-fill fs-2 text-body-secondary text-gray-300 align-middle"></i>
                        </div>
                        <div class="col-10 text-center">
                            <div class="fs-6 fw-bold text-dark text-uppercase mb-1">
                                Matrícula Total de Alumnos</div>
                            <div class="fs-2 mb-0 fw-bold text-gray-800">
                                <?php 
                                    
                                    include("db.php");
                                    $sql = "SELECT COUNT(id) FROM alumnos";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo $consulta[0];
                                    }

                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Total personal -->

        <div class="col-sm-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col">
                            <i class="bi bi-people-fill fs-2 text-body-secondary text-gray-300 align-middle"></i>
                        </div>
                        <div class="col-10 text-center">
                            <div class="fs-6 fw-bold text-primary text-uppercase mb-1">
                                Cantidad de Personal</div>
                            <div class="fs-2 mb-0 fw-bold text-gray-800">
                                <?php 
                                    
                                    include("db.php");
                                    $sql = "SELECT COUNT(id) FROM profesores";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo $consulta[0];
                                    }

                                ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

       
    </div>

</div>
</div>

<!-- End of Main Content -->
<?php include "../includes/footer.php";
?>