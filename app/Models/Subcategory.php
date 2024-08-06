<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $primaryKey  = 'subcat_id';
    protected $fillable = [
        'subcat_name',
        'subcat_slug',
        'sub_cat',
        'subcat_status',
    ];

    public function cat(){
        return $this->hasOne(Categories::class,'cat_id','sub_cat');
    }
}
