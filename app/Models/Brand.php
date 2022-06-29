<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name_ua',
        'brand_name_ru',
        'brand_slug_ua',
        'brand_slug_ru',
        'brand_image',
    ];


}
