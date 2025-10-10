<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'price',
        'description',
        'status',
        'category_id'
    ];

    // Relationship between categories and products tables
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
