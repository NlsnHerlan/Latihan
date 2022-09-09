

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
    <h1 style="text-align:center;">Ini Beranda</h1>
    <br>
    <p>Tampil</p>
    <table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped">
    <tr>
        
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
    </tr>

    

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

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $koneksi->query('select * from user');

 while ($data = $query->fetch() ) :?>

    
    
    <tr  style="text-align:center;" >
    
    <td><?= $data['username']?></td>
    <td><?= $data['password']?></td>
    <td><?= $data['role']?></td>

            
        </a>
        <br>
</table>
        
    
    <a href="formedit.php?id=<?=$data['id']; ?>" class="table table-success table-striped">Update Siswa</a>

        <a href="hapus.php?id=<?=$data['id']; ?>" class="table-danger">Hapus Siswa</a>
    
    
</table>

<?php endwhile ?>