<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Usuario</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3 form-floating">
                                
                                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $fila['usuario']; ?>" placeholder="a" required>
                                <label for="usuario" class="form-label">Usuario</label>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3 form-floating">
                                
                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $fila['correo']; ?>" placeholder="a"  required>
                                <label for="correo" class="form-label">Correo</label>
                            </div>
                        </div>
                    </div>

                    <!--          <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Confirmar Password</label><br>
                                <input type="password" name="password2" id="password2" class="form-control" required>
                            </div>
                        </div>
                    </div>


-->

                    <div class="form-group form-floating">
                        
                        <select name="id_rol" id="id_rol" class="form-control" required>

                            <option <?php echo $fila['id_rol'] === '1' ? "selected='selected' " : "" ?> value="1">Administrador</option>
                            <option <?php echo $fila['id_rol'] === '2' ? "selected='selected' " : "" ?> value="2">Editor</option>
                            <option <?php echo $fila['id_rol'] === '3' ? "selected='selected' " : "" ?> value="3">Lector</option>
                        </select>
                        <label for="id_rol">Tipo de Usuario</label>
                    </div>



                    <br>

                    <input type="hidden" name="accion" value="editar_user">
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
                        location.assign('usuarios.php');
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