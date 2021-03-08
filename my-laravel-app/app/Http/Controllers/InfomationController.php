<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;




class InfomationController extends Controller{
    public function index(){
        $infomations =  DB::select('select * from infomations');
        return view('infomation/index',compact('infomations'));
    }
    public function edit(Request $request){
        $id = $request->id;
        $infomation = DB::table('infomations')->where('id',$id)->first();

        return view('infomation/edit',['infomation' => $infomation]);
    }
    public function update(Request $request,$id){
        $infomation = Infomation::findOrFail($id);
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $infomation->save();
        return redirect("infomation/index");
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
    public function store(Request $request){
        $infomation = new Infomation();
        $infomation->name = $request->name;
        $infomation->height = $request->height;
        $infomation->weight = $request->weight;
        $infomation->save();

        return redirect("infomation/index");
    }

} 