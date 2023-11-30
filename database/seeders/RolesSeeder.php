<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        
        Permission::create(['name' => 'modalidad', 'description'=>'Ver Modalidades'])->syncRoles($admin);
        Permission::create(['name' => 'terapias', 'description'=>'Ver Terapias'])->syncRoles($admin);

    }
}