<html lang="ja">
<body>
<h1>■所有アイテム一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>プレイヤー名</th>
        <th>アイテム名</th>
        <th>所持個数</th>
    </tr>

    @foreach($accounts as $account)
        <tr>
            <td>{{$account['id']}}</td>
            <td>{{$account['player_name']}}</td>
            <td>{{$account['item_name']}}</td>
            <td>{{$account['item_num']}}</td>
        </tr>
    @endforeach
</table>
<form method="get" action="{{url('accounts/home')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
</body>
</html>
