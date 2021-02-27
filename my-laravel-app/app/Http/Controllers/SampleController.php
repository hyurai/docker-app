<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SampleController extends Controller{
    public function showSample(Request $request){
        $name = $request->name;
        //request関数にクエリ文字列の引数をしてzするとコントローラー内で使うことが出来る
        $age = $request->age;
        echo 'ルートパラメーターで'.$name.'と'.$age.'を取得できました';
        return view('reqsample',compact('name','age'));        
    }
    //
}
