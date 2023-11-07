<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_product')
            ->withPivot(['selling_price', 'quantity', 'discount', 'total', 'price_hvat', 'price_vvat', 'total_hvat']);
    }

    protected $fillable = [
        'reference',
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
