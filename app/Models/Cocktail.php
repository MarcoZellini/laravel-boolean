<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cocktail extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'tags', 'ingredients', 'is_alcoholic', 'instructions', 'thumb', 'glass_type'];

    protected $casts = [
        'tags' => 'array',
        'ingredients' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
