<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Infomation extends Model{
    public function tweets(){
        return $this->hasmany(Tweet::class);
    }

    public function scopeTallHuman($query,$standardValue){
        return $query->where('height','>',$standardValue);
        
    }
}
