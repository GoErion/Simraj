<?php

namespace App\Action;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUser
{
    public function handle(array $userData)
    {
        return User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
        ]);
    }
}
