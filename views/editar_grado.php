<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Aula</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">



                    <div class="form-group">
                        <label for="nombre" class="form-label">Grado</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $fila['descripcion']; ?>" required>
                    </div>


                    <div class="">
                                <div class="mb-3 form-floating">
                                    
                                    <select name="profesor" id="profesor" class="form-control" required>
                                        <option value="">Selecciona una opción</option>
                                        <?php

                                        include("db.php");

                                        $sql = 'SELECT * FROM profesores WHERE tipo_p = "Docente" ';
                                        $resultado = mysqli_query($conexion, $sql);
                                        while ($consulta = mysqli_fetch_array($resultado)) {
                                            
                                            if ($consulta['id'] === $fila['profesor']) {
                                                echo '<option value="' . $consulta['id'] . '"selected>' . $consulta['nombres'] . " " . $consulta['apellidos'] . '</option>';
                                            } else {
                                                echo '<option value="' . $consulta['id'] . '">' . $consulta['nombres'] . " " . $consulta['apellidos'] . '</option>';
                                            }


                                           
                                        }

                                        ?>
                                    </select>
                                    <label for="profesor">Docente</label>
                                </div>
                    </div>


                    <br>

                    <input type="hidden" name="accion" value="editar_grado">
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
                        Swal.fire({
                            'title': 'Aula actualizada',
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
                            'text': 'No se pudieron actualizar los datos',
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
    }
</script>