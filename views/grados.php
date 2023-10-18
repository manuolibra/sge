<?php include "../includes/header.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-bottom-info">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Lista de Aulas</h6>
                
                <?php if ($_SESSION["type"] != 3) { ?> <!-- Sólo el administrador -->
                    <br>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#grado">
                    <span class="glyphicon glyphicon-plus"></span> Agregar <i class="fa fa-plus"></i> </a></button>
                <?php }
                ?> 

            </div>
            <?php include "form_grado.php"; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='ver'>Acciones</th>
                                <th class='ver'>Grado</th>
                                <th class='ver'>Alumnos</th>
                                <th class='ver'>Docente</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM grados ");
                            while ($fila = mysqli_fetch_assoc($result)) :

                            ?>
                                <tr>
                                    <td>

                                        <?php if ($_SESSION["type"] != 3) { ?> <!-- Sólo el administrador y editor -->
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editar<?php echo $fila['id']; ?>" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="../includes/eliminar_grad.php?id=<?php echo $fila['id'] ?>">Eliminar</a></li>
                                            </ul>
                                        </div>
                                        <?php }
                                        ?>

                                    </td>

                                    <td><?php echo $fila['descripcion']; ?></td>

                                    <td><?php 
                                    
                                        include("db.php");
                                        $sql = sprintf("SELECT COUNT(id) FROM alumnos WHERE id_grado = %u", $fila['id']);
                                        $resultado = mysqli_query($conexion, $sql);
                                        while ($consulta = mysqli_fetch_array($resultado)) {
                                            echo $consulta[0];
                                        }

                                    ?></td>

                                    <td><?php

                                     include("db.php");
                                     $sql = sprintf("SELECT * FROM profesores WHERE id = %u", $fila['profesor']);
                                     $resultado = mysqli_query($conexion, $sql);
                                     while ($consulta = mysqli_fetch_array($resultado)) {
                                         echo $consulta['nombres'] . " " . $consulta['apellidos'];
                                     }
                                    
                                    ?></td>

                                    
                                </tr>
                                <?php include "editar_grado.php"; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>




                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->






    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>


<?php include "../includes/footer.php"; ?>

</html>