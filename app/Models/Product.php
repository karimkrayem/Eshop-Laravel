<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Size;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    protected $fillable = ['name', 'description', 'category_id', 'size_id', 'price', 'stock'];
}
