<div>
    <a href="#" class="btn btn-danger btn-circle btn-sm abrir-modal" data-toggle="modal"
        data-target=".bd-destroy-modal-lg-{{ $role->id }}"><i class='fas fa-trash'></i></a>

    <div class="modal fade bd-destroy-modal-lg-{{ $role->id }}" id="destroyModal" tabindex="-1" role="dialog" aria-labelledby="myDestroyForm"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Estas segur@ de eliminar este Rol?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form method="POST" action="{{ route('roles.destroy',['role' =>$role->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
