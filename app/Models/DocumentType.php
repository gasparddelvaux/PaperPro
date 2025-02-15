<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;
    protected $table = 'documenttypes';
    protected $fillable = [
        'reference',
        'name',
        'description',
        'status',
    ];
}
