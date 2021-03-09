<?php
include('ayar.php');

$kullanicimail=$_GET["mailAdres"];
$kod=$_GET["dogrulamakodu"];
$güncelle=mysqli_query($baglan,"update veteriner_kullanicilar set durum = '1' where mailAdres='$kullanicimail'and dogrulamakodu='$kod'");
if($güncelle){
    ?>
    <big>
    <h1>Tebrikler hesabınız doğrulandı..</h1>
    </big>
  <?php  
}

?>