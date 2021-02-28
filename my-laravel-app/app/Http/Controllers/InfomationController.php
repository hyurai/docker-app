<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;
use Illuminate\Support\Facades\DB;

class InfomationController extends Controller{
    public function index(){
        //DBクラスを使用
        $infomations =  DB::select('select * from infomations');
        return view('infomation/index',compact('infomations'));
    }
    public function edit($id){
        $infomation = Infomation::findOrFail($id);

        return view('infomation/edit',compact('infomation'));
    }
    public function update(Request $request,$id){
        $infomation = Infomation::findOrFail($id);
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $infomation->save();

        return redirect('/infomation');
    }
    public function destroy(infomation $infomation,Request $request){

        $infomation->id = $request->id;
        $infomation->delete();
        return redirect('/infomation');
    }
    public function create(Infomation $infomation){
        return view('infomation/create',compact('infomation'));
    }
    public function store(Request $request){
        DB::transaction(function() use ($request){
          $infomation = new Infomation();
          $infomation->name = $request->name;
          $infomation->height = $request->height;
          $infomation->weight = $request->weight;
          $infomation->save();
          return redirect("/infomation");   
          
        });
       

    }

} 