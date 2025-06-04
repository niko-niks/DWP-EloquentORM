<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Relationships
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}