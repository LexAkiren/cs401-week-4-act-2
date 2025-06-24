<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'publication_date',
        'last_modified_date',
        'status',
        'featured_image_url',
        'views_count',
        'user_id',
        'category_id',
    ];
}
