<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'ingredients',
        'image',
        'instructions',
        'category'

    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
