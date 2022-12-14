<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Product extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'SKU', 'name', 'quantity','category_id', 'exp_date', 'arriv_date', 'unit_price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderItem()
    {
        return $this->hasOne(OrderItem::class);
    }
}
