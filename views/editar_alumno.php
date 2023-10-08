<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Alumno</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Apellidos</label><br>
                                <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $fila['apellido']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cédula escolar</label><br>
                                <input type="text" name="cedula_escolar" id="cedula_escolar" class="form-control" value="<?php echo $fila['cedula_escolar']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Sexo</label><br>
                                <input type="text" name="sexo" id="sexk" class="form-control" value="<?php echo $fila['sexo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nacionalidad</label><br>
                                <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="<?php echo $fila['nacionalidad']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Edad</label><br>
                                <input type="number" name="edad" id="edad" class="form-control" value="<?php echo $fila['edad']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar de Nacimiento</label><br>
                                <input type="text" name="lugar" id="lugar" class="form-control" value="<?php echo $fila['lugar']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Nacimiento</label><br>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?php echo $fila['birthdate']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Dirección</label><br>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $fila['direccion']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Teléfono</label><br>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $fila['telefono']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Procede de:</label><br>
                                <input type="text" name="procede" id="procede" class="form-control" value="<?php echo $fila['procede']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo</label><br>
                                <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $fila['tipo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nro. de Hermanos</label><br>
                                <input type="text" name="nro_hermanos" id="nro_hermanos" class="form-control" value="<?php echo $fila['nro_hermanos']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Hermanos en el plantel</label><br>
                                <input type="text" name="est_hermanos" id="est_hermanos" class="form-control" value="<?php echo $fila['est_hermanos']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Enfermedades</label><br>
                                <input type="text" name="enfermedades" id="enfermedades" class="form-control" value="<?php echo $fila['enfermedades']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Vacunas</label><br>
                                <input type="text" name="vacunas" id="vacunas" class="form-control" value="<?php echo $fila['vacunas']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">¿Con quién vive?</label><br>
                                <input type="text" name="vive" id="vive" class="form-control" value="<?php echo $fila['vive']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">C.I. Representante</label><br>
                                <input type="text" name="id_rep" id="id_rep" class="form-control" value="<?php echo $fila['id_rep']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Representante</label><br>
                                <input type="text" name="rep" id="rep" class="form-control" value="<?php echo $fila['rep']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Parentesco</label><br>
                                <input type="text" name="parentesco" id="parentesco" class="form-control" value="<?php echo $fila['parentesco']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Edad</label><br>
                                <input type="text" name="rep_edad" id="rep_edad" class="form-control" value="<?php echo $fila['rep_edad']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Nacimiento</label><br>
                                <input type="date" name="rep_nacimiento" id="rep_nacimiento" class="form-control" value="<?php echo $fila['rep_nacimiento']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar de Nacimiento</label><br>
                                <input type="text" name="rep_lugar" id="rep_lugar" class="form-control" value="<?php echo $fila['rep_lugar']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nacionalidad</label><br>
                                <input type="text" name="rep_nacionalidad" id="rep_nacionalidad" class="form-control" value="<?php echo $fila['rep_nacionalidad']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estado Civil</label><br>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control" value="<?php echo $fila['estado_civil']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Profesion</label><br>
                                <input type="text" name="profesion" id="profesion" class="form-control" value="<?php echo $fila['profesion']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Inscripción</label><br>
                                <input type="date" name="inscripcion" id="inscripcion" class="form-control" value="<?php echo $fila['inscripcion']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Grado</label><br>
                                <select name="id_grado" id="id_grado" class="form-control" required>
                                    <option <?php echo $fila['id_grado'] === 'id_grado' ? 'selected' : ''; ?> value="<?php echo $fila['id_grado']; ?>"><?php echo $fila['id_grado']; ?></option>
                                    <?php

                                    include("db.php");

                                    $sql = "SELECT * FROM grados ";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo '<option value="' . $consulta['id'] . '">' . $consulta['descripcion'] . '</option>';
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br>
                    <input type="hidden" name="accion" value="editar_alum">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editForm(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<script>
    function editForm(id) {
        var datosFormulario = $("#editForm" + id).serialize();

        $.ajax({
            url: "../includes/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        location.assign('alumnos.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function() {
                alert("Error de comunicacion con el servidor");
            }
        });
    }
</script>