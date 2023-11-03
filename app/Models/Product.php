<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand',
        'ean_code',
        'stock',
        'stock_min',
        'buying_price',
        'selling_price',
        'description',
        'comment',
        'status',
    ];
}
