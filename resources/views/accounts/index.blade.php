<html lang="ja">
<body>
<h1>■{{$title}}</h1>
<table>
    <tr>
        <th>名前</th>
        <th>パスワードハッシュ</th>
    </tr>

    @foreach($accounts as $account)
        <tr>
            <td>{{$account['name']}}</td>
            <td>{{$account['password']}}</td>
        </tr>
    @endforeach
</table>

<form method="get" action="{{url('accounts/home')}}">
    @csrf
    <input type="submit" value="戻る">
</form>
</body>
</html>
