<x-layout.header title="Perfil"/>
<x-layout.app> 
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Cuenta - Perfil
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            @include('profile.nav')
            <!-- End Account page navigation-->
            <hr class="mt-0 mb-4" /> 
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                 @livewire('profile.update-profile-information-form')
                @endif
             
        </div>
    </main>




</x-layout.app>
