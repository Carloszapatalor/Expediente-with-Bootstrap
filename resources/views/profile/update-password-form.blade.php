<x-form-section submit="updatePassword">
    <x-slot name="form">
        <!-- Change password card-->
        <!-- Form Group (current password)-->
        <div class="mb-3">
            <label class="small mb-1" for="current_password">Contraseña Actual</label>
            <input class="form-control" id="current_password" type="password" wire:model="state.current_password"
                autocomplete="current_password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>
        <!-- Form Group (new password)-->
        <div class="mb-3">
            <label class="small mb-1" for="password">Nueva Contraseña</label>
            <input class="form-control" id="password" type="password" wire:model="state.password"
                autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>
        <!-- Form Group (confirm password)-->
        <div class="mb-3">
            <label class="small mb-1" for="password_confirmation">Confirmar Nueva Contraseña</label>
            <input class="form-control" id="password_confirmation" type="password"
                wire:model="state.password_confirmation" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </x-slot>
</x-form-section>
