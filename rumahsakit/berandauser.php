<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align:center;">Ini Beranda Siswa</h1>
    <br>
    
    <table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped">
    <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>

</body>
</html>

<?php

session_start();


if(!isset($_SESSION["nama"])){
    header("Location:login.php");
}
echo "<a href='siswa.php'>Kembali</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $koneksi->query('select * from user');

 while ($data = $query->fetch() ) :?>
<tr  style="text-align:center;" >
    
    <td><?= $data['nis']?></td>
    <td><?= $data['nama']?></td>
    <td><?= $data['kelas']?></td>

            
    </tr>

    <?php endwhile ?>