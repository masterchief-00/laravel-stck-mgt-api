<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 'names','user_id', 'province', 'district', 'phone', 'email', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderItem()
    {
        return $this->hasMany(orderItem::class);
    }
    public function deliverJob()
    {
        return $this->hasOne(DeliverJob::class);
    }
}
