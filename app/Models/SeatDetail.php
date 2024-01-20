<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatDetail extends Model
{
    use HasFactory;
    protected $table='seat_detail';
    protected $guarded=[];

    public function tour(){
        return $this->belongsTo(Tour::class, 'tour_id')->withTrashed();
    }
    
}
