<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = ['username',
                            'email',
                            'password',
                            'is_admin'];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}