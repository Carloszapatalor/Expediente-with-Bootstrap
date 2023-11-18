<div class="d-flex justify-content-center">
    @include('modalidades.edit', [
            'id' => $id,
            'name_mod' => $name_mod,
    
    ])
    {{-- ELIMINAR --}}
    @include('modalidades.destroy', [
            'id' => $id
    ])
    </div>