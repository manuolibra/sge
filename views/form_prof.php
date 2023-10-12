<div class="modal fade" id="prof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo profesor</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="profForm">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="cedula" class="form-label">Cédula</label>
                                <input type="text" id="cedula" name="cedula" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombre</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="apellidos">Apellidos</label><br>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="correo">Correo</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nacionalidad</label><br>
                                <input type="text" name="curp" id="curp" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Edad</label><br>
                                <input type="number" name="edad" id="edad" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Nacimiento</label><br>
                                <input type="date" name="fecha_na" id="fecha_na" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar de Nacimiento</label><br>
                                <input type="text" name="lugar_na" id="lugar_na" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estado Civil</label><br>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Dirección</label><br>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nivel de Educación</label><br>
                                <input type="text" name="niv_edu" id="niv_edu" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Mención Académica</label><br>
                                <input type="text" name="m_acad" id="m_acad" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estudio de Postgrado</label><br>
                                <input type="text" name="est_post" id="est_post" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cursos Realizados</label><br>
                                <input type="text" name="cursos" id="cursos" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tiempo de Servicio</label><br>
                                <input type="text" name="t_servicio" id="t_servicio" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Ingreso</label><br>
                                <input type="date" name="f_ingreso" id="f_ingreso" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo de Personal</label><br>
                                <input type="text" name="tipo_p" id="tipo_p" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Cargo</label><br>
                                <input type="text" name="cargo" id="cargo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar en donde cobra</label><br>
                                <input type="text" name="l_cobra" id="l_cobra" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar donde labora</label><br>
                                <input type="text" name="l_labora" id="l_labora" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Denominación de Cargo</label><br>
                                <input type="text" name="d_cargo" id="d_cargo" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Código</label><br>
                                <input type="text" name="codigo" id="codigo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="accion" value="insert_prof">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#profForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '../includes/functions.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Éxito: Los datos se guardaron correctamente');
                        window.location = "profesores.php";
                    } else {
                        alert('Error: Ocurrió un error inesperado');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error: Ocurrió un error inesperado');
                    console.log({error})
                }
            });
        });
    });
</script>