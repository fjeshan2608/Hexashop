<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $primaryKey  = 'cat_id';
    protected $fillable = [
        'cat_name',
        'cat_slug',
        'cat_title',
        'cat_description',
        'cat_image1',
        'cat_status',
    ];
}
