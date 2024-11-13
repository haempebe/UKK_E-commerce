<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCategories extends Model
{
    protected $table = 'discount_categories';

    protected $fillable = [
        'category_name',
    ];
}
