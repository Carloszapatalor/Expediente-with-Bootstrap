<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\TerapiaController;
use App\Http\Controllers\UserController;
use App\Models\Terapia;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return to_route('login');
});

// Route::resource('citas', CitasController::class)->names('citas');
Route::resource('citas', CitasController::class)->names('citas');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])
->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/inicio', function () {
    //     return view('pacientes.index');
    // })->name('pacientes.inicio');

    // Route::get('/citas', function () {
    //     return view('pacientes.create');
    // })->name('pacientes.citas');
    
    // <===================   ROUTES DATA TABLES ======================>
    Route::get('datatables/terapias', [DatatableController::class,'terapias'])->name('datatable.terapias');
    Route::get('datatables/modalidades', [DatatableController::class,'modalidades'])->name('datatable.modalidades');
    Route::get('datatables/usuarios', [DatatableController::class,'usuarios'])->name('datatable.usuarios');
   
   
   // <===================== ROUTES TIPO RESOURCE ======================>
    Route::resource('terapias', TerapiaController::class)->names('terapias');
    Route::resource('modalidad', ModalidadController::class)->names('modalidad');
    Route::resource('usuarios', UserController::class)
                ->parameters(['usuarios' => 'users'])
                ->names('usuarios');

        
});