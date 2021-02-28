<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller{
    
    public function delete($id){
        $tweet = Tweet::findOrFail($id);
        $tweet->delete();
    }//
}
