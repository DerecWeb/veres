<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_name_ua',
        'subcategory_name_ru',
        'subcategory_slug_ua',
        'subcategory_slug_ru',
    ];

    public function category(){
        return$this->belongsTo(Category::class, 'category_id', 'id');
    }
}
