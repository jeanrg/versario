 <!-- Modal -->
 <div class="modal fade" id="agregarVersoModal" tabindex="-1" aria-labelledby="agregarVersoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white" id="staticBackdropLabel">Versiculo del día</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <input type="text" name="txtID" id="txtID" hidden>

            <label class="text-muted font-weight-bold" for="txtTitle">Versículo:</label>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-bible text-muted"></i></span>
                </div>
                <input class="form-control" type="text" name="txtTitle" id="txtTitle" placeholder="Ingresar versículo de hoy...">

            </div>

            <div class="form-group">
                <label class="text-muted font-weight-bold"  for="txtDescripcion">Nota:</label>
                <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="Escribir una breve nota..." rows="2"></textarea>
              </div>

            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label class="text-muted font-weight-bold" for="txtFecha">Fecha:</label>
                    <input class="form-control" type="date" name="txtFecha" id="txtFecha">
                </div>

                <div class="col-md-6 mb-3">
                    <span class="text-inline text-success"><i class="fas fa-palette"></i></span>
                    <label class="text-muted font-weight-bold" for="txtColor"> Seleccionar color:</label>
                    <input class="form-control" type="color" name="txtColor" id="txtColor">
                </div>

                {{-- <div class="col-md-6 mb-3">
                    <span class="text-inline"><i class="far fa-check-circle"></i></span>
                    <label class="text-muted font-weight-bold" for="txtStatus">Estado:</label>
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" value="1" name="txtStatus" id="txtStatus">
                        <label class="custom-control-label" for="txtStatus">No leído</label>
                      </div>
                </div> --}}

            </div>

        </div>
        <div class="modal-footer">
            <div class="mx-auto">
            <button id="btnAgregar" class="btn btn-sm btn-outline-success">Agregar</button>
            <button id="btnModificar" class="btn btn-sm btn-outline-warning">Modificar</button>
            <button id="btnEliminar" class="btn btn-sm btn-outline-danger">Eliminar</button>
            <button id="btnCancelar" data-dismiss="modal" class="btn btn-sm btn-outline-secondary">Cancelar</button>
            </div>
         </div>
      </div>
    </div>
  </div>
