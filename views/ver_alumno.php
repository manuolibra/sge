<div class="modal fade" id="ver<?php echo $fila["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $fila['nombre']; ?> <?php echo $fila['apellido']; ?></h5>
			<button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<div class="modal-body">
		<div class="container" id="profile"> 
		
			<div class="row">
				<div class="col">
					<div class="card" style="width: 100%; margin-bottom: 10px">
					<img src='../img/undraw_profile.svg' class='card-img-top' alt='...' style='width: 150px; height: 150px; margin-left: 10px;'>
						<div class="card-body">
							<p class="card-text">
								<i class="fa fa-id-card" aria-hidden="true"><?php echo $fila['cedula_escolar']; ?></i><br>
								<i class="fa fa-venus-mars" aria-hidden="true"></i> <?php echo $fila['sexo']; ?><br>
								<i class="fa " aria-hidden="true">Nacionalidad:</i> <?php echo $fila['nacionalidad']; ?><br>
								<i class="fa " aria-hidden="true">Edad:</i> <?php echo $fila['edad']; ?></td><br>
								<i class="fa fa-phone" aria-hidden="true"></i><?php echo $fila['telefono']; ?><br>
								<i class="fa fa-home" aria-hidden="true"></i>Dirección:<?php echo $fila['direccion']; ?><br>
								<i class="fa " aria-hidden="true">Inscripción:</i> <?php echo $fila['inscripcion']; ?><br>
								<i class="fa " aria-hidden="true">Fecha de Nacimiento:</i> <?php echo $fila['birthdate']; ?><br>
								<i class="fa " aria-hidden="true">Lugar de Nacimiento:</i> <?php echo $fila['lugar']; ?></td><br>
								<i class="fa " aria-hidden="true">Plantel Procedente:</i> <?php echo $fila['procede']; ?></td><br>
								<i class="fa " aria-hidden="true">Tipo de Plantel:</i> <?php echo $fila['tipo']; ?></td><br>
								

							</p>
						</div>
					</div>
				</div>

				<div class="col">
					<p class="text-secondary">
						<strong>Representante 1:</strong> <?php echo $fila['rep']; ?> <br>
						<strong>¿Con quién vive el alumno?:</strong><?php echo $fila['vive']; ?> <br>
						<strong>Cédula del Representante:</strong> <?php echo $fila['id_rep']; ?> <br>
						<br />
						<i class="fa" aria-hidden="true">Parentezco:</i><?php echo $fila['parentesco']; ?>
						<br />
						<i class="fa" aria-hidden="true">Edad del Parentezco:</i><?php echo $fila['rep_edad']; ?>
						<br/>
						<i class="fa" aria-hidden="true">Lugar de Nacimiento</i><?php echo $fila['rep_lugar']; ?>
						<br/>
						<i class="fa" aria-hidden="true">Fecha de Nacimiento:</i><?php echo $fila['rep_nacimiento']; ?>
						<br/>
						<i class="fa" aria-hidden="true">Nacionalidad:</i><?php echo $fila['rep_nacionalidad']; ?>
						<br/>
						<i class="fa" aria-hidden="true">Estado Civil:</i><?php echo $fila['estado_civil']; ?>
						<br/>
						<i class="fa" aria-hidden="true">Profesion:</i><?php echo $fila['profesion']; ?>
						<br/>

					</p>
					<!-- Split button -->
				</div>

			</div>
			

			<div class="row">
				<div class="col">
					<div class="card" style="width: 100%; margin-top: 5px;">
					<h5 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Familia:</h5>
						<div class="card-body">
							<p class="card-text">¿Tiene hermanos estudiando en el plantel?:<?php echo $fila['est_hermanos']; ?></p>
							<p class="card-text">Número de Hermanos:<?php echo $fila['nro_hermanos']; ?></p>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="card" style="width: 100%; margin-top: 5px;">
					<h5 class="card-title"><i class="fa fa-virus" aria-hidden="true"></i> Información Médica:</h5>
						<div class="card-body">
							<p class="card-text">Enfermedades:<?php echo $fila['enfermedades']; ?></p>
							<p class="card-text">Vacunas:<?php echo $fila['vacunas']; ?></p>
						</div>
					</div>
				</div>

			</div>

		</div>   
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		</div>
		</form>
		</div>
	</div>
</div> 