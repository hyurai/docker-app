<div class = "title">
  <h1>個人のデータ</h1>
</div>
<div class = "edit_contents">
  <form action = "/infomation/{{$infomation->id}}" method = "POST">
  @csrf 
    <input type="hidden" name="_method" value="PUT">
    <div class = "height_edit">
      <label for="height">身長</label>
      <input type="text" name = "height" value = "{{$infomation->height}}">
    </div>
    <div class = "weight_edit">
      <label for="price">体重</label>
      <input type="text" name = "weight" value = "{{$infomation->weight}}">
    </div>
    <div>
      <label for="name_edit">名前</label>
      <input type="text" name = "name" value = "{{$infomation->name}}">
    </div>
    <button type = "submit">変更</button>
    <a href="/infomation">戻る</a>
  </form>
</div> 