<?php 
include("ayar.php");
$kullaniciad=$_POST["kadi"];
$kullanicimail=$_POST["mailAdres"];
$kullaniciparola=$_POST["parola"];


$kontrol=mysqli_query($baglan,"SELECT *FROM veteriner_kullanicilar WHERE mailAdres='$kullanicimail' or kadi='$kullaniciad' and parola='$kullaniciparola'");	
$kontrolcount=mysqli_num_rows($kontrol);
echo ("Toplam:".$kontrolcount);
if($kontrolcount<1){

$ekle=mysqli_query($baglan,"INSERT INTO kullanici (kadi,mailAdres,parola) VALUES ('$kullaniciad', '$kullanicimail','$kullaniciparola')");
if($ekle){
$json=(array('Result'=>'Tebrikler Basariyla kayit oldunuz.'));
echo json_encode($json);

}
else{
	$json=(array('Result'=>'Zaten böyle bir kayit var'));
	echo json_encode($json);
}
}

?>