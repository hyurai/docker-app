<div class = "title">
  <h1>個人のデータ</h1>
</div>
<div class = "create_contents">
  <form action= "/infomation" method = "post">
  @csrf
  <input type="hidden" name="_method" value="POST">
    <div class = "height_create">
      <label for="height">身長</label>
      <input type="text" name = "height" >
      @error('name')
        <p>ERROR</p>
        <p>{{$message}}</p>
      @enderror
    </div>
    <div class = "weight_create">
      <label for="weight">体重</label>
      <input type="text" name = "weight">
      @error('height')
        <p>ERROR</p>
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
      <label for="name_create">名前</label>
      <input type="text" name = "name">
      @error('weight')
        <p>ERROR</p>
        <p>{{$message}}</p>
      @enderror
    </div>
    <button type = "submit">登録</button>
    <a href="/infomation">戻る</a>
  </form>
</div>  
