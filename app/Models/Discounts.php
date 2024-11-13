<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    protected $table = 'discounts';

    protected $fillable = [
        'category_discounts_id',
        'product_id',
        'start_date',
        'end_date',
        'percentage'
    ];
}
