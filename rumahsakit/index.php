<?php

session_start();

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $koneksi->query('select * from user');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="formedit.php?id=<?= $data['id']; ?>">
            <?= $data['username'] ?>
        </a>
        
        <a href="hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>

    </p>
<?php endwhile ?>