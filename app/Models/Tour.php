<?php

namespace App\Models;

use App\Events\TourCreate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='tour';
    protected $guarded=[];

    protected $tourAddSeat = [
        'created' => TourCreate::class,
    ];

    public function scheduleCatPro(){
        return $this->belongsTo(ScheduleCatPro::class, 'schedule_cat_pro_id')->withTrashed();
    }

    public function type(){
        return $this->belongsTo(Type::class, 'type_id')->withTrashed();
    }

    public function seatDetails(){
        return $this->hasMany(SeatDetail::class, 'tour_id')->withTrashed();
    }

    public function order(){
        return $this->hasMany(Order::class, 'tourpayment_id');
    }
}
