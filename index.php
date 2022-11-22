<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat login</title>
</head>
<body>
    <h2>Latihan Login XII RPL SMKN 1 Sayung</h2>
    <br/>

    <!--cek pesan notifikasi-->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum login"){
            echo "Anda harus login untuk mengaskses halaman admin";
        }
    }
    ?>
    <br/>
    <!-- source code form -->
    <br/>
    <form method = "POST" action="cek_login.php"> 
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password  : </td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td></td>
            <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form> 
</body>
</html>