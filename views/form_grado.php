<div class="modal fade" id="grado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nueva aula</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="gradForm">

                    <div class="row">
                        <div class="mb-3 form-floating">
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="aa" required>
                            <label for="descripcion" class="form-label">Aula</label>
                        </div>
                    </div>

                    <div class="row">
                                <div class="mb-3 form-floating">
                                    
                                    <select name="profesor" id="profesor" class="form-control" required>
                                        <option value="">Selecciona una opción</option>
                                        <?php

                                        include("db.php");

                                        $sql = 'SELECT * FROM profesores WHERE tipo_p = "Docente" ';
                                        $resultado = mysqli_query($conexion, $sql);
                                        while ($consulta = mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $consulta['id'] . '">' . $consulta['nombres'] . " " . $consulta['apellidos'] . '</option>';
                                        }

                                        ?>
                                    </select>
                                    <label for="profesor">Docente</label>
                                </div>
                    </div>


                    <br>

                    <input type="hidden" name="accion" value="insert_grado">
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
        $('#gradForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '../includes/functions.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response === "correcto") {
                        Swal.fire({
                            'title': 'Aula Registrada',
                            'text': 'Los datos se guardaron correctamente',
                            'icon': 'success',
                            'showConfirmButton': 'false',
                            'timer': '1500'
                        }).then(function() {
                            location.assign('grados.php');
                        });
                    } else {
                        Swal.fire({
                            'title': 'Error',
                            'text': 'No se pudieron agregar los datos',
                            'icon': 'error'
                        })
                    }
                },
                error: function() {
                    Swal.fire({
                    'title': 'Error',
                    'text': 'Error de comunicación con el servidor',
                    'icon': 'error'
                })
                }
            });
        });
    });
</script>