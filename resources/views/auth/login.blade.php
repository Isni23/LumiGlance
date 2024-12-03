<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LumiGlance</title>
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        /* General styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, rgba(0, 150, 240, 0.3), rgba(0, 200, 255, 0.6)), url('/images/background.jpg');
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Added for vertical alignment */
        }
        .glass {
            background: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            color: #111212;
            width: 350px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .input-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: rgba(0, 150, 240, 0.7);
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s ease;
            width: 100%;
        }
        .btn:hover {
            background: rgba(0, 150, 240, 1);
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="glass">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Masuk</button>
        </form>
        <div class="footer">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>