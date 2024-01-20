<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $guarded = [];

    public function order_payment_methods(){
        return $this->hasMany(OrderPaymentMethod::class, 'order_id');
    }

    public function tour() {
        return $this->belongsTo(Tour::class, 'tourpayment_id');
    }
}
