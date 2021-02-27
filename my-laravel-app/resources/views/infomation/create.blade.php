@extends('infomation/layout')
@section('title')
<div class = "create_contents">
  <form action= "/infomation" method = "post">
  @csrf
  <input type="hidden" name="_method" value="POST">
    <div class = "height_create">
      <label for="height">身長</label>
      <input type="text" name = "height" >
    </div>
    <div class = "weight_create">
      <label for="weight">体重</label>
      <input type="text" name = "weight">
    </div>
    <div>
      <label for="name_create">名前</label>
      <input type="text" name = "name">
    </div>
    <button type = "submit">登録</button>
    <a href="/infomation">戻る</a>
  </form>
</div>
@section('title')