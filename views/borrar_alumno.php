<div class="modal fade" id="eliminar<?php echo $fila['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Alumno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de querer eliminar este registro? Esta acción es irreversible.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-danger" href="../includes/eliminar_al.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
      </div>
    </div>
  </div>
</div>