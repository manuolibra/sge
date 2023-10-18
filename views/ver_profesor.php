<div class="modal fade" id="ver<?php echo $fila["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
		<div class="modal-header bg-primary">
			<h4 class="modal-title text-white" id="exampleModalLabel"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $fila['nombres']; ?> <?php echo $fila['apellidos']; ?></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<div class="container" id="profile"> 
		
			<div class="row">
				<div class="col-sm">
					<div class="card mb-3">
						<div class="card-body">
							<div class="row text-center">
								<div class="col-sm"><strong class="text-primary"><i class="bi bi-person-vcard"></i> Cédula de Identidad:</strong> <br><p class="fs-5"><?php echo $fila['cedula']; ?></p> </div>
																
								<div class="col-sm"><strong class="text-primary"><i class="bi bi-calendar"></i> Edad:</strong> <br><p class="fs-5"><?php echo $fila['edad']; ?></p></div>
								
								<div class="col-sm"><strong class="text-primary"><i class="bi bi-backpack"></i> Tipo de Personal:</strong> <br><p class="fs-5"> <?php echo $fila['tipo_p']; ?> </p></div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="card">
						<div class="card-header nav nav-pills text-center" id="v-pills-tab<?php echo $fila['id']; ?>" role="tablist">

							<button class="nav-link active" id="infopersonal-tab" data-bs-toggle="pill" data-bs-target="#datospersonales<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="datospersonales" aria-selected="true">Datos personales</button>

							<button class="nav-link" id="info-acad-tab" data-bs-toggle="pill" data-bs-target="#info-acad<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="sit-acad" aria-selected="false">Información académica</button>

							<button class="nav-link" id="rrhh-tab" data-bs-toggle="pill" data-bs-target="#rrhh<?php echo $fila['id']; ?>" type="button" role="tab" aria-controls="info-medica" aria-selected="false">Recursos humanos</button>

						</div>

						<div class="card-body tab-content" id="v-pills-tabContent<?php echo $fila['id']; ?>">

							<div class="tab-pane fade show active" id="datospersonales<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="datospersonales-tab" tabindex="0">
								
								<p><strong class="text-primary"><i class="bi bi-globe-americas"></i> Nacionalidad: </strong><?php echo $fila['curp']; ?></p>
								
								<p><strong class="text-primary"><i class="bi bi-cake2-fill"></i> Fecha de Nacimiento: </strong><?php echo $fila['fecha_na']; ?></p>
								
								<p><strong class="text-primary"><i class="bi bi-geo"></i> Lugar de Nacimiento: </strong><?php echo $fila['lugar_na']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-person-hearts"></i> Estado Civil: </strong><?php echo $fila['estado_civil']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-telephone-fill"></i> Teléfono: </strong><?php echo $fila['telefono']; ?></p>
								
								<p><strong class="text-primary"><i class="bi bi-map-fill"></i> Dirección: </strong><?php echo $fila['direccion']; ?></p>

							</div>

							<div class="tab-pane fade" id="info-acad<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="sit-acad-tab" tabindex="0">
								
								<p><strong class="text-primary"><i class="bi bi-mortarboard-fill"></i> Nivel de Educación: </strong><?php echo $fila['niv_edu']; ?> <strong class="text-primary">- Mención: </strong> <?php echo $fila['m_acad']; ?></p> 
								
								<p><strong class="text-primary"><i class="bi bi-person-workspace"></i> Estudio de Postgrado: </strong><?php echo $fila['est_post']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-backpack-fill"></i> Cursos Realizados: </strong><?php echo $fila['cursos']; ?></p>

							</div>

							<div class="tab-pane fade" id="rrhh<?php echo $fila['id']; ?>" role="presentation" aria-labelledby="sit-acad-tab" tabindex="0">
			
								<p><strong class="text-primary"><i class="bi bi-clock-fill"></i> Tiempo de Servicio: </strong><?php echo $fila['t_servicio']; ?></p>
								
								<p><strong class="text-primary"><i class="bi bi-calendar-range-fill"></i> Fecha de Ingreso: </strong><?php echo $fila['f_ingreso']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-person-fill-check"></i> Cargo: </strong><?php echo $fila['cargo']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-person-fill-check"></i> Denominación de Cargo: </strong><?php echo $fila['d_cargo']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-cash"></i> Lugar donde cobra: </strong><?php echo $fila['l_cobra']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-buildings-fill"></i> Lugar donde labora: </strong><?php echo $fila['l_labora']; ?></p>

								<p><strong class="text-primary"><i class="bi bi-upc-scan"></i> Código: </strong><?php echo $fila['codigo']; ?></p>

							</div>

						</div>
					</div>
				</div>
			</div>

		<!--Antiguo-->
			

		</div>   
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		</div>
		</form>
		</div>
	</div>
</div> 