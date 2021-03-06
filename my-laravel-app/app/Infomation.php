<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Infomation extends Model{
    
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('height',function(Builder $builder){
            $builder->where('height','<',165);
        });
    }
    //
}

