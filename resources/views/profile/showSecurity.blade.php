<x-layout.header title="Seguridad"/>
<x-layout.app>

    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Cuenta - Seguridad
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
            <div class="row">

                <div class="col-lg-8">
                    <!-- Change password card-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Cambiar Contraseña
                            </h6>
                        </div>
                        <div class="card-body">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                @livewire('profile.update-password-form')
                            @endif
                        </div>
                    </div>
                    <!-- End Change password card-->

                    <!-- Security preferences card-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Sesiones de navegador
                            </h6>
                        </div>
                        <div class="card-body">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                        <!-- Security preferences card-->
                    </div>
                </div>


                {{-- <div class="col-lg-4">
                    <!-- Two factor authentication card-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Autenticación de dos factores
                            </h6>
                        </div>

                        <div class="card-body">
                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.two-factor-authentication-form')
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--End Two factor authentication card-->
                    <div class="card mb-4">
                        <div class="card-header">Delete Account</div>
                        <div class="card-body">
                            <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                            <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-4">
                    <!-- Two factor authentication card-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Autenticación de dos factores
                            </h6>
                        </div>
                        <div class="card-body">
                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                @livewire('profile.two-factor-authentication-form')
                            @endif
                        </div>
                    </div>
                </div>
                
                <br>

            </div>
        </div>


    </main>




</x-layout.app>
