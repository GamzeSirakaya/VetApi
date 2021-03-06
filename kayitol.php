<?php


include ('ayar.php');

$kullaniciad=$_GET["kadi"];
$kullanicimail=$_GET["mailAdres"];
$kullaniciparola=$_GET["parola"];
$dogrulamakodu=rand(0,10000).rand(0,10000);
$durum=0;

$kontrol=mysqli_query($baglan,"select*from veteriner_kullanicilar where mailAdres='$kullanicimail' or kadi='$kullaniciad'");
$count=mysqli_num_rows($kontrol);

class User {
    public $text;
    public $tf;
    
    
}
$user =new User();


if($count>0){
    $user->text ="girmis oldugunuz bilgilere ait kullanici bulunmaktadir.Lutfen Bilgileri degistirin";
    $user->tf=false;
    echo(json_encode($user));
    
}else{
    
    $adduser=mysqli_query($baglan,"INSERT INTO veteriner_kullanicilar(kadi,mailAdres,parola,dogrulamakodu,durum) VALUES ('$kullaniciad','$kullanicimail','$kullaniciparola','$dogrulamakodu','$durum')");
    
    $git="http://www.gamzesirakaya.com/veterinerservis/aktifet.php?mailAdres=".$kullanicimail."&dogrulamakodu=".$dogrulamakodu."";
    $to="gamze@gamzesirakaya.com";
    $subject="Kullanici hesabi aktifleştirme"; 
    $text="Merhaba Sayin".$kullaniciad."\n Sisteme giriş yapabilmeniz için onayınız gereklidir.<a href='".$git."'>Onayla</a>";
    $from="From:info@kocveteriner.com ";
   $from .="MIME-Version:1.0\r\n";
    $from.="Content-Type:text/html; charset=UTF-8\r\n";
    mail($to,$subject,$text,$from);

}









?>