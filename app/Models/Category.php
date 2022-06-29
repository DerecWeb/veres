<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name_ua',
        'category_name_ru',
        'category_slug_ua',
        'category_slug_ru',
        'category_icon',
    ];
}
