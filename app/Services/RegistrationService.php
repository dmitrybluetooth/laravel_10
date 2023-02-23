<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{
    public function register(string $name, string $email, string $password): bool
    {
        $user = User::where('email', $email)->count();

        if (!$user) {
            try {
                User::create([
                    'name'      => $name,
                    'email'     => $email,
                    'password'  => Hash::make($password),
                ]);
            } catch (\Exception $e) {
                return false;
            }
        }

        return true;
    }
}
