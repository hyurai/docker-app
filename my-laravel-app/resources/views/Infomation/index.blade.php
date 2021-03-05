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
        <td><a href="/infomation/{{$infomation->id}}/edit">{{$infomation->name}}</a></td>
        <td>{{$infomation->height}}</td>
        <td>{{$infomation->weight}}</td>
        <td>
          <form action="/infomation/{{$infomation->id}}" method = "post">
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
@component('components.warning')
    @slot('warning_title')
      今日のお知らせ
    @endslot

    @slot('warning_details')
      近日bookテーブルの情報が追加します
    @endslot
  @endcomponent
  @include('components.subviewwarning',['subviewwarning_title' => 'これはサブビューのタイトル',
  'subviewwarning_details' => 'これはサブビューの詳細'])    