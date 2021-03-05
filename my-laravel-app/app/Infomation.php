<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model{
    protected $primaryKey = "id";

    public function tweets(){
        return $this->hasmany('App\Tweet');
    }
}
