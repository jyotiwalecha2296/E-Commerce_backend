<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

     protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_price',
        'product_image',
        'quantity',
        'total',
        'status',
    ];

    public function getProduct()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
