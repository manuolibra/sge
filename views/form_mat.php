<div class="modal fade" id="mat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nueva materia</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="matForm">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Descripcion</label>
                                <input type="text" id="materia" name="materia" class="form-control" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Profesor Asignado</label>
                                <select name="id_profesor" id="id_profesor" class="form-control">
                                    <option value="">Selecciona una opcion</option>
                                    <?php

                                    include("db.php");

                                    $sql = "SELECT * FROM profesores ";
                                    $resultado = mysqli_query($conexion, $sql);
                                    while ($consulta = mysqli_fetch_array($resultado)) {
                                        echo '<option value="' . $consulta['id'] . '">' . $consulta['nombres'] . ' ' . $consulta['apellidos'] . '</option>';
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Periodo de Inicio</label><br>
                                <input type="date" name="per_ini" id="per_ini" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Periodo de Fin</label><br>
                                <input type="date" name="per_fin" id="per_fin" class="form-control" required>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="username">Grado Asignado</label><br>
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

                        </select>
                    </div>



                    <br>
                    <input type="hidden" name="accion" value="insert_mat">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#matForm').submit(function(e) {
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
                        window.location = "materias.php";
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