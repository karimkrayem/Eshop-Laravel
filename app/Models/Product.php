<?php

namespace App\Models;

use App\Models\Size;
use App\Models\User;
use App\Models\Image;
use App\Models\Review;
use App\Models\Category;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    // public function productImages()
    // {
    //     return $this->hasMany(Image::class, 'Product_id', 'id');
    // }

    public function reviews()

    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }



    protected $fillable = ['name', 'description', 'category_id', 'size_id', 'price', 'stock', 'user_id'];
}
