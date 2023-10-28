<x-layout.app title="Inicio">
    <x-layout.heading title="" description=""/>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-xxl-4 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <h1 class="text-primary">Bienvenido {{Auth::user()->name}}!</h1>
                                    <p class="text-gray-700 mb-0">
                                        Reserva tu cita en el apartado "Citas" 
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="{{asset('../admin_assets/img/at-work.svg')}}" style="max-width: 26rem" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-layout.app>