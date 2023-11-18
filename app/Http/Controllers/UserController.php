<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("usuarios.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CreateNewUser $createNewUser)
    {
        $datosUsuario = $request->only('name', 'lastname', 'email', 'password', 'password_confirmation');
        $createNewUser->create($datosUsuario);
        
        
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, UpdateUserProfileInformation $updateUserProfile, string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpdateUserProfileInformation $updateUserProfile, string $id)
    {
      
        $user = User::findOrFail($id);
        $datosUsuarioActualizados = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email'=> $request->input('email')
        ];
        $updateUserProfile->update($user, $datosUsuarioActualizados);
        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        if ($usuario) {
            // Crea una instancia de la clase DeleteUser de Jetstream
            $deleteUserAction = app(DeleteUser::class);
            // Llama al método delete de la instancia DeleteUser
            $deleteUserAction->delete($usuario);

            return view("usuarios.index");
        } else {
            return view("usuarios.index");
        }
    }
}