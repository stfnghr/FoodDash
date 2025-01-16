<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id',
                            'menu_id',
                            'amount',
                            'price',
                            'delivery_date',
                            'delivery_status',
                            'courier_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function couriers()
    {
        return $this->belongsTo(Courier::class);
    }
}
