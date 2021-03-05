<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model{
    public function infomation(){
        return $this->belongsTo('App\Infomation');
    }
}

