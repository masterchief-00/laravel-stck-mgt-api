<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class OrderItem extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'quantity',
        'total_price',
        'product_id',
        'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
