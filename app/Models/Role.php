<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = true; // or false, if you're not using created_at/updated_at

    protected $fillable = [
        'role_name',
        'description',
    ];
}
