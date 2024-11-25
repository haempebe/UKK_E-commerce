<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_category_id',
        'product_name',
        'description',
        'price',
        'stock_quantity'
    ];
}
