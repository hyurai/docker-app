<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;
use DB;

class InfomationController extends Controller{
    public function index(){
        $infomations = infomation::all();
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
    public function destroy(infomation $infomation,$id){
        $infoamtion = Infomation::findOrFail($id);
        $infomation->delete();
        return redirect('/infomation');
    }
    public function create(){
        $infomation = new Infomation();
        return view('infomation/create',compact('infomation'));
    }
    public function store(Request $request){
       DB::beginTransaction();
         try{
            $infomation = new Infomation();
            $infomation->name = $request->name;
            $infomation->height = $request->height;
            $infomation->weight = $request->weight;
            $infomation->save();
            dd($infomation);
            return redirect("/infomation");
            DB::commit();
         }catch(\PDOException $e){
            DB::rollBack();
            return redirect('infomation/create');
         }        
    }

} 