<?php
//課題番号35
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;

class InfomationController extends Controller{
    //課題番号38
    public function index(){
        //課題番号42
        $infomations = infomation::all();
        //課題番号39
        return view('infomation/index',compact('infomations'));
    }
    public function edit($id){
        $infomation = Infomation::findOrFail($id);

        return view('infomation/edit',compact('infomation'));
    }
    //課題番号39
    public function update(Request $request,$id){
        //課題番号42
        $infomation = Infomation::findOrFail($id);
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $infomation->save();

        return redirect('/infomation');
    }
    public function destroy($id){
        //課題番号42
        $infomation = Infomation::findOrFail($id);
        $infomation->delete();

        return redirect('/infomation');
    }
    public function create(){
        $infomation = new Infomation();
        return view('infomation/create',compact('infomation'));
    }
    public function store(Request $request){
        //課題番号42
        $infomation = new Infomation();
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $infomation->save();

        return redirect("/infomation");
    }
  
}