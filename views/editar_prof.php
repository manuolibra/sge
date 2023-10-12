<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Profesor</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">


                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Cédula</label>
                                <input type="text" id="cedula" name="cedula" class="form-control" value="<?php echo $fila['cedula']; ?>" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $fila['nombres']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Apellidos</label><br>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $fila['apellidos']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Correo</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nacionalidad</label><br>
                                <input type="text" name="curp" id="curp" class="form-control" value="<?php echo $fila['curp']; ?>" required>
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
                                <label for="password">Fecha de Nacimiento</label><br>
                                <input type="date" name="fecha_na" id="fecha_na" class="form-control" value="<?php echo $fila['fecha_na']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar de Nacimiento</label><br>
                                <input type="text" name="lugar_na" id="lugar_na" class="form-control" value="<?php echo $fila['lugar_na']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estado Civil</label><br>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control" value="<?php echo $fila['estado_civil']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Dirección</label><br>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $fila['direccion']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nivel de Educación</label><br>
                                <input type="text" name="niv_edu" id="niv_edu" class="form-control" value="<?php echo $fila['niv_edu']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Mención Académica</label><br>
                                <input type="text" name="m_acad" id="m_acad" class="form-control" value="<?php echo $fila['m_acad']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estudio de Postgrado</label><br>
                                <input type="text" name="est_post" id="est_post" class="form-control" value="<?php echo $fila['est_post']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cursos realizados</label><br>
                                <input type="text" name="cursos" id="cursos" class="form-control" value="<?php echo $fila['cursos']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tiempo de Servicio</label><br>
                                <input type="text" name="t_servicio" id="t_servicio" class="form-control" value="<?php echo $fila['t_servicio']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Ingreso</label><br>
                                <input type="date" name="f_ingreso" id="f_ingreso" class="form-control" value="<?php echo $fila['f_ingreso']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo de Personal</label><br>
                                <input type="text" name="tipo_p" id="tipo_p" class="form-control" value="<?php echo $fila['tipo_p']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cargo</label><br>
                                <input type="text" name="cargo" id="cargo" class="form-control" value="<?php echo $fila['cargo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar en donde cobra</label><br>
                                <input type="text" name="l_cobra" id="l_cobra" class="form-control" value="<?php echo $fila['l_cobra']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar donde labora</label><br>
                                <input type="text" name="l_labora" id="l_labora" class="form-control" value="<?php echo $fila['l_labora']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Denominación de Cargo</label><br>
                                <input type="text" name="d_cargo" id="d_cargo" class="form-control" value="<?php echo $fila['d_cargo']; ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Código</label><br>
                                <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $fila['codigo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <br>
                    <input type="hidden" name="accion" value="editar_profe">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editForm(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
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
                        location.assign('profesores.php');
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