<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return to_route('login');
});



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])
->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/inicio', function () {
        return view('pacientes.index');
    })->name('pacientes.inicio');

    Route::get('/citas', function () {
        return view('pacientes.create');
    })->name('pacientes.citas');

    
  
});