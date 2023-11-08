<div class="d-flex justify-content-center">
@include('terapias.edit', [
        'id' => $id,
        'therapy' => $therapy,
        'description' => $description,
        'price' => $price,

])
{{-- ELIMINAR --}}
@include('terapias.destroy', [
        'id' => $id
])
</div>