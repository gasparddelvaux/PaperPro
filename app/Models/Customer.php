<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'name',
        'email',
        'phone',
        'website',
        'vat_number',
        'description',
        'comment',
        'status',
    ];
}
