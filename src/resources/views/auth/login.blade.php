<h2>ログイン</h2>

<form class="login_form" action="/login" method="post">

    @csrf

    メールアドレス
    <input type="email" name="email" value="{{ old('email') }}" />

    @error('email')
    <p style="color:red;">{{ $message }}</p>
    @enderror

    パスワード
    <input type="password" name="password" />

    @error('password')
    <p style="color:red;">{{ $message }}</p>
    @enderror

    <button class="button" type="submit">ログインする</button>

</form>

<a href="/register">会員登録はこちら</a>