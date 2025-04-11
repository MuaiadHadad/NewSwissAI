<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'author', 'published_at', 'image_path', 'excerpt', 'content',
    ];
}
