<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş | OutBox Academy</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1a252f; /* OutBox tünd fon rəngi */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
        }

        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-header h2 {
            margin: 0;
            color: #2c3e50;
            font-size: 26px;
            font-weight: 700;
        }

        .login-header p {
            color: #7f8c8d;
            margin: 5px 0 0 0;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #4caf50; /* OutBox yaşıl rəngi */
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
            outline: none;
        }

        .flex-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            color: #666;
            cursor: pointer;
        }

        .remember-me input {
            margin-right: 6px;
            cursor: pointer;
        }

        .forgot-password {
            color: #3498db;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-submit {
            background-color: #4caf50; /* Yaşıl düymə */
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .error-box {
            background-color: #fde8e8;
            border-left: 4px solid #e74c3c;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .error-message {
            color: #c0392b;
            font-size: 13px;
            margin-bottom: 4px;
        }
        .error-message:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-header">
        <h2>OutBox Academy</h2>
        <p>İdarəetmə Panelinə Giriş</p>
    </div>

    @if (session('status'))
        <div style="background-color: #e8f5e9; color: #2e7d32; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px;">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="error-box">
            @foreach ($errors->all() as $error)
                <div class="error-message">• {{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label Lothar for="email">Email ünvanı</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        </div>

        <div class="form-group">
            <label for="password">Şifrə</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">
        </div>

        <div class="flex-row">
            <label for="remember_me" class="remember-me">
                <input type="checkbox" id="remember_me" name="remember">
                <span>Məni xatırla</span>
            </label>

            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    Şifrəni unutmusan?
                </a>
            @endif
        </div>

        <button type="submit" class="btn-submit">Daxil Ol</button>
    </form>
</div>

</body>
</html>