<?php 

include("db.php");

$sql = "SELECT * FROM grados ";
$resultado = mysqli_query($conexion, $sql); 
$consulta = mysqli_fetch_array($resultado)
?>

<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Alumno</h3>
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editForm<?php echo $fila['id']; ?>" method="POST">

                <div class="card mb-3">
                    <div class="card-header">
                        Datos del alumno
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">

                                <div class="mb-3 form-floating">             
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $fila['nombre']; ?>" placeholder="aaa" required>
                                    <label for="nombre" class="form-label">Nombres</label>
                                </div>
                            </div>


                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $fila['apellido']; ?>" placeholder="aaa" required>
                                    <label for="apellido">Apellidos</label>
                                </div>
                            </div>

                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="sexo" id="sexo" aria-label="sexo" required>
                                    <option <?php echo $fila['sexo'] === 'sexo' ? 'selected' : ''; ?> value="Masculino">Masculino</option>
                                    <option <?php echo $fila['sexo'] === 'sexo' ? 'selected' : ''; ?> value="Femenino">Femenino</option>
                                </select>
                                <label for="sexo">Sexo</label>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="edad" id="edad" value="<?php echo $fila['edad']; ?>" class="form-control" placeholder="aa" required>
                                    <label for="edad">Edad</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="cedula_escolar" id="cedula_escolar" class="form-control" value="<?php echo $fila['cedula_escolar']; ?>" placeholder="aa" required>
                                    <label for="cedula_escolar">Cédula escolar</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?php echo $fila['birthdate']; ?>" placeholder="aaa" required>
                                    <label for="birthdate">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    
                                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" value="<?php echo $fila['nacionalidad']; ?>" placeholder="aa" required>
                                    <label for="nacionalidad">Nacionalidad</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            

                            <div class="col-sm-8">
                                <div class="mb-3 form-floating">  
                                    <input type="text" name="lugar" id="lugar" class="form-control" placeholder="aaa" value="<?php echo $fila['lugar']; ?>" required>
                                    <label for="lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3 form-floating">
                                    <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="aa" value="<?php echo $fila['telefono']; ?>" required>
                                    <label for="telefono">Número de Teléfono</label>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    
                                    <textarea name="direccion" id="direccion" class="form-control" placeholder="aaa" required><?php echo $fila['direccion']; ?></textarea>
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
                                    <input type="text" name="procede" id="procede" class="form-control" placeholder="aaa" value="<?php echo $fila['procede']; ?>">
                                    <label for="procede">Plantel procedente</label>
                                </div>
                            </div>

                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="tipo" id="tipo" aria-label="tipo">
                                    <option <?php echo $fila['tipo'] === 'tipo' ? 'selected' : ''; ?> value="Público">Público</option>
                                    <option <?php echo $fila['tipo'] === 'tipo' ? 'selected' : ''; ?> value="Privado">Privado</option>
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
                                    <input type="number" name="nro_hermanos" id="nro_hermanos" class="form-control" placeholder="aa" value="<?php echo $fila['nro_hermanos']; ?>" required>
                                    <label for="nro_hermanos">Número de Hermanos</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p>¿Tiene hermanos estudiando en el plantel?</p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="est_hermanos" id="est_hermanos"  <?php echo $fila['est_hermanos'] === 'Sí' ? 'checked' : ''; ?> value="Sí">
                                    <label class="form-check-label" for="est_hermanos">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="est_hermanos" id="est_hermanos" <?php echo $fila['est_hermanos'] === 'No' ? 'checked' : ''; ?> value="No">
                                    <label class="form-check-label" for="est_hermanos">
                                        No
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm">
                                <div class="form-floating">       
                                        <textarea name="vive" id="vive" class="form-control" placeholder="aaa" required><?php echo $fila['vive']; ?></textarea>
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
                                    <textarea name="enfermedades" id="enfermedades" class="form-control" placeholder="aaa" required><?php echo $fila['enfermedades']; ?></textarea>
                                    <label for="enfermedades">Enfermedades</label>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="form-floating">
                                    <textarea name="vacunas" id="vacunas" class="form-control" placeholder="aaa" required><?php echo $fila['vacunas']; ?></textarea>
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
                                    <input type="date" name="inscripcion" id="inscripcion" class="form-control" placeholder="aaa" value="<?php echo $fila['inscripcion']; ?>" required>
                                    <label for="inscripcion">Fecha de Inscripción</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3 form-floating">
                                    
                                    <select name="id_grado" id="id_grado" class="form-control" required>
                                        <?php

                                            include("db.php");

                                            $sql = "SELECT * FROM grados ";
                                            $resultado = mysqli_query($conexion, $sql);
                                            while ($consulta = mysqli_fetch_array($resultado)) {
                                                if ($consulta['id'] === $fila['id_grado']) {
                                                    echo '<option value="' . $consulta['id'] . '" selected>' . $consulta['descripcion'] . '</option>';
                                                } else {
                                                    echo '<option value="' . $consulta['id'] . '">' . $consulta['descripcion'] . '</option>';
                                                }
                                            }

                                        ?>
                                    </select>
                                    <label for="id_grado">Grado Escolar</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->        



<!-- Datos del representante 1 -->
                <div class="card mb-3">
                    <div class="card-header">
                        Datos del Representante 1
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep" id="rep" class="form-control" placeholder="aaa" value="<?php echo $fila['rep']; ?>" required>
                                    <label for="rep">Nombre completo</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="id_rep" id="id_rep" class="form-control" placeholder="aaa" value="<?php echo $fila['id_rep']; ?>" required>
                                    <label for="id_rep">Cédula de Identidad</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="parentesco" id="parentesco" class="form-control" placeholder="aa" value="<?php echo $fila['parentesco']; ?>" required>
                                    <label for="parentesco">Parentesco con el Alumno</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="rep_edad" id="rep_edad" class="form-control" placeholder="aaa" value="<?php echo $fila['rep_edad']; ?>" required>
                                    <label for="rep_edad">Edad</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="rep_nacimiento" id="rep_nacimiento" class="form-control" placeholder="aaa" value="<?php echo $fila['rep_nacimiento']; ?>" required>
                                    <label for="rep_nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm-7">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep_lugar" id="rep_lugar" class="form-control" placeholder="a" value="<?php echo $fila['rep_lugar']; ?>" required>
                                    <label for="rep_lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>


                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="estado_civil" id="estado_civil" aria-label="estado_civil">
                                    <option <?php echo $fila['estado_civil'] === 'estado_civil' ? 'selected' : ''; ?> value="Soltero">Soltero</option>
                                    <option <?php echo $fila['estado_civil'] === 'estado_civil' ? 'selected' : ''; ?> value="Casado">Casado</option>
                                    <option <?php echo $fila['estado_civil'] === 'estado_civil' ? 'selected' : ''; ?> value="Viudo">Viudo</option>
                                    <option <?php echo $fila['estado_civil'] === 'estado_civil' ? 'selected' : ''; ?> value="Divorciado">Divorciado</option>
                                </select>
                                <label for="estado_civil">Estado Civil</label>
                            </div>
                            

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep_nacionalidad" id="rep_nacionalidad" class="form-control" value="<?php echo $fila['rep_nacionalidad']; ?>" placeholder="a" required>
                                    <label for="rep_nacionalidad">Nacionalidad</label>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    
                                    <input type="text" name="profesion" id="profesion" class="form-control" value="<?php echo $fila['profesion']; ?>" placeholder="a" required>
                                    <label for="profesion">Profesión</label>
                                </div>
                            </div>
                        </div>

                    </div><!-- Card body -->
                </div> <!-- Card -->    

<!-- Datos del representante 2 -->
                <div class="card mb-3">
                    <div class="card-header">
                        Datos del Representante 2
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2" id="rep2" class="form-control" placeholder="aaa" value="<?php echo $fila['rep2']; ?>" required>
                                    <label for="rep2">Nombre completo</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="id_rep2" id="id_rep2" class="form-control" placeholder="aaa" value="<?php echo $fila['id_rep2']; ?>" required>
                                    <label for="id_rep2">Cédula de Identidad</label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="parentesco2" id="parentesco2" class="form-control" placeholder="aa" value="<?php echo $fila['parentesco2']; ?>" required>
                                    <label for="parentesco2">Parentesco con el Alumno</label>
                                </div>
                            </div>

                            </div>

                        <div class="row">

                            <div class="col-sm-2">
                                <div class="mb-3 form-floating">
                                    <input type="number" name="rep2_edad" id="rep2_edad" class="form-control" placeholder="aaa" value="<?php echo $fila['rep2_edad']; ?>" required>
                                    <label for="rep2_edad">Edad</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="date" name="rep2_nacimiento" id="rep2_nacimiento" class="form-control" placeholder="aaa" value="<?php echo $fila['rep2_nacimiento']; ?>" required>
                                    <label for="rep2_nacimiento">Fecha de Nacimiento</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-7">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2_lugar" id="rep2_lugar" class="form-control" placeholder="a" value="<?php echo $fila['rep2_lugar']; ?>" required>
                                    <label for="rep2_lugar">Lugar de Nacimiento</label>
                                </div>
                            </div>


                            <div class="col-sm-2 form-floating">
                                <select class="form-select" name="estado_civil2" id="estado_civil2" aria-label="estado_civil2">
                                    <option <?php echo $fila['estado_civil2'] === 'estado_civil2' ? 'selected' : ''; ?> value="Soltero">Soltero</option>
                                    <option <?php echo $fila['estado_civil2'] === 'estado_civil2' ? 'selected' : ''; ?> value="Casado">Casado</option>
                                    <option <?php echo $fila['estado_civil2'] === 'estado_civil2' ? 'selected' : ''; ?> value="Viudo">Viudo</option>
                                    <option <?php echo $fila['estado_civil2'] === 'estado_civil2' ? 'selected' : ''; ?> value="Divorciado">Divorciado</option>
                                </select>
                                <label for="estado_civil">Estado Civil</label>
                            </div>


                            <div class="col-sm">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="rep2_nacionalidad" id="rep2_nacionalidad" class="form-control" value="<?php echo $fila['rep2_nacionalidad']; ?>" placeholder="a" required>
                                    <label for="rep2_nacionalidad">Nacionalidad</label>
                                </div>
                            </div>


                            </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-floating">
                                    
                                    <input type="text" name="profesion2" id="profesion2" class="form-control" value="<?php echo $fila['profesion2']; ?>" placeholder="a" required>
                                    <label for="profesion2">Profesión</label>
                                </div>
                            </div>
                        </div>
                        

                    </div><!-- Card body -->
                </div> <!-- Card -->   

<!--viejo-->
             
                    <input type="hidden" name="accion" value="editar_alum">
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
                        'title': 'Alumno actualizado',
                        'text': 'Los datos se guardaron correctamente',
                        'icon': 'success',
                        'showConfirmButton': 'false',
                        'timer': '1500'
                    }).then(function() {
                        location.assign('alumnos.php');
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