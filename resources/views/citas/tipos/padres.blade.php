 <!-- Formulario para cita padres -->
 
    <div class="row gx-3">
        <div class="col-md-6">
            <!-- Form (name)-->
            <div class="mb-3">
                <label class="small mb-1" for="name">Nombre(s)</label>
                <input class="form-control" id="name" type="text" value="{{ Auth::user()->name }}"  required>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Form (lastname)-->
            <div class="mb-3">
                <label class="small mb-1" for="lastname">Apellidos</label>
                <input class="form-control" id="lastname" type="text" value="{{ Auth::user()->lastname }}"  required>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Form Group (email address)            -->
            <div class="mb-3">
                <label class="small mb-1" for="email">Correo</label>
                <input class="form-control" id="email" type="email" aria-describedby="emailHelp"
                    value="{{ Auth::user()->email }}"  required>
            </div>

        </div>
        <div class="col-md-6">
            <!-- Form (phone)-->
            <div class="mb-3">
                <label class="small mb-1" for="phone">Telefono Movil</label>
                <input class="form-control" id="phone" type="text"  required>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Form (age)-->
            <div class="mb-3">
                <label class="small mb-1" for="age">Edad</label>
                <input class="form-control" id="age" type="text">
            </div>
        </div>
        <div class="col-md-6">
            <!-- Form (city)-->
            <div class="mb-3">
                <label class="small mb-1" for="city">Ciudad</label>
                <input class="form-control" id="city" type="text">
            </div>
        </div>
    </div>


    <!-- Form (address)-->
    <div class="mb-3">
        <label class="small mb-1" for="address">Direccion</label>
        <input class="form-control" id="address" type="text"  required>
    </div>



    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xl text-center font-weight-bold text-primary text-uppercase mb-1">
                    Seleccione un rango de fechas y horarios en los que tendrá disponibilidad</div>
                    <div class="text-xl text-center font-weight-bold text-danger text-uppercase mb-1">
                       El horario de atención es de 10:00 am a 19:00 pm </div>
            </div>
        </div>
    </div>

    <div class="row gx-3">
        <div class="col-md-6">
            <!-- Form (date)-->
            <div class="mb-3">
                <label class="small mb-1" for="date">Fecha Inicio</label>
                <input class="form-control" id="date" type="date"  required>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Form (date)-->
            <div class="mb-3">
                <label class="small mb-1" for="date">Fecha Final</label>
                <input class="form-control" id="date" type="date"  required>
            </div>
        </div>

        <div class="col-md-6">
           <!-- Form (horario)-->
           <div class="mb-3">
               <label class="small mb-1" for="hI">Hora inicio</label>
               <input class="form-control" id="hI" type="time" min="10:00" max="21:00"  required>
           </div>
       </div>

       <div class="col-md-6">
           <!-- Form (horario)-->
           <div class="mb-3">
               <label class="small mb-1" for="hF">Hora Fin</label>
               <input class="form-control" id="hF" type="time" min="10:00" max="21:00"  required>
           </div>
       </div>


        
    </div>

    <!-- Form Group (submit)-->
    <a class="btn btn-success btn-block" type="submit">Agendar Cita</a>
