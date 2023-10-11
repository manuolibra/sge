<div class="modal fade" id="ver<?php echo $fila["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
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
								<strong>Issue Date :</strong> <?php echo $fila['fecha']; ?>
							</p>
						</div>
					</div>
				</div>

				<div class="col">
					<p class="text-secondary">
						<strong>Edad:</strong><?php echo $fila['edad']; ?><br>
						
						<strong>Curp:</strong><?php echo $fila['curp']; ?><br>
						
						<strong>Fecha de Nacimiento:</strong><?php echo $fila['fecha_na']; ?>
						
						<strong>Email:</strong><?php echo $fila['correo']; ?>
						
						<strong>Especialidad:</strong><?php echo $fila['id_especialidad']; ?>
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