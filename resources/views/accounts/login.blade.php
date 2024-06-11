<html lang="ja">
<body>
<h1>ログイン</h1>
<form method="post" action="{{url('accounts/dologin')}}">
    @csrf
    <label for="name">ユーザネーム:</label><input type="text" name="name" id="name"><br>
    <label for="password">パスワード:</label><input type="password" name="password" id="password"><br>
    <label for="button"></label><input type="submit" name="button" id="button">
    @isset($error)
        {{$error}}
    @endisset
</form>
</body>
</html>
