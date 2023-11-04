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
