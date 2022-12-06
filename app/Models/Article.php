<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users()
    {
        return $this->belongsTo(Comment::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()

    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
