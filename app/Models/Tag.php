<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    public function Posts()
    {
        return $this->morphedByMany(Post::class, 'tageable');
    }
    public function Videos()
    {
        return $this->morphedByMany(Video::class, 'tageable');
    }
}
