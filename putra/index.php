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

<h1 style="text-align:center">Data Yang Terimput</h1>
    <table class="table table-dark   border-primary">
<tr>
        
        <th>ID</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>EDIT</th>
        <th>HAPUS</th>
        <th>BUAT</th>
    </tr>
<body>
</html>



<?php
 $db = new PDO("mysql:host=localhost;dbname=pdo",'root','');
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
 <tr>
    <td><?= $data['id']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['kelas']?></td>
    <td><a href="formedit.php?id=<?=$data['id']; ?>" class="btn btn-primary">Update</a></td>
    <td><a href="hapus.php?id=<?=$data['id']; ?>" class="btn btn-danger">Hapus</a></td>
    <td><a href="tambahedit .php?id=<?=$data['id']; ?>" class="btn btn-light">Buat</a></td>

 </tr>
    <?php endwhile ?>
 </table>
