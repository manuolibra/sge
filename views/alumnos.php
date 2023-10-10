<?php include "../includes/header.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumnos</h6>
                <br>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#alumno">
                    <span class="glyphicon glyphicon-plus"></span> Agregar <i class="fa fa-plus"></i> </a></button>
            </div>
            <?php include "form_alumno.php"; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Acciones</th>
                                <th>Cédula escolar</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Sexo</th>
                                <th>Nacionalidad</th>
                                <th>Edad</th>
                                <th>L. Nacimiento</th>
                                <th>F. Nacimiento</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Procede de:</th>
                                <th>Tipo</th>
                                <th>Nro. de Hermanos</th>
                                <th>Hermanos en el plantel</th>
                                <th>Enfermedades</th>
                                <th>Vacunas</th>
                                <th>¿Con quién vive?</th>
                                <th>CI Rep</th>
                                <th>Representante</th>
                                <th>Rep parentesco</th>
                                <th>Rep edad</th>
                                <th>Rep fecha n</th>
                                <th>Rep lugar n</th>
                                <th>Rep nacionalidad</th>
                                <th>Rep estado civil</th>
                                <th>Profesión</th>
                                <th>F. Inscripción</th>
                                <th>Grado</th>
                                <th>Fecha de Registro</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM alumnos ");
                            while ($fila = mysqli_fetch_assoc($result)) :

                            ?>
                                <tr>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ver<?php echo $fila['id']; ?>" href="#">Ver</a></li>
                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editar<?php echo $fila['id']; ?>" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="../includes/eliminar_al.php?id=<?php echo $fila['id'] ?>">Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $fila['cedula_escolar']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['apellido']; ?></td>
                                    <td><?php echo $fila['sexo']; ?></td>
                                    <td><?php echo $fila['nacionalidad']; ?></td>
                                    <td><?php echo $fila['edad']; ?></td>
                                    <td><?php echo $fila['lugar']; ?></td>
                                    <td><?php echo $fila['birthdate']; ?></td>
                                    <td><?php echo $fila['direccion']; ?></td>
                                    <td><?php echo $fila['telefono']; ?></td>
                                    <td><?php echo $fila['procede']; ?></td>
                                    <td><?php echo $fila['tipo']; ?></td>
                                    <td><?php echo $fila['nro_hermanos']; ?></td>
                                    <td><?php echo $fila['est_hermanos']; ?></td>
                                    <td><?php echo $fila['enfermedades']; ?></td>
                                    <td><?php echo $fila['vacunas']; ?></td>
                                    <td><?php echo $fila['vive']; ?></td>
                                    <td><?php echo $fila['id_rep']; ?></td>
                                    <td><?php echo $fila['rep']; ?></td>
                                    <td><?php echo $fila['parentesco']; ?></td>
                                    <td><?php echo $fila['rep_edad']; ?></td>
                                    <td><?php echo $fila['rep_nacimiento']; ?></td>
                                    <td><?php echo $fila['rep_lugar']; ?></td>
                                    <td><?php echo $fila['rep_nacionalidad']; ?></td>
                                    <td><?php echo $fila['estado_civil']; ?></td>
                                    <td><?php echo $fila['profesion']; ?></td>
                                    <td><?php echo $fila['inscripcion']; ?></td>
                                    <td><?php echo $fila['id_grado']; ?></td>
                                    <td><?php echo $fila['fecha']; ?></td>
                                </tr>
                                <?php include "ver_alumno.php"; ?>

                                <?php include "editar_alumno.php"; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                    </script>


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