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
    <style>
        p{
            color:red;
        }
    </style>
    <h1 style="text-align:center;">Ini Beranda User</h1>
    <br>
    <div class="container mt-5" >
    <h3 >Tampil Data</h3>
    <?php if(isset($_GET['error'])) :?>
        <div role="alert">
            <p style="text-align:center;"><?= $_GET['error'] ?></p>
        <?php endif ?> 
        <div class="row">
        <div class="col-md-10 offset-md-1">
        <form class="card-body cardbody-color p-lg-4 " method="get">
  <b class="text-center">D A T A U S E R</b> 
<div class="d-grid gap-2 col-3">
</div>
        
<div class="cointainer-sm">
    
    <table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped" style="text-align:center;" >
    <thead>
    <tr >
        <th>Nis</th>
        <th>Nama</th>
        <th>Password</th>
        <th>Kelas</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    </div>
    </div>
    </div>
    
</body>
</html>

<?php

session_start();


if(!isset($_SESSION["nama"])){
    header("Location:login.php");
}

echo "<a href='tambahedit.php'>Tambah Data</a>" ;
echo "<br>";
echo "<a href='hapus_session.php'>Logout</a>";

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $koneksi->query('select * from user');

 while ($data = $query->fetch() ) :?>

    
    
    <tr  style="text-align:center;" >

    <td><?= $data['nis']?></td>
    <td><?= $data['nama']?></td>
    <td><?= $data['password']?></td>
    <td><?= $data['kelas']?></td>
    <td><a href="formedit.php?id=<?=$data['id']; ?>" class="table table-success table-striped">Update</a></td>
    <td><a href="hapus.php?id=<?=$data['id']; ?>" class="table-danger">Hapus</a></td>

    </tr>
            
        </a>
        
<?php endwhile ?>
</table>