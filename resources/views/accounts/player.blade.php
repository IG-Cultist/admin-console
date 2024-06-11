<html lang="ja">
<body>
<h1>■プレイヤー一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>レベル</th>
        <th>経験値</th>
        <th>ライフ</th>
    </tr>

    @foreach($accounts as $account)
        <tr>
            <td>{{$account['id']}}</td>
            <td>{{$account['name']}}</td>
            <td>{{$account['level']}}</td>
            <td>{{$account['exp']}}</td>
            <td>{{$account['life']}}</td>
        </tr>
    @endforeach
</table>
<form method="get" action="{{url('accounts/home')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
</body>
</html>
