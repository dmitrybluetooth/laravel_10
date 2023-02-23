<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class LoginService
{
    /**
     * @param string $email
     * @param string $password
     * @param bool $remember
     * @return bool
     */
    public function login(string $email, string $password, bool $remember = false): bool
    {
        if (Auth::attempt([
            'email' => $email,
            'password' => $password,
        ], $remember)) {
            return true;
        }

        return false;
    }
}
