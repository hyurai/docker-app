@extends('infomation/layout')
@if(count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors -> all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
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
      <label for="name">名前</label>
      <input type="text" name = "name"  @!empty value = "{{$infomation->name}}">
    </div>
    <div class = "heightTextFiled">
      <label for="height">身長</label>
      <input type="text" name = "height" @!empty value = "{{$infomation->height}}">
    </div>
    <div class = "weightTextFiled">
      <label for="weight">体重</label>
      <input type="text" name = "weight" @!empty value = "{{$infomation->weight}}">
    </div>
    <button type = "submit">送信</button>
    <a href="/infomation">戻る</a>
    </form>
</div>