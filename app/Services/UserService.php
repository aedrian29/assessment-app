<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function insert(array $userData)
    {
        return User::create($userData);
    }
}
