<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'category_id',
        'SKU',
        'product_quantity',
        'product_description',
        'price',
        'status',
        'images'
    ];


    protected $casts = [
        'images' => 'array',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Product::class);
    }
}
