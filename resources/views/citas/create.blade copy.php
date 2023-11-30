  <!-- Large modal -->
  <div class="modal fade bd-create-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myCreateForm"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content p-0 card mb-4">
              <div class="card-header">Registro de Terapias</div>
              <form action="{{ route('terapias.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                      <div class="mb-3">
                          <label class="small mb-1" for="therapy">Nombre de la Terapia</label>
                          <input class="form-control" name="therapy" id="therapy" type="text" required />
                      </div>
                      <div class="mb-3">
                          <label class="small mb-1" for="description">Descripcion</label>
                          <input class="form-control" name="description" id="description" type="text" />
                      </div>

                      <div class="mb-3">
                          <label class="small mb-1" for="price">Precio</label>
                          <input class="form-control" name="price" type="number" id="precio" name="precio"
                              step="0.01" min="0" required>
                      </div>
                      <button type="submit" class="btn btn-primary ml-auto">Guardar</button>

                  </div>
              </form>
          </div>
      </div>
  </div>
