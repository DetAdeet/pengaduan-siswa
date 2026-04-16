<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f4f8fb;
            font-family: 'Roboto', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(4, 79, 160, 0.08);
            padding: 32px 28px 24px 28px;
        }
        .login-title {
            color: #044FA0;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            color: #044FA0;
            font-weight: 500;
            margin-bottom: 6px;
            display: block;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1e3f8;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #044FA0;
        }
        .btn-primary {
            width: 100%;
            background: #044FA0;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-primary:hover {
            background: #033a75;
        }
        .error-message {
            color: #d32f2f;
            margin-bottom: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Login</div>
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
