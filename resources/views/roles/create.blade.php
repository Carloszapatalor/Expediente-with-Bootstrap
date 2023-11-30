  <!-- Large modal -->
  <div class="modal fade bd-create-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myCreateForm" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content p-0 card mb-4">
              <div class="card-header">Registro de Roles</div>
              <form action="{{ route('roles.store') }}" method="POST">
                  @csrf
                  <div class="row justify-content-center">  
                            <div class="card-body">
    
                                <form method="post" action="{{route('roles.store')}}">
                                    <input  name="name" placeholder=" Nombre del Rol">
                        
    
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light ">Lista de permisos</h3>
                                    </div>
    
                                    <div class="card-body">
                                        @foreach ($permissions as $permission)
                                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                                class="mr-1" id="permission_{{ $permission->id }}">
                                            <label
                                                for="permission_{{ $permission->id }}">{{ $permission->description }}</label><br>
                                        @endforeach
    
                                    </div>
    
                                    <div class="row mb-3">
                                        <button class="btn btn-primary" type="submit">Crear</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                  
              </form>
          </div>
      </div>
  </div>
