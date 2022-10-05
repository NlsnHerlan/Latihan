<?php

session_start();

if(!isset($_SESSION["nama"])){
    header("Location:login.php");
}
echo "<a  href='beranda.php'>Kembali</a>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INPUT DATA</h1>
   
    <form action="tambah.php" method="post" >
        <div>
            <label>Nis</label>
            <input type="text" id="nis" name="nis" required >
        </div>
        <br>
        <div>
            <label>Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="text" id="password" name="password" required>
        </div>
        <br>
        <div>
            <label>Kelas</label>
            <input type="text" id="kelas" name="kelas" required>
           
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>

