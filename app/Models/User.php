<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'username',
        'password',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = sha1($password);
    }
}
