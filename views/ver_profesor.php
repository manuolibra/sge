<div class="modal fade" id="ver<?php echo $fila["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header bg-primary">
			<h2 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $fila['nombres']; ?> <?php echo $fila['apellidos']; ?></h5>
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
								<i class="fa fa-id-card" aria-hidden="true"><?php echo $fila['cedula']; ?></i><br>
								<i class="fa fa-phone"><Strong>Telefono:</strong></i><?php echo $fila['telefono']; ?><br>
								<strong>Edad:</strong><?php echo $fila['edad']; ?><br>
								<strong>Fecha de Nacimiento:</strong><?php echo $fila['fecha_na']; ?><br>
								<strong>Lugar de Nacimiento:</strong><?php echo $fila['lugar_na']; ?><br>
								<strong>Fecha de Registro:</strong> <?php echo $fila['fecha']; ?><br>
								<strong>Estado Civil:</strong><?php echo $fila['estado_civil']; ?><br>
							</p>
						</div>
					</div>
				</div>

				<div class="col">
					<p class="text-secondary">
						<strong>Direccion:</strong><?php echo $fila['direccion']; ?><br>
						<strong>Curp:</strong><?php echo $fila['curp']; ?><?php echo $fila['direccion']; ?><br>						
						<strong>Email:</strong><?php echo $fila['correo']; ?><br>
						<strong>Nivel Educativo:</strong><?php echo $fila['niv_edu']; ?><br>
						<strong>Estudio de Postgrado:</strong><?php echo $fila['est_post']; ?><br>
						<strong>Cursos Realizados:</strong><?php echo $fila['cursos']; ?><br>
						<strong>Tiempo de Servicio:</strong><?php echo $fila['t_servicio']; ?><br>
						<strong>Fecha de Ingreso:</strong><?php echo $fila['f_ingreso']; ?><br>
						<strong>Tipo de Personal:</strong><?php echo $fila['tipo_p']; ?><br>
						<strong>Cargo:</strong><?php echo $fila['cargo']; ?><br>
						<strong>Lugar donde Cobra:</strong><?php echo $fila['l_cobra']; ?><br>
						<strong>Lugar donde Labora:</strong><?php echo $fila['l_labora']; ?><br>
						<strong>Denominación de Cargo:</strong><?php echo $fila['d_cargo']; ?><br>
						<strong>Codigo:</strong><?php echo $fila['codigo']; ?><br>
						
					</p>
					<!-- Split button -->
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