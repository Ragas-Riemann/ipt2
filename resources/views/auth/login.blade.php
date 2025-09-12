<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite('resources/sass/login.scss')
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        @if ($errors->any())
            <p class="error-message">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
