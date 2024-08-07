<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey  = 'product_id';
    protected $fillable = [
        'product_name',
        'product_description',
        'product_slug',
        'product_cat',
        'product_subcat',
        'product_color',
        'product_size',
        'product_stock',
        'product_price',
        'product_image1',
        'product_image2',
        'product_status',
    ];

    public function cat(){
        return $this->hasOne(Categories::class,'cat_id','product_cat');
    }
    public function subcat(){
        return $this->hasOne(Subcategory::class,'subcat_id','product_subcat');
    }
    
}
