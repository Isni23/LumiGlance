<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LumiGlance</title>
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Gaya umum */
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
            flex-direction: column; /* Menambahkan ini agar konten diatur secara vertikal */
        }
        .glass {
            background-image: url('/images/background'.jpg) ;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            color: #111212;
            width: 350px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 20px;
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
            margin: 5px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: rgba(0, 150, 240, 1);
        }
        .glass{
            background: rgba(255, 255, 255, 0.5); /* Latar belakang semi-transparan */
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 20px; 
        }
        .container {
            display: flex;
            gap: 20px; 
        }
        .box {
            width: 150px; /* Lebar kotak yang lebih kecil */
            height: 60px; /* Tinggi kotak yang lebih kecil */
            background: linear-gradient(135deg, rgba(0, 150, 240, 1), rgba(0, 200, 255, 1)); /* Gradasi biru */
            border-radius: 30px; /* Sudut membulat untuk bentuk lonjong */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #111212; /* Warna teks awal */
            font-size: 1rem; /* Ukuran font yang lebih kecil */
            transition: background 0.5s ease, color 0.5s ease; /* Transisi untuk perubahan warna */
            cursor: pointer;
        }
        .box:hover{
            background: linear-gradient(135deg, rgba(0, 0, 0, 1), rgba(50, 50, 50, 1)); /* Gradasi hitam saat hover */
            color: rgba(0, 150, 240, 1); 
        }
    </style>
</head>
<body>
    <!-- Menampilkan gambar -->

    <div class="glass">

        <h1>Welcome</h1>
        <p>Sistem ini menggunakan <b>sensor PIR</b> dan <b>tombol otomatis</b> untuk pengalaman interaktif.</p>
        <div class="container">
            <a href="{{ route('login') }}" class="box" id="loginBox">Login</a>
            <a href="{{ route('register') }}" class="box" id="registerBox">Register</a>
        </div>
        


    </div>
    
</body>
</html>