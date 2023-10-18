<?php include "../includes/header.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 border-bottom-danger">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">Lista de Usuarios</h6>
                <br>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#user">
                    <span class="glyphicon glyphicon-plus"></span> Agregar usuario <i class="fa fa-user-plus"></i> </a></button>
            </div>
            <?php include "form_user.php"; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='ver'>Acciones</th>
                                <th class='ver'>Usuario</th>
                                <th class='ver'>Correo electrónico</th>
                                <th class='ver'>Tipo de Usuario</th>
                                <th class='ver'>Fecha de registro</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM users ");
                            while ($fila = mysqli_fetch_assoc($result)) :

                            ?>
                                <tr> 
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editar<?php echo $fila['id']; ?>" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="../includes/eliminar_user.php?id=<?php echo $fila['id'] ?>">Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $fila['usuario']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>

                                    <td><?php echo $fila['id_rol'] === '1' ? "Administrador" :($fila['id_rol'] === '2' ? "Editor" : "Lector"); ?></td>

                                    <td><?php echo $fila['fecha']; ?></td>

                                   
                                </tr>
                                <?php include "editar_user.php"; ?>
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