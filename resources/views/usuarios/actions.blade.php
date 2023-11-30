<div class="d-flex justify-content-center">
@include('usuarios.edit', [
        'id' => $id,
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,

])

{{-- ROLES --}}
@include('usuarios.roles', ['id'=>$id])


{{-- ELIMINAR --}}
@include('usuarios.destroy', [
        'id' => $id
])
</div>