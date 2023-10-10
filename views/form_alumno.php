<div class="modal fade" id="alumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo alumno</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="alumForm">

                    <div class="row">
                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>

                            </div>
                        </div>


                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="apellido">Apellidos</label><br>
                                <input type="text" name="apellido" id="apellido" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="cedula_escolar">Cédula escolar</label><br>
                                <input type="text" name="cedula_escolar" id="cedula_escolar" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">


                            <select class="form-control mb-3" name="sexo" aria-label="sexo">
                                <option selected>Sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6  form-floating">
                            <div class="mb-3">
                                <label for="nacionalidad">Nacionalidad</label><br>
                                <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="edad">Edad</label><br>
                                <input type="number" name="edad" id="edad" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="lugar">Lugar de Nacimiento</label><br>
                                <input type="text" name="lugar" id="lugar" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6 form-floating">
                            <div class="mb-3">
                                <label for="birthdate">Fecha de Nacimiento</label><br>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Dirección</label><br>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Teléfono</label><br>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Procede de:</label><br>
                                <input type="text" name="procede" id="procede" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Tipo</label><br>
                                <input type="text" name="tipo" id="tipo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nro. de Hermanos</label><br>
                                <input type="text" name="nro_hermanos" id="nro_hermanos" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Hermanos en el plantel</label><br>
                                <input type="text" name="est_hermanos" id="est_hermanos" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Enfermedades</label><br>
                                <input type="text" name="enfermedades" id="enfermedades" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Vacunas</label><br>
                                <input type="text" name="vacunas" id="vacunas" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">¿Con quién vive?</label><br>
                                <input type="text" name="vive" id="vive" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">C.I. Representante</label><br>
                                <input type="text" name="id_rep" id="id_rep" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Representante</label><br>
                                <input type="text" name="rep" id="rep" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Parentesco</label><br>
                                <input type="text" name="parentesco" id="parentesco" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Edad</label><br>
                                <input type="text" name="rep_edad" id="rep_edad" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Nacimiento</label><br>
                                <input type="date" name="rep_nacimiento" id="rep_nacimiento" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Lugar de Nacimiento</label><br>
                                <input type="text" name="rep_lugar" id="rep_lugar" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Nacionalidad</label><br>
                                <input type="text" name="rep_nacionalidad" id="rep_nacionalidad" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Estado Civil</label><br>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Profesión</label><br>
                                <input type="text" name="profesion" id="profesion" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Fecha de Inscripción</label><br>
                                <input type="date" name="inscripcion" id="inscripcion" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="id_grado">Grado</label><br>
                                <select name="id_grado" id="id_grado" class="form-control" required>
                                    <option value="">Selecciona una opcion</option>
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
                    <input type="hidden" name="accion" value="insert_alumno">
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
        $('#alumForm').submit(function(e) {
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
                        window.location = "alumnos.php";
                    } else {
                        alert('Error: Ocurrió un error inesperado');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error: Ocurrió un error inesperado');
                }
            });
        });
    });
</script>