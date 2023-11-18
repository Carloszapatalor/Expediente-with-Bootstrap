<div class="d-flex justify-content-center">
@include('usuarios.edit', [
        'id' => $id,
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,

])
{{-- ELIMINAR --}}
@include('usuarios.destroy', [
        'id' => $id
])
</div>