<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $table = 'product_categories';
    
    use HasFactory;

    protected $fillable =[
        'name',
        'slug',
        'parent_category',
        'images',
        'description',
        'display_on',
        'status'
    ];
    public function parent(){
        return $this->hasOne(ProductCategories::class,'id','parent_category');
    }
}
