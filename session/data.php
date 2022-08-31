<?php

include "koneksi.php";
$data = new data();
$database = $data->getkoneksi(); 
$query = $database->query("SELECT * FROM siswa");


while($data = $query->fetch())  :?>



<?php endwhile ?>