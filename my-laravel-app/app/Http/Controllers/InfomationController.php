<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;
use Validator;
class InfomationController extends Controller{
    public function index(){
        $infomations = infomation::all();
        return view('infomation/index',compact('infomations'),['msg' => '']);
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
    public function destroy($id){
        $infomation = Infomation::findOrFail($id);
        $infomation->delete();

        return redirect('/infomation');
    }
    public function create(){
        $infomation = new Infomation();
        return view('infomation/create',compact('infomation'));
    }
    public function store(Request $request ,Infomation $infomation){
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);

        if($validator->fails()){
            return redirect('/infomation/create')
           ->withErrors($validator)
           ->withInput();
       }

       $infomation->save();
       return redirect('/infomation');
    }

}   