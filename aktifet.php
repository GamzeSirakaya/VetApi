<?php
include('ayar.php');
$kod=$_GET["kadi"];
$kullanicimail=$_GET["dogrulamakodu"];
$güncelle=mysqli_query($baglan,"update veteriner_kullanicilar set durum'1' where mailAdres='$kullanicimail'and dogrulamakodu='$kod'");
if($güncelle){
    ?>
    <h1>Tebrikler hesabınız doğrulandı..</h1>
  <?php  
}

?>