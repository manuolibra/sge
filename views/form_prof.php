<div class="modal fade" id="prof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo personal</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="profForm">
                
                <div class="card mb-3">
                    <div class="card-header">
                        Datos personales
                    </div>

                    <div class="card-body">  

                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="aaa" required>
                                    <label for="nombres" class="form-label">Nombres</label>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="aaa" required>
                                    <label for="apellidos">Apellidos</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">      
                                    <input type="text" id="cedula" name="cedula" class="form-control" placeholder="aa" required>
                                    <label for="cedula" class="form-label">Cédula de identidad</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="fecha_na" id="fecha_na" class="form-control" placeholder="aa" required>
                                    <label for="fecha_na">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="lugar_na" id="lugar_na" class="form-control" placeholder="aa" required>
                                    <label for="lugar_na">Lugar de Nacimiento</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="edad" id="edad" class="form-control" placeholder="a" required> 
                                    <label for="password">Edad</label>
                                </div>
                            </div>
                        
                            <div class="col-sm-3 form-floating mb-3">
                                    <select class="form-select" name="estado_civil" id="estado_civil" aria-label="estado_civil">
                                        <option value="Soltero">Soltero</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Viudo">Viudo</option>
                                        <option value="Divorciado">Divorciado</option>
                                    </select>
                                    <label for="estado_civil">Estado Civil</label>
                            </div>

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="curp" id="curp" class="form-control" placeholder="a" required>
                                    <label for="curp">Nacionalidad</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="email" name="correo" id="correo" class="form-control" placeholder="aa" required>
                                    <label for="correo">Correo electrónico</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="aa" required>
                                    <label for="telefono">Número de teléfono</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">                                    
                                    <textarea name="direccion" id="direccion" class="form-control" placeholder="aaa" required></textarea>
                                    <label for="direccion">Dirección</label>
                                </div>
                            </div>

                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->
    
                <div class="card mb-3">
                    <div class="card-header">
                        Formación académica
                    </div>

                    <div class="card-body">  

                        <div class="row">
                            
                            <div class="col-sm form-floating">
                                <select class="form-select" name="niv_edu" id="niv_edu" aria-label="niv_edu">
                                    <option value="Licenciado">Licenciado</option>
                                    <option value="Profesor">Profesor</option>
                                    <option value="Bachiller Deportivo">Bachiller Deportivo</option>
                                    <option value="Bachiller Docente">Bachiller Docente</option>
                                    <option value="Bachiller">Bachiller</option>
                                    <option value="No graduado">No graduado</option>
                                </select>
                                <label for="sexo">Nivel de Educación</label>
                            </div>

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="m_acad" id="m_acad" class="form-control" placeholder="a" required>
                                    <label for="m_acad">Mención Académica</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="est_post" id="est_post" class="form-control" placeholder="a" required>
                                    <label for="est_post">Estudio de Postgrado</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <textarea name="cursos" id="cursos" class="form-control" placeholder="aaa" required></textarea>
                                    <label for="cursos">Cursos Realizados</label>
                                </div>
                            </div>

                        </div>
                        
                    </div><!-- Card body -->
                </div> <!-- Card -->

                <div class="card mb-3">
                    <div class="card-header">
                        Información profesional
                    </div>

                    <div class="card-body">  

                        <div class="row">

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="t_servicio" id="t_servicio" class="form-control" placeholder="a" required>
                                    <label for="t_servicio">Tiempo de Servicio</label>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="f_ingreso" id="f_ingreso" class="form-control" placeholder="a" required>
                                    <label for="f_ingreso">Fecha de Ingreso</label>
                                </div>
                            </div>
                        
                            <div class="col-sm">
                                <div class="mb-3 form-floating">

                                    <select class="form-select" name="tipo_p" id="tipo_p" aria-label="tipo_p">
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Docente">Docente</option>
                                        <option value="Obrero">Obrero</option>
                                        <option value="Vigilante">Vigilante</option>
                                    </select>
                                    <label for="tipo_p">Tipo de Personal</label>

                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="a" required>
                                    <label for="cargo">Cargo</label>
                                </div>
                            </div>

                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->

                <div class="card mb-3">
                    <div class="card-header">
                        Recursos humanos
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="l_cobra" id="l_cobra" class="form-control" placeholder="aa" required>
                                    <label for="l_cobra">Lugar donde cobra</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="l_labora" id="l_labora" class="form-control" placeholder="a" required>
                                    <label for="l_labora">Lugar donde labora</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="d_cargo" id="d_cargo" class="form-control" placeholder="a" required>
                                    <label for="codigo">Denominación de Cargo</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="codigo" id="codigo" class="form-control" placeholder="a" required>
                                    <label for="codigo">Código</label>
                                </div>
                            </div>

                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->
<!--Antiguo-->

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
                        Swal.fire({
                            'title': 'Personal Registrado',
                            'text': 'Los datos se guardaron correctamente',
                            'icon': 'success',
                            'showConfirmButton': 'false',
                            'timer': '1500'
                        }).then(function() {
                            location.assign('profesores.php');
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