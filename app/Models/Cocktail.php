<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'category', 'tags', 'ingredients', 'is_alcoholic', 'instructions', 'thumb', 'glass_type'];

    protected $casts = [
        'tags' => 'array',
        'ingredients' => 'array'
    ];
}
