<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function protype()
    {
        return $this->hasOne(Protype::class, 'id', 'type_id')
            ->withDefault(['name' => '']);
    }
    public function manufacture()
    {
        return $this->hasOne(Manufacture::class, 'id', 'manu_id')
            ->withDefault(['name' => '']);
    }
    public function cart_detail()
    {
        return $this->belongsTo(Cart_detail::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    protected $fillable = [
        'name', 'manu_id', 'type_id', 'price', 'image', 'description', 'feature', 'sale'
    ];
}
