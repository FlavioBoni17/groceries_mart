<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Groceries Mart</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #e3e3e3;
        }
        .container {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .login-card img {
            width: 100px;
            margin-bottom: 20px;
        }
        .login-card h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-button {
            background: #4361ee;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-button:hover {
            background: rgb(35, 146, 177);
        }
        .forgot-password {
            display: block;
            margin-top: 10px;
            color: #4361ee;
            text-decoration: none;
            font-size: 14px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" class="form-input" placeholder="Email" required autofocus>
                <input type="password" name="password" class="form-input" placeholder="Password" required>
                <button type="submit" class="form-button">Login</button>
            </form>
            <!-- Fitur Lupa Password -->
            <a href="{{ route('password.request') }}" class="forgot-password">Lupa Password?</a>
        </div>
    </div>
</body>
</html>
