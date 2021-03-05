<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model{
    
    public function scopeTallHuman($query,$standardValue){
        return $query->where('height','>=',$standardValue);

    }
}

