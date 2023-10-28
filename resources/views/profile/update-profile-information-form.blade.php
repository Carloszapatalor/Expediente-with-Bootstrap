<x-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <div class="row">
            <!-- Profile picture card-->
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Identificacion Unica</div>
                    <div class="card-body text-center">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div x-data="{ photoName: null, photoPreview: null }">
                                <!-- Profile Photo File Input -->
                                <input type="file" wire:model.live="photo" x-ref="photo" style="display:none;"
                                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                            
                            <!-- Current Profile Photo -->
                                <div class="avatar avatar-xxl" x-show="! photoPreview">
                                    <img src="{{ $this->user->profile_photo_url }}"
                                    class="img-profile rounded-circle">
                                </div>

                                @if ($this->user->profile_photo_path)
                                    <x-secondary-button type="button" class="btn btn-danger btn-sm"
                                        wire:click="deleteProfilePhoto">
                                        {{ __('Remove Photo') }}
                                    </x-secondary-button>
                                @endif

                                <x-input-error for="photo" class="mt-2" />
                            </div>
                        @endif
                        <br>

                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <div class="col-span-6 sm:col-span-4 text:center">
                                <x-label class="small mb-1" for="enrollment" value="{{ __('Matricula') }}" />
                                <x-input class="form-control" id="enrollment" type="text"
                                    wire:model="state.enrollment" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Datos Generales</div>
                    <div class="card-body">
                        

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="name">Nombre (s)</label>
                                <input class="form-control" id="name" type="text" wire:model="state.name" />
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="lastname">Apellidos</label>
                                <input class="form-control" id="lastname" type="text" wire:model="state.lastname" />
                            </div>

                            <!-- Form Group (gender)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="gender">Genero</label>
                                <input class="form-control" id="gender" type="text" name="gender" />
                            </div>

                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="birthday">Fecha de Nacimiento</label>
                                <input class="form-control" id="birthday" type="date" name="birthday" />
                            </div>
                        </div>


                         <!-- Form Group (email address)-->
                         <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email"
                                 wire:model="state.email" />
                        </div>

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Telefono</label>
                                <input class="form-control" id="inputPhone" type="tel"
                                    />
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Ciudad</label>
                                <input class="form-control" id="inputLocation" type="text"
                                     />
                            </div>

                        </div>

                         <!-- Form Group (address)-->
                         <div class="mb-3">
                            <label class="small mb-1" for="address">Direccion</label>
                            <input class="form-control" id="address" type="text" />
                        </div>

                     
                    </div>
                    <button wire:loading.attr="disabled" wire:target="photo" class="btn btn-primary">Guardar</button>
                </div>
            </div>   
        </div>

    </x-slot>

  
</x-form-section>
