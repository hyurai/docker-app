<head>
  <title>Todoアプリケーション</title>
</head>
<div class = "main-contents">
  <table>
    <thead>
      <tr>
        <th>名前</th>
        <th>身長</th>
        <th>体重</th>
        <th>削除</th>
      </tr>
    </thead>
    @foreach($infomations as $infomation)
    <tbody>
      <tr>
        <td><a href="/infomation/{{optional($infomation)->id}}/edit">{{optional($infomation)->name}}</a></td>
        <td>{{optional($infomation)->height}}</td>
        <td>{{optional($infomation)->weight}}</td>
        <td>
          <form action="/infomation/{{optional($infomation)->id}}" method = "post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type = "submit">削除</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <a href="/infomation/create">新規登録</a>
</div>
