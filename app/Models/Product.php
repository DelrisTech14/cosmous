<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mrp', 'price', 'special_price', 'availability', 'sku',
        'description', 'stock', 'image', 'other_images', 'status'
    ];

    protected $casts = [
        'other_images' => 'array', 
    ];
}