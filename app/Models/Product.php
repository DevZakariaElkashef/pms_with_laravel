<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['category_id', 'name', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        // return $this->belongsToMany('App\Models\Image')
        return $this->belongsToMany(Image::class, 'product_image');
    }
}
