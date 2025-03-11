<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
 public function Image(){
    return $this->morphOne(Image::class, 'imageable');
 }

 public function Tags(){
    return $this->morphToMany(Tag::class, 'tageable');
 }

}
