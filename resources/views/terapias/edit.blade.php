<div>
    <a href="#" class="btn btn-primary btn-circle btn-sm abrir-modal" data-toggle="modal"
        data-target=".bd-edit-modal-lg-{{ $terapia->id }}"><i class="fas fa-pencil-alt"></i></a>

        
    <div class="modal fade bd-edit-modal-lg-{{ $terapia->id }}" tabindex="-1" role="dialog" aria-labelledby="myEditForm"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-0 card mb-4">
                <div class="card-header">Editar de Terapias</div>
                <form action="{{ route('terapias.update', ['terapia' => $terapia->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <pre>{{ $terapia }}</pre>
                        <div class="mb-3">
                            <label class="small mb-1" for="therapy">Nombre de la Terapia</label>
                            <input class="form-control" name="therapy" id="therapy" type="text"
                                value="{{ $terapia->therapy }}" required />
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="description">Descripcion</label>
                            <input class="form-control" name="description" id="description" type="text"
                                value="{{ $terapia->description }}" />
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="price">Precio</label>
                            <input class="form-control" name="price" type="number" id="precio" name="precio"
                                step="0.01" min="0" value="{{ $terapia->price }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary ml-auto">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
