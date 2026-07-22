<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'brand_id',
        'color',
        'material',
        'image',
        'size',
        'sku',
    ];
}
