  <!-- Large modal -->
  <div class="modal fade bd-create-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myCreateForm"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content p-0 card mb-4">
              <div class="card-header">Registro de Usuarios</div>
              <form action="{{ route('usuarios.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                      <div class="mb-3">
                          <label class="small mb-1" for="name">Nombre(s)</label>
                          <input class="form-control" name="name" id="name" type="text" required />
                      </div>
                      <div class="mb-3">
                          <label class="small mb-1" for="lastname">Apellidos</label>
                          <input class="form-control" name="lastname" id="lastname" type="text" />
                      </div>

                      <div class="mb-3">
                          <label class="small mb-1" for="email">Correo</label>
                          <input class="form-control" name="email" type="email" id="email" required>
                      </div>

                      <div class="mb-3">
                        <label class="small mb-1" for="password">Contraseña</label>
                        <input class="form-control" name="password" type="password" id="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="small mb-1" for="password_confirmation">Repite contraseña</label>
                        <input class="form-control" name="password_confirmation" type="password" id="password_confirmation" required>
                    </div>

                      <button type="submit" class="btn btn-primary ml-auto">Guardar</button>

                  </div>
              </form>
          </div>
      </div>
  </div>
