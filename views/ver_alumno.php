<div class="modal fade" id="ver<?php echo $fila["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
		<div class="modal-header bg-dark">
			<h3 class="modal-title text-white fw-bold" id="exampleModalLabel"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $fila['nombre']; ?> <?php echo $fila['apellido']; ?></h3>
			<button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<div class="modal-body">
		<div class="container" id="profile"> 
		
			<div class="row">
				<div class="col-sm">
					<div class="card mb-3">
						<div class="card-body">
							<div class="row text-center">
								<div class="col-sm"><strong class="text-dark"><i class="bi bi-person-vcard"></i> Cédula Escolar:</strong> <br><p class="fs-5"><?php echo $fila['cedula_escolar']; ?></p> </div>
								
								<div class="col-sm"><strong class="text-dark"><i class="bi bi-gender-ambiguous"></i> Sexo:</strong> <br><p class="fs-5"> <?php echo $fila['sexo']; ?></p></div>
								
								<div class="col-sm"><strong class="text-dark"><i class="bi bi-calendar"></i> Edad:</strong> <br><p class="fs-5"><?php echo $fila['edad']; ?></p></div>
								
								<div class="col-sm"><strong class="text-dark"><i class="bi bi-backpack"></i> Aula:</strong> <br><p class="fs-5"> <?php
                                            include("db.php");

                                            $sql = "SELECT * FROM grados ";
                                            $resultado = mysqli_query($conexion, $sql);
                                            while ($consulta = mysqli_fetch_array($resultado)) {
                                                if ($consulta['id'] === $fila['id_grado']) {
                                                    echo $consulta['descripcion'];
                                                } else {
                                                    continue;
                                                }
                                            }
                                        ?></p></div>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm">

				<div class="card mb-3">

					<div class="card-header nav nav-pills text-center" id="v-pills-tab<?php echo $fila['id']; ?>" role="tablist">

						<button class="nav-link active" id="infopersonal-tab" data-bs-toggle="pill" data-bs-target="#datospersonales<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="datospersonales" aria-selected="true">Datos personales</button>

						<button class="nav-link" id="sit-acad-tab" data-bs-toggle="pill" data-bs-target="#sit-acad<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="sit-acad" aria-selected="false">Información escolar</button>

						<button class="nav-link" id="info-medica-tab" data-bs-toggle="pill" data-bs-target="#info-medica<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="info-medica" aria-selected="false">Información Médica</button>

						<button class="nav-link" id="datos-rep-tab" data-bs-toggle="pill" data-bs-target="#datos-rep<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="datos-rep" aria-selected="false">Representantes</button>

					</div>

					<div class="card-body tab-content" id="v-pills-tabContent<?php echo $fila['id']; ?>">

						<div class="tab-pane fade show active" id="datospersonales<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="datospersonales-tab" tabindex="0">
							
							<p><strong class="text-primary"><i class="bi bi-globe-americas"></i> Nacionalidad: </strong><?php echo $fila['nacionalidad']; ?></p>
							
							<p><strong class="text-primary"><i class="bi bi-cake2-fill"></i> Fecha de Nacimiento: </strong><?php echo $fila['birthdate']; ?></p>
							
							<p><strong class="text-primary"><i class="bi bi-geo"></i> Lugar de Nacimiento: </strong><?php echo $fila['lugar']; ?></p>

							<p><strong class="text-primary"><i class="bi bi-house-heart-fill"></i> ¿Con quién vive el alumno? </strong><?php echo $fila['vive']; ?></p>

							<p><strong class="text-primary"><i class="bi bi-telephone-fill"></i> Teléfono: </strong><?php echo $fila['telefono']; ?></p>
							
							<p><strong class="text-primary"><i class="bi bi-map-fill"></i> Dirección: </strong><?php echo $fila['direccion']; ?></p>
						
						</div>

						<div class="tab-pane fade" id="sit-acad<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="sit-acad-tab" tabindex="0">

							<p><strong class="text-primary"><i class="bi bi-calendar"></i> Fecha de Inscripción: </strong><?php echo $fila['inscripcion']; ?></p>
							
							<p><strong class="text-primary"><i class="bi bi-mortarboard-fill"></i> Plantel del que procede: </strong><?php echo $fila['procede']; ?><strong class="text-primary"> Tipo de plantel: </strong><?php echo $fila['tipo']; ?></p>
							
							<p><strong class="text-primary"><i class="bi bi-person-arms-up"></i> Hermanos en el plantel: </strong><?php 
							if ($fila['est_hermanos'] === 'No') {
								echo 'Ninguno';
							} else {
								echo $fila['nro_hermanos'];
							}

							?></p>

						</div>

						<div class="tab-pane fade" id="info-medica<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="info-medica-tab" tabindex="0">
							
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><p><strong class="text-primary fs-5"><i class="bi bi-bandaid-fill"></i></i> Enfermedades: </strong><br><?php echo $fila['enfermedades']; ?></p></li>

								<li class="list-group-item"><p><strong class="text-primary fs-5"><i class="bi bi-hospital-fill"></i> Vacunas: </strong><br><?php echo $fila['vacunas']; ?></p></li>
							</ul>

						</div>

						<div class="tab-pane fade" id="datos-rep<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="datos-rep-tab" tabindex="0">

							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<h4 class="text-info mb-2"><?php echo $fila['rep']; ?></h4>
									<p><strong class="text-primary"><i class="bi bi-person-vcard"></i> Cédula: </strong><?php echo $fila['id_rep']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-house-heart-fill"></i> Parentesco: </strong><?php echo $fila['parentesco']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-calendar"></i> Edad: </strong><?php echo $fila['rep_edad']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-cake2-fill"></i> Fecha de Nacimiento: </strong><?php echo $fila['rep_nacimiento']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-geo"></i> Lugar de Nacimiento: </strong><?php echo $fila['rep_lugar']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-globe-americas"></i> Nacionalidad: </strong><?php echo $fila['rep_nacionalidad']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-person-hearts"></i> Estado Civil: </strong><?php echo $fila['estado_civil']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-building-fill"></i> Profesión: </strong><?php echo $fila['profesion']; ?></p>
								</li>

								<li class="list-group-item mt-2 mb-2">
									<h4 class="text-info"><?php echo $fila['rep2']; ?></h4>
									<p><strong class="text-primary"><i class="bi bi-person-vcard"></i> Cédula: </strong><?php echo $fila['id_rep2']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-house-heart-fill"></i> Parentesco: </strong><?php echo $fila['parentesco2']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-calendar"></i> Edad: </strong><?php echo $fila['rep2_edad']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-cake2-fill"></i> Fecha de Nacimiento: </strong><?php echo $fila['rep2_nacimiento']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-geo"></i> Lugar de Nacimiento: </strong><?php echo $fila['rep2_lugar']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-globe-americas"></i> Nacionalidad: </strong><?php echo $fila['rep2_nacionalidad']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-person-hearts"></i> Estado Civil: </strong><?php echo $fila['estado_civil2']; ?></p>
									<p><strong class="text-primary"><i class="bi bi-building-fill"></i> Profesión: </strong><?php echo $fila['profesion2']; ?></p>
								</li>
							</ul>
					
					</div>
				</div>

			</div>

				</div>
				


			</div>   
		</div>
		
		</form>
		</div>
		<div class="modal-footer bg-secondary-subtle">
		<?php if ($_SESSION["type"] != 3) { ?><div class="dropdown">
    <button class="btn btn-info btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Generar Informe Final
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <a class="dropdown-item" href="../includes/boletines/ejemplo.php?id=<?php echo $fila['id'] ?>">Formato de Inicial</a>
           <a class="dropdown-item" href="#">Formato de Primaria</a>
           </div>
          </div>
		  <?php }
            ?> 
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		</div>
	</div>
</div> 