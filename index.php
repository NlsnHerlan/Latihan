<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>

<?php 
require 'koneksi.php';
$praktekpdo = new praktekpdo();
$database =$praktekpdo->getkoneksi();
$query =$database->query("SELECT * FROM siswa");

while ($data=$query->fetch()): ?>
    <p> 
        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-info">
     <?= $data['nama'] ?>
     </a>
    
        <a href="delete.php?id=<?= $data['id'];?>" class="btn btn-danger"> 
        Hapus
     </a>
    </p>
<?php endwhile ?>