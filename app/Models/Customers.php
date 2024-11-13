<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Customers extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'customers';
    protected $fillable = [
        'user_id',
        'name',
        'pin',
        'phone',
        'main_address'
    ];
}
