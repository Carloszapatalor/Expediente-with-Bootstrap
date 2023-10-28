<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    
    public function perfil()
    {
        return view("profile/show");
    }

    public function seguridad()
    {
        return view("profile/showSecurity");
    }
}