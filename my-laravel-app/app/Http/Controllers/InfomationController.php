<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfomationRequest;
use App\Infomation;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Validator;

class InfomationController extends Controller{
    public function index(){
        //DBクラスを使用
        $infomations =  DB::select('select * from infomations');
        return view('infomation/index',compact('infomations'),['message'=>'Hello!']);
    }
    public function edit(Request $request){
        //クエリビルダ
        dd($request);
        $id = $request->id;
        
        $infomation = Infomation::where('id',$id)->first();
    
        return view('infomation/edit',compact('infomation' ,'id'));
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
        DB::transaction(function () use ($infomation){
            $infomation->delete();
        });
        return redirect('/infomation');
    }
    public function create(Infomation $infomation){
        return view('infomation/create',compact('infomation'));
    }
    public function store(Request $request,Infomation $infomation){
        $form = $request->all();
        unset($form['_token']);
        $infomation->fill($form)->save();
        return redirect('infomation/index',['msg' => '正しく入力されました']);
    }

    public function confirm(\App\Http\Requests\InfomationRequest $request) {
        $data = $request->all();
         return view('create.confirm')->with($data);
      }
} 