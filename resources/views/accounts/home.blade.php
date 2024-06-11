<html lang="ja">
<body>
<h1>Welcome :v)</h1>
<form method="get" action="{{url('accounts/index')}}">
    @csrf
    <input type="submit" value="管理者一覧">
</form>
<form method="get" action="{{url('accounts/playerList')}}">
    @csrf
    <input type="submit" value="プレイヤー一覧">
</form>
<form method="get" action="{{url('accounts/itemList')}}">
    @csrf
    <input type="submit" value="アイテム一覧">
</form>
<form method="get" action="{{url('accounts/playerItemList')}}">
    @csrf
    <input type="submit" value="所持アイテム一覧">
</form>
<form method="post" action="{{url('accounts/dologout')}}">
    @csrf
    <input type="submit" value="ログアウト">
</form>
</body>
</html>
