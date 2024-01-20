<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='type';

    protected $guarded=[];

    public function tour() {
        return $this->hasMany(Tour::class, 'type_id')->withTrashed();
    }

    public function scheduleCatPro()
    {
        return $this->hasMany(ScheduleCatPro::class)->withTrashed();
    }
}
