

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="password">Jelszó:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror


        <button type="submit">Bejelentkezés</button>
    </form>

    <p>Nincs még felhasználója? <a href="{{ route('register') }}">Regisztrálj itt</a></p>
</body>
</html>
