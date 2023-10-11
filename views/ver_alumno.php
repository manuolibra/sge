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
					<img src='upload_images/$imagen' class='card-img-top' alt='...' style='width: 150px; height: 150px;'>
						<div class="card-body">
							<p class="card-text">
								<i class="fa fa-id-card" aria-hidden="true"><?php echo $fila['cedula_escolar']; ?></i><br>
								<i class="fa fa-phone" aria-hidden="true"></i><?php echo $fila['telefono']; ?><br>
								<i class="fa fa-home" aria-hidden="true"></i>Dirección:<?php echo $fila['direccion']; ?><br>
								Inscripción: <?php echo $fila['inscripcion']; ?>
							</p>
						</div>
					</div>
				</div>

				<div class="col">
					<p class="text-secondary">
						<strong>Representante 1:</strong> <?php echo $fila['rep']; ?> <br>
						<strong>Cédula del Representante:</strong> <?php echo $fila['id_rep']; ?> <br>
						<i class="fa fa-venus-mars" aria-hidden="true"></i> <?php echo $fila['sexo']; ?>
						<br />
						<i class="fa fa-envelope-o" aria-hidden="true"></i> Email
						<br />
					</p>
					<!-- Split button -->
				</div>

			</div>
			

			<div class="row">
				<div class="col">
					<div class="card" style="width: 100%; margin-top: 5px;">
					<h5 class="card-title"><i class="fa fa-users" aria-hidden="true"></i> Familia:</h5>
						<div class="card-body">
							<p class="card-text"> Familiares </p>
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