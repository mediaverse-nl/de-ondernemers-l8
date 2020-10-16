<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $fillable = ['key_name', 'text_type', 'mentions', 'text', 'lang'];

    protected $casts = [
        'mentions' => 'array',
    ];

}
