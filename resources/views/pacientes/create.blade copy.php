<x-layout.header title="Citas" />
<x-layout.app title="Citas">
    <label for="tipoCita">Seleccione el tipo de cita:</label>
    <select id="tipoCita" onchange="mostrarFormulario()">
        <option value="individual">Individual</option>
        <option value="tercero">Individual Infantil</option>
        <option value="pareja">Parejas</option>
        <option value="padres">Padres</option>
    </select>

    <form id="formulario">
        <div id="datosPersona">
            <label for="nombre">Nombre:</label>
            <input type="text" value="{{ Auth::user()->name }}" id="nombre" required><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" value="{{ Auth::user()->lastname }}" id="apellido" required><br><br>
            <label for="email">Correo:</label>
            <input type="email" value="{{ Auth::user()->email }}" id="email" required><br><br>
        </div>

        <div id="datosTercero" style="display:none;">
            <h3>Datos del Tercero</h3>
            <label for="nombreTercero">Nombre del Tercero:</label>
            <input type="text" id="nombreTercero" required><br><br>
            <label for="apellidoTercero">Apellido del Tercero:</label>
            <input type="text" id="apellidoTercero" required><br><br>
            <label for="edadTercero">Edad del Tercero:</label>
            <input type="number" id="edadTercero" required><br><br>

            <h3>Datos del Tutor</h3>
            <label for="nombreTutor">Nombre del Tutor:</label>
            <input type="text" id="nombreTutor" required><br><br>
            <label for="apellidoTutor">Apellido del Tutor:</label>
            <input type="text" id="apellidoTutor" required><br><br>
            <label for="edadTutor">Edad del Tutor:</label>
            <input type="number" id="edadTutor" required><br><br>
        </div>

        <div id="datosPareja" style="display:none;">
            <h3>Datos de la Pareja</h3>
            <label for="nombrePareja">Nombre de la Pareja:</label>
            <input type="text" id="nombrePareja" required><br><br>
            <label for="apellidoPareja">Apellido de la Pareja:</label>
            <input type="text" id="apellidoPareja" required><br><br>
            <label for="edadPareja">Edad de la Pareja:</label>
            <input type="number" id="edadPareja" required><br><br>
        </div>

        <input type="submit" value="Enviar">
    </form>

    <script>
        function mostrarFormulario() {
            var tipoCita = document.getElementById("tipoCita").value;
            var datosPersona = document.getElementById("datosPersona");
            var datosTercero = document.getElementById("datosTercero");
            var datosPareja = document.getElementById("datosPareja");

            if (tipoCita === "individual") {
                datosPersona.style.display = "block";
                datosTercero.style.display = "none";
                datosPareja.style.display = "none";
            } else if (tipoCita === "tercero") {
                datosPersona.style.display = "none";
                datosTercero.style.display = "block";
                datosPareja.style.display = "none";
            } else if (tipoCita === "pareja") {
                datosPersona.style.display = "none";
                datosTercero.style.display = "none";
                datosPareja.style.display = "block";
            } else {
                // Para el caso de padres
                // Puedes agregar aquí las lógicas necesarias si fuera necesario.
            }
        }
    </script>



</x-layout.app>
