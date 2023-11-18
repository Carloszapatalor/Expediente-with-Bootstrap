  <!-- Large modal -->
  <div class="modal fade bd-create-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myCreateForm"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content p-0 card mb-4">
              <div class="card-header">Registro de Terapias</div>
              <form action="{{ route('modalidad.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                      <div class="mb-3">
                          <label class="small mb-1" for="name_mod">Nombre de la Modalidad</label>
                          <input class="form-control" name="name_mod" id="name_mod" type="text" required />
                      </div>
                      <button type="submit" class="btn btn-primary ml-auto">Guardar</button>

                  </div>
              </form>
          </div>
      </div>
  </div>
