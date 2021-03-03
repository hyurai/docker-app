<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Infomation extends Model{
    
    public function tweets(){
        return $this->hasmany(Tweet::class);
    }
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('height',function(Builder $builder){
            $builder->where('height','>',165);
        });
    }

    public function scopeTallHuman($query,$standardValue){
        return $query->where('height','>=',$standardValue);
        
    }
    
}