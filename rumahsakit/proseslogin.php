<?php
    include("koneksi.php");


    $nama = $_REQUEST["nama"];
    $password = $_REQUEST["password"];



    $query = $koneksi->query("select * from user where nama='$nama' AND password='$password'")->fetchAll();
    

    if (count($query) > 0){
        $_SESSION["nama"] = $nama;
        $_SESSION["kelas"] = $query[0]["kelas"];
        if ($_SESSION['kelas'] == "rpl"){
            header("Location:user.php");
        }
        else if($_SESSION['kelas'] == "pplg" ) {
            header("Location:siswa.php");
        }  
    }
    else{

        header("Location:login.php");
    }
?>