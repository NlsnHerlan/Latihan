<?php
// buat class laptop
class laptop {
  
   private $pemilik = "Nelsen";
   private $merk = "Asus";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
  
echo "<br />";
echo $laptop_andi->hidupkan_laptop();
echo "<br />";
  
// hapus objek $laptop_nelsen
unset($laptop_nelsen);
  
echo "<br />";
echo "Objek Telah Dihancurkan";
?>