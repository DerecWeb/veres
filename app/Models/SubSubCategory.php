<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'subsubcategory_name_ua',
        'subsubcategory_name_ru',
        'subsubcategory_slug_ua',
        'subsubcategory_slug_ru',
    ];

    public function category(){
        return$this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function subcategory(){
        return$this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }
}
