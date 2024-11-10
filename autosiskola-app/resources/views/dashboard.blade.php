

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @auth
        <h1>Szia, {{ Auth::user()->name }}!</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            @method('POST')
            <button type="submit">Kijelentkezés</button>
        </form>
    @else
        <h1>Welcome to the Dashboard!</h1>
        <p>Please <a href="{{ route('login') }}">login</a> to access your account.</p>
        <p>If you don't have an account, you can <a href="{{ route('register') }}">register here</a>.</p>
    @endauth
</body>
</html>
