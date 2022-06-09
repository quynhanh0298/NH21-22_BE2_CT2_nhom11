<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function cart_detail()
    {
        return $this->belongsTo(Cart_detail::class);
    }
    protected $fillable = [
        'user_id', 'billing_name', 'billing_email', 'billing_address', 'billing_phone', 'billing_total'
    ];
}
