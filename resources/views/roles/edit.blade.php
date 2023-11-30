<div>
    <a href="#" class="btn btn-primary btn-circle btn-sm abrir-modal mr-2" data-toggle="modal"
        data-target=".bd-edit-modal-lg-{{$role->id }}"><i class="fas fa-pencil-alt "></i></a>


    <div class="modal fade bd-edit-modal-lg-{{$role->id }}" tabindex="-1" role="dialog" aria-labelledby="myEditForm"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-0 card mb-4">
                <div class="card-header">
                    Editar de Modalidad
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <form action="{{ route('roles.update', ['role' => $role->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="small mb-1" for="name">Nombre del Rol</label>
                            <input class="form-control" name="name" id="name" type="text"
                                value="{{ $role->name}}" required />
                        </div>

                        <div>
                            <p>Permisos:</p>
                            @foreach($role->permissions as $permission)
                                <input type="checkbox" id="permission_{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" {{ $role->hasPermissionTo($permission->id) ? 'checked' : '' }}>
                                <label for="permission_{{ $permission->id }}">{{ $permission->description }}</label><br>
                            @endforeach
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                          </div>
            
                       
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary ml-auto">Guardar</button>
                            <button type="button" class="btn btn-secondary ml-2"
                                data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
