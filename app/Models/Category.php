<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id','name', 'code', 'description', 'image', 'status'];




    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_category_id', 'id')->withDefault(['name'=>'parent category']);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_category_id', 'id');
    }
    //relations with product
    protected function Name():Attribute
    {
        return Attribute::make(
            get:fn (string $value) => Str::lower($value),
            set:fn (string $value) => Str::lower($value)
        );
    }


}

