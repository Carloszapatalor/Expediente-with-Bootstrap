<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $enrollment = $this->generateMatricula($input);

        $user = User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'enrollment' => $enrollment,
        ]);

        return $user;
    }

    public function generateMatricula($input) {
        $currentYear = now()->format('y');
        $currentDay = now()->format('d'); 
        
        $nameInitial = strtoupper(substr($input['name'], 0, 1));
        $lastnameInitial = strtoupper(substr($input['lastname'], 0, 1));

        $randomNumbers = mt_rand(10, 99);
    
        $matricula = "YOL{$currentYear}{$currentDay}{$nameInitial}{$lastnameInitial}{$randomNumbers}";

        $matricula = strtoupper($matricula);
    
        return $matricula;
    }
}