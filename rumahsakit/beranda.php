

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;">Ini Beranda</h1>
    <br>
    <p>Tampil</p>
    

</body>
</html>

<?php

session_start();

if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
echo "<a href='tambahedit.php'>Tambah Data</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";
?>