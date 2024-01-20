<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleCatPro extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='schedule_cat_pro';

    protected $guarded=[];
    
    public function tour() {
        return $this->hasMany(Tour::class, 'schedule_cat_pro_id')->withTrashed();
    }

    public function type()
    {
        return $this->belongsTo(Type::class)->withTrashed();
    }
}
