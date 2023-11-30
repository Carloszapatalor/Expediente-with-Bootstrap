<div>
    <a href="#" class="btn btn-info btn-circle btn-sm abrir-modal" data-toggle="modal"
        data-target=".bd-edit-modal-lg-{{ $id }}"><i class="fas fa-key"></i></a>


    <div class="modal fade bd-edit-modal-lg-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myEditForm"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-0 card mb-4">
                <div class="card-header">
                    Editar Usuarios
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <form action="{{ route('usuarios.update', ['users' => $id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="small mb-1" for="name">Nombre</label>
                            <input class="form-control" name="name" id="name" type="text"
                                value="{{ $name }}" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="lastname">Apellidos</label>
                            <input class="form-control" name="lastname" id="lastname" type="text"
                                value="{{ $lastname }}" />
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="email">Correo</label>
                            <input class="form-control" name="email" type="email" id="email"
                                 value="{{ old('email', $email) }}" required>
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary ml-auto">Guardar</button>
                            <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
