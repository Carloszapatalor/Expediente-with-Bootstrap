<x-layout.header title="Citas" />
<x-layout.app>
    <x-layout.heading title="Citas" description="Selecciona el tipo de terapa para generar su cita" />

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <label for="tipoCita">Seleccione el tipo de cita:</label>
                    <select class="form-control form-control-solid mb-4" id="tipoCita" onchange="mostrarFormulario()">
                        <option>-- Seleccione --</option>
                        @foreach ($terapias as $terapia)
                        <option value="{{ $terapia->therapy }}">{{ $terapia->therapy }} - ${{ $terapia->price }} MXN
                        </option>
                        @endforeach
                    </select>

                    <div id="formularioIndividual" class="formularioOculto">
                        @include('citas.tipos.individual')
                    </div>

                    <div id="formularioInfantil" class="formularioOculto">
                        @include('citas.tipos.infantil')
                    </div>

                    <div id="formularioAdolecente" class="formularioOculto">
                        @include('citas.tipos.Adolecente')
                    </div>

                    <div id="formularioPadres" class="formularioOculto">
                        @include('citas.tipos.padres')
                    </div>

                    <div id="formularioParejas" class="formularioOculto">
                        @include('citas.tipos.parejas')
                    </div>



                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ocultar todos los formularios al cargar la página
            let formularios = document.getElementsByClassName('formularioOculto');
            for (let i = 0; i < formularios.length; i++) {
                formularios[i].style.display = 'none';
            }
        });

        function mostrarFormulario() {
            let tipoCita = document.getElementById('tipoCita').value;
            
            // Oculta todos los formularios
            let formularios = document.getElementsByClassName('formularioOculto');
            for (let i = 0; i < formularios.length; i++) {
                formularios[i].style.display = 'none';
            }
            

            // Muestra el formulario correspondiente al tipo de terapia seleccionado
            let formularioElegido = document.getElementById('formulario' + tipoCita);

            if (formularioElegido) {
                formularioElegido.style.display = 'block';
            }
        }
    </script> --}}


    <script>
    function mostrarFormulario() {
        var select = document.getElementById('tipoCita');
        var valorSeleccionado = select.options[select.selectedIndex].value;

        // Oculta todos los formularios
        var formularios = document.querySelectorAll('[id^="formulario"]');
        formularios.forEach(function(formulario) {
            formulario.style.display = 'none';
        });

        // Muestra el formulario correspondiente al valor seleccionado
        document.getElementById('formulario' + valorSeleccionado).style.display = 'block';
    }
    </script>











</x-layout.app>