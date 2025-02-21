<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'recipe_id',
        'content',
        'name'

    ];



    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }


    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
