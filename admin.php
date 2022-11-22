<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Halaman Admin</h2>

    <br/>

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:/index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username'];?>! Anda telah login.</h4>
    <br/>
    <br/>

    <a href="logout.php?">LOGOUT</a>
    
</body>
</html>