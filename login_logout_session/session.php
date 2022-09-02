<?PHP

        session_start();
        
        if(isset($_POST['username'])){
                $_SESSION['username']= $_POST['username'];
                $_SESSION['password']=$_POST['password'];

        }
        $username = $_SESSION["username"];

        echo "<h1>$username</h1>";
        echo "<br>";
        echo $_SESSION["password"];
        echo "<br>";
        echo "<a href='hapus.php'>Hapus Session</a>";
        echo "<br>";
        echo "<a href='beranda.php'>Ke Beranda</a>";

?>