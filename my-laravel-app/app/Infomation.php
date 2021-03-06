<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Infomation extends Model{
    
    public function scopeTallHuman($query,$standardValue){
        return $query->where('height','>',$standardValue);

    }
}

