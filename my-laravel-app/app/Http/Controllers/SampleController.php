<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller{
    
    public function showName($name, $age = ''){
        return view('paramsample', compact('name', 'age'));
    }
}
