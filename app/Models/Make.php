<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
//    public function model() {
//        return $this->hasManyThrough(Models::class,Vehicle::class,'model_id','id');
//    }

//    public function detail() {
//        return $this->belongsToMany(Detail::class,Vehicle::class,'detail_id','id','id');
//    }

    public function vehicle() {
        return $this->hasOne(Vehicle::class,'make_id','id');
    }

}
