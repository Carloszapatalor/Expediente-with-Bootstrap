<x-layout.header title="Terapias" />
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
@endsection

<x-layout.app>
    <x-layout.heading title="Altas de Terapias" description="" />

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-success" data-toggle="modal"
                data-target=".bd-create-modal-lg">Registrar</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTable" id="terapias" width="100%" cellspacing="0"
                    role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Nombre (s)</th>
                            <th>Apellidos</th>
                            <th>Terapia</th>
                            <th>Modalidad</th>
                            <th>Telefono/Movil</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>
    </div>

    @include('terapias.create')







    @section('js')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

        <script>
            new DataTable('#terapias', {
                responsive: true,
                autoWidth: false,
                "ajax":"{{route('datatable.terapias')}}",

                "columns":[
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'lastname'},
                    {data: 'price'},
                    {data: 'btn'},

                ],
                "language": {
                    "lengthMenu": "Ver de _MENU_ ",
                    "zeroRecords": "No se encontraron registros",
                    "info": "Pagina  _PAGE_ de _PAGES_",
                    "infoEmpty": "",
                    "loadingRecords": "Cargando...",
                    "infoFiltered": "Filtrado de _MAX_ paginas",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                }
            });
        </script>
    @endsection

</x-layout.app>
