<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $table = 'order_detail';
    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'subtotal'
    ];
}
