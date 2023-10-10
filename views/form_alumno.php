<div class="modal fade" id="alumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo alumno</h3>
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="alumForm">
                <div class="card mb-3">
                    <div class="card-header">
                        Datos del alumno
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">

                                <div class="mb-3 form-floating">             
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="aaa" required>
                                    <label for="nombre" class="form-label">Nombres</label>
                                </div>
                            </div>


                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="aaa" required>
                                    <label for="apellido">Apellidos</label>
                                </div>
                            </div>

                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="sexo" id="sexo" aria-label="sexo" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                                <label for="sexo">Sexo</label>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="edad" id="edad" class="form-control" placeholder="aa" required>
                                    <label for="edad">Edad</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="cedula_escolar" id="cedula_escolar" class="form-control" placeholder="aa" required>
                                    <label for="cedula_escolar">Cédula escolar</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="aaa" required>
                                    <label for="birthdate">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    
                                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" placeholder="aa" required>
                                    <label for="nacionalidad">Nacionalidad</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            

                            <div class="col-sm-8">
                                <div class="mb-3 form-floating">  
                                    <input type="text" name="lugar" id="lugar" class="form-control" placeholder="aaa" required>
                                    <label for="lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3 form-floating">
                                    <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="aa" required>
                                    <label for="telefono">Número de Teléfono</label>
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
                        Procedencia escolar
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="procede" id="procede" class="form-control" placeholder="aaa">
                                    <label for="procede">Plantel procedente</label>
                                </div>
                            </div>

                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="tipo" id="tipo" aria-label="tipo">
                                    <option value="Público">Público</option>
                                    <option value="Privado">Privado</option>
                                </select>
                                <label for="sexo">Tipo de Plantel</label>
                            </div>

                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->

                <div class="card mb-3">
                    <div class="card-header">
                        Información Familiar
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="nro_hermanos" id="nro_hermanos" class="form-control" placeholder="aa" required>
                                    <label for="nro_hermanos">Número de Hermanos</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p>¿Tiene hermanos estudiando en el plantel?</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="est_hermanos" id="est_hermanos" value="Sí">
                                    <label class="form-check-label" for="est_hermanos">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="est_hermanos" id="est_hermanos" value="No">
                                    <label class="form-check-label" for="est_hermanos">
                                        No
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm">
                                <div class="form-floating">       
                                        <textarea name="vive" id="vive" class="form-control" placeholder="aaa" required></textarea>
                                        <label for="vive">¿Con quién vive el alumno?</label>
                                </div>
                            </div>

                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->
                        

                <div class="card mb-3">
                    <div class="card-header">
                        Información Médica
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    <textarea name="enfermedades" id="enfermedades" class="form-control" placeholder="aaa" required></textarea>
                                    <label for="enfermedades">Enfermedades</label>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="form-floating">
                                    <textarea name="vacunas" id="vacunas" class="form-control" placeholder="aaa" required></textarea>
                                    <label for="vacunas">Vacunas</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->        



                                    

<!-- Situación académica -->
                <div class="card mb-3">
                    <div class="card-header">
                        Situación académica
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="inscripcion" id="inscripcion" class="form-control" placeholder="aaa" required>
                                    <label for="inscripcion">Fecha de Inscripción</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    
                                    <select name="id_grado" id="id_grado" class="form-control" required>
                                        <option value="">Selecciona una opción</option>
                                        <?php

                                        include("db.php");

                                        $sql = "SELECT * FROM grados ";
                                        $resultado = mysqli_query($conexion, $sql);
                                        while ($consulta = mysqli_fetch_array($resultado)) {
                                            echo '<option value="' . $consulta['id'] . '">' . $consulta['descripcion'] . '</option>';
                                        }

                                        ?>
                                    </select>
                                    <label for="id_grado">Grado Escolar</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->        



 <!-- Datos del representante -->
                <div class="card mb-3">
                    <div class="card-header">
                        Datos del Representante 1
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep" id="rep" class="form-control" placeholder="aaa" required>
                                    <label for="rep">Nombre completo</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="id_rep" id="id_rep" class="form-control" placeholder="aaa" required>
                                    <label for="id_rep">Cédula de Identidad</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="parentesco" id="parentesco" class="form-control" placeholder="aa" required>
                                    <label for="parentesco">Parentesco con el Alumno</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="rep_edad" id="rep_edad" class="form-control" placeholder="aaa" required>
                                    <label for="rep_edad">Edad</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="rep_nacimiento" id="rep_nacimiento" class="form-control" placeholder="aaa" required>
                                    <label for="rep_nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm-7">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep_lugar" id="rep_lugar" class="form-control" placeholder="a" required>
                                    <label for="rep_lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>


                            <div class="col-sm-2 form-floating">
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
                                    <input type="text" name="rep_nacionalidad" id="rep_nacionalidad" class="form-control" placeholder="a" required>
                                    <label for="rep_nacionalidad">Nacionalidad</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    
                                    <input type="text" name="profesion" id="profesion" class="form-control" placeholder="a" required>
                                    <label for="profesion">Profesión</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->    

                <div class="card mb-3">
                    <div class="card-header">
                        Datos del Representante 2
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2" id="rep2" class="form-control" placeholder="aaa" required>
                                    <label for="rep2">Nombre completo</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="id_rep2" id="id_rep2" class="form-control" placeholder="aaa" required>
                                    <label for="id_rep2">Cédula de Identidad</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="parentesco2" id="parentesco2" class="form-control" placeholder="aa" required>
                                    <label for="parentesco2">Parentesco con el Alumno</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="rep2_edad" id="rep2_edad" class="form-control" placeholder="aaa" required>
                                    <label for="rep2_edad">Edad</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="rep2_nacimiento" id="rep2_nacimiento" class="form-control" placeholder="aaa" required>
                                    <label for="rep2_nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm-7">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2_lugar" id="rep2_lugar" class="form-control" placeholder="a" required>
                                    <label for="rep2_lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>


                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="estado_civil2" id="estado_civil2" aria-label="estado_civil2">
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select>
                                <label for="estado_civil2">Estado Civil</label>
                            </div>
                            

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2_nacionalidad" id="rep2_nacionalidad" class="form-control" placeholder="a" required>
                                    <label for="rep2_nacionalidad">Nacionalidad</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    
                                    <input type="text" name="profesion2" id="profesion2" class="form-control" placeholder="a" required>
                                    <label for="profesion2">Profesión</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->    

                    <input type="hidden" name="accion" value="insert_alumno">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>

            </div> <!--modal body-->

            </form>
        </div><!--modal content-->
    </div><!--modal dialog-->
</div><!--modal-->
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