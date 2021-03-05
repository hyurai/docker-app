@extends('infomation/layout')
<div class = "form">
  @if($target == 'store')
    <form action = '/infomation' method = "post"> 
    <input type="hidden" name="_method" value="POST">   
  @elseif($target == 'update')
    <form action = '/infomation/{{$infomation->id}}' method = "post">
    <input type="hidden" name="_method" value="PUT">
  @endif
    @csrf
    <div class = "nameTextField">
      @error('name')
        <h2>ERROR</h2>
        <h2>{{$message}}</h2>
      @enderror
      <label for="name">名前</label>
      <input type="text" name = "name"  @!empty value = "{{$infomation->name}}">
    </div>
    <div class = "heightTextFiled">
      @error('height')
        <h2>ERROR</h2>
        <h2>{{$message}}</h2>
      @enderror
      <label for="height">身長</label>
      <input type="text" name = "height" @!empty value = "{{$infomation->height}}">
    </div>
    <div class = "weightTextFiled">
      @error('height')
        <h2>ERROR</h2>
        <h2>{{$message}}</h2>
      @enderror
      <label for="weight">体重</label>
      <input type="text" name = "weight" @!empty value = "{{$infomation->weight}}">
    </div>
    <button type = "submit">送信</button>
    <a href="/infomation">戻る</a>
    </form>
</div>