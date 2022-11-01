<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'SKU', 'name', 'quantity','category_id', 'exp_date', 'arriv_date', 'unit_price'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function orderItem()
    {
        return $this->hasOne(OrderItem::class);
    }
}
