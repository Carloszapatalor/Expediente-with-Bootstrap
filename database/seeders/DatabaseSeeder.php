<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        
        $this->call(RolesSeeder::class);
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
           
            
            'name' => 'Admin',
            'lastname' => 'Sistemas',
            'email' => 'sistemas@example.com',
            'password' => bcrypt('123456789'),
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ])->assignRole('admin');
    }
}