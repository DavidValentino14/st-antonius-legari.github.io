<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGereja extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];
}