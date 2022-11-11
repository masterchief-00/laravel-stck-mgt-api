<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class DeliverJob extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'deadline', 'assigned_driver', 'order_id'
    ];

    public function driver()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
