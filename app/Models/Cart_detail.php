<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id')
            ->withDefault([
                'name' => '',
                'price' => '0'
            ]);
    }
    public function cart()
    {
        return $this->hasOne(Cart::class, 'id', 'cart_id');
    }
    protected $fillable = [
        'product_id', 'qty', 'cart_id'
    ];
}
