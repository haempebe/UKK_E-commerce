<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    protected $table = 'deliveries';
    protected $fillable = [
        'order_id',
        'shipping_date',
        'tracking_code',
        'status'
    ];
}
