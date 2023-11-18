<div>
    <a href="#" class="btn btn-primary btn-circle btn-sm abrir-modal mr-2" data-toggle="modal"
        data-target=".bd-edit-modal-lg-{{ $id }}"><i class="fas fa-pencil-alt "></i></a>


    <div class="modal fade bd-edit-modal-lg-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myEditForm"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-0 card mb-4">
                <div class="card-header">
                    Editar de Modalidad
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>

                <form action="{{ route('modalidad.update', ['modalidad' => $id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="small mb-1" for="name_mod">Nombre de la Terapia</label>
                            <input class="form-control" name="name_mod" id="name_mod" type="text"
                                value="{{ $name_mod }}" required />
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
