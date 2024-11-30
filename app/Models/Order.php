<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(direcciones::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(metodoPago::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
