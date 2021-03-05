<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model{
    
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('height',function(Builder $builder){
            $builder->where('height','>',165);
        });
    }
    //
}

