<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'orders';

    public function order_detail()
    {
        return $this->hasMany(OrderDetails::class, 'id_order');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
