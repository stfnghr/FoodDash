<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    protected $fillable = ['username',
                            'email',
                            'password',
                            'is_admin'];

    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}