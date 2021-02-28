<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model{

    

    public function tweets(){
        return $this->hasmany(Tweet::class);
    }
}
