<html lang="ja">
<body>
<h1>■アイテム一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>種別</th>
        <th>効果値</th>
        <th>説明</th>
    </tr>

    @foreach($accounts as $account)
        <tr>
            <td>{{$account['id']}}</td>
            <td>{{$account['name']}}</td>
            <td>{{$account['type']}}</td>
            <td>{{$account['effect']}}</td>
            <td>{{$account['explain']}}</td>
        </tr>
    @endforeach
</table>
<form method="get" action="{{url('accounts/home')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
</body>
</html>
