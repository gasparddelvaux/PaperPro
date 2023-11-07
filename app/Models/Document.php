<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class, 'documenttype_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'document_product')
            ->withPivot(['selling_price', 'quantity', 'discount', 'total', 'price_hvat', 'price_vvat', 'total_hvat']);
    }
     
    protected $fillable = [
        'reference',
        'customer_id',
        'documenttype_id',
        'totalhvat',
        'vat',
        'totalttc',
        'status',
        'comment',
    ];
}
