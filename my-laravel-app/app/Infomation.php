<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Infomation extends Model{
    
    public function tweets(){
        return $this->hasmany(Tweet::class);
    }

    public function scopeTallHuman($query,$standardValue){
        return $query->where('height','>=',$standardValue);
        
    }

    protected static function boot(){
        Infomation::boot();
        static::addGlobalScope('height',function(Builder $builder){
            $builder->where('height','>',100);
        });
    }

}