<form action="{{ route('user.login') }}" method="POST">
    @csrf
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">ログイン</button>
</form>


<link rel="stylesheet" href="{{ asset('css/user_login.css') }}">
<script src="{{ asset('js/user_login.js') }}"></script>