<div>未ログインです</div>

<h2>テスト</h2>

<form class="login_form" action="/" method="post">

    @csrf

    <label>ユーザー名</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <button class="button" type="submit">登録する</button>

    @error('name')
    <p style="color:red;">{{ $message }}</p>
    @enderror


</form>




<ul class="header-nav">
    @if (Auth::check())
    <div>ログイン中です</div>
    <li class="header-nav__item">
        <a class="header-nav__link" href="/mypage">マイページ</a>
    </li>
    <li class="header-nav__item">
        <form action="/logout" method="post">
            @csrf
            <button class="header-nav__button">ログアウト</button>
        </form>
    </li>
    @endif
</ul>