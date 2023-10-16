<?php include "../includes/header.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" id="barra">
                <h6 class="m-0 font-weight-bold text-primary">Personal del Plantel</h6>
                
                <?php if ($_SESSION["type"] != 3) { ?>
                    <br>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#prof">
                    <span class="glyphicon glyphicon-plus"></span> Agregar <i class="fa fa-plus"></i> </a></button>
                <?php }
                ?> 

            </div>
            <?php include "form_prof.php"; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='ver'>Acciones</th>
                                <th class='ver'>Nombre completo</th>
                                <th class='ver'>Cédula de Identidad</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Lugar de Nacimiento</th>
                                <th>Edad</th>
                                <th>Estado Civil</th>
                                <th>Nacionalidad</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Nivel de Educación</th>
                                <th>Mención Académica</th>
                                <th>Postgrado</th>
                                <th>Cursos</th>
                                <th class="ver">Tiempo de Servicio</th>
                                <th class="ver">Fecha de Ingreso</th>
                                <th class="ver">Tipo de Personal</th>
                                <th>Cargo</th>
                                <th>Lugar donde cobra</th>
                                <th>Lugar donde labora</th> 
                                <th>Denominación de cargo</th>
                                <th>Código</th>       
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM profesores ");
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
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ver<?php echo $fila['id']; ?>" href="#">Ver</a></li>
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editar<?php echo $fila['id']; ?>" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="../includes/eliminar_prof.php?id=<?php echo $fila['id'] ?>">Eliminar</a></li>
                                            </ul>
                                        </div>
                                        <?php }
                                        ?>

                                        <?php if ($_SESSION["type"] == 3) { ?> <!-- Sólo el lector -->
                                            <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ver<?php echo $fila['id']; ?>" href="#"><i class="bi bi-eye"></i></a>
                                        <?php }
                                        ?> 

                                    </td>
                                    <td><?php echo $fila['cedula']; ?></td>
                                    <td><?php echo $fila['nombres'] . " " . $fila['apellidos']; ?></td>
                                    <td><?php echo $fila['cedula']; ?></td>
                                    <td><?php echo $fila['fecha_na']; ?></td>
                                    <td><?php echo $fila['lugar_na']; ?></td>
                                    <td><?php echo $fila['edad']; ?></td>
                                    <td><?php echo $fila['estado_civil']; ?></td>
                                    <td><?php echo $fila['curp']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>
                                    <td><?php echo $fila['telefono']; ?></td>
                                    <td><?php echo $fila['direccion']; ?></td>
                                    <td><?php echo $fila['niv_edu']; ?></td>
                                    <td><?php echo $fila['est_post']; ?></td>
                                    <td><?php echo $fila['cursos']; ?></td>
                                    <td><?php echo $fila['t_servicio']; ?></td>
                                    <td><?php echo $fila['f_ingreso']; ?></td>
                                    <td><?php echo $fila['tipo_p']; ?></td>
                                    <td><?php echo $fila['cargo']; ?></td>
                                    <td><?php echo $fila['l_cobra']; ?></td>
                                    <td><?php echo $fila['l_labora']; ?></td>
                                    <td><?php echo $fila['d_cargo']; ?></td>
                                    <td><?php echo $fila['codigo']; ?></td>
                                </tr>
                                <?php include "ver_profesor.php"; ?>
                                <?php include "editar_prof.php"; ?>
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