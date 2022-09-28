<?php
// buat class sppsekolah
class sppsekolah {
   public $hari;
   public $nama;
   public $bayaran;
   public $tanggal;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($hari, $nama, $bayaran, $tanggal) {
     $this->hari = $hari;
     $this->nama = $nama;
     $this->bayaran = $bayaran;
     $this->tanggal = $tanggal;
   }
   public function tampil_spp() {
     return "<h1>SPP SEKOLAH $this->nama</h1><b>Hari:  $this->hari <br>Nama: $this->nama <br> bayaran: $this->bayaran <br> tanggal: $this->tanggal <br><b>";
   }
   
}
  
// buat objek dari class laptop (instansiasi)
$spp_nelsen= new sppsekolah("Senin","Nelsen", "300000","09-28-2022");
  
echo $spp_nelsen->tampil_spp();
echo "<br />";
  
$spp_nelsen= new sppsekolah("Selasa","Nawa", "600000","10-28-2022");
  
echo $spp_nelsen->tampil_spp();
?>