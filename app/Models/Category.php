<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // Define fillable fields if needed
    protected $fillable = [
        'category_name',
        'slug',
        'description',
    ];
}
