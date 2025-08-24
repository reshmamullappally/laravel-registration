<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'product_image',
        'product_expiry',
        'description',
        'price',
        'stock',
        'status',
    ];
}
