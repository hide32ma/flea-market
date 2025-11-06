<form class="register_form" action="/register" method="post">

    @csrf

    <h1 class="page_title">会員登録</h1>


    ユーザー名
    <input type="text" name="name" value="{{ old('name') }}" />

    @error('name')
    <p style="color:red;">{{ $message }}</p>
    @enderror

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

    確認用パスワード
    <input type="password" name="password_confirmation" />



    <button class="button" type="submit">登録する</button>



</form>

<a href="/login">ログインはこちら</a>