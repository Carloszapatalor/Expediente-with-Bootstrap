<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected function getDefaultGuardName(): string
    {
        return 'web';
    }
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $rolExistente = Role::where('name',$request->name)->where('guard_name', 'web')->exists();

        if ($rolExistente) {
            return redirect()->back()->with('error', 'El rol ya existe.');
        }

        $role = Role::create(['name' => $request->name, 'guard_name' => 'web']);
        $role->syncPermissions($request->permissions);
        return redirect()->route('roles.index', $role);
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('roles.edit', compact('permissions', 'roles'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'El rol se elimino con éxito');
    }
}