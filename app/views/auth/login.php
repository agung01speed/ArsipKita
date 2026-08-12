<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arsipkita</title>
    <link rel="stylesheet" href="/arsipkita/public/css/style.css">  
</head>
<body>
    <main>
        <section class="container">
            <h1>Login</h1>
            <form action="/arsipkita/login" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password">
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="/arsipkita/register">Daftar</a></p>
        </section>
    </main>
</body>
</html>