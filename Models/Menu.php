<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name',
                            'price',
                            'categories',
                            'description',
                            'details',
                            'image'];

    protected $casts = [
        'details' => 'array', 
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
}
