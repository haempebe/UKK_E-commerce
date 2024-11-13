<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'customer_id',
        'order_date',
        'total_amount',
        'status'
    ];
}
