<?php


include ('ayar.php');
require("class.phpmailer.php");

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
    
    //$git="http://www.gamzesirakaya.com/veterinerservis/aktifet.php?mailAdres=".$kullanicimail."&dogrulamakodu=".$dogrulamakodu."";
    $kullanicimail = new PHPMailer();
$kullanicimail->IsSMTP();
$kullanicimail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$kullanicimail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$kullanicimail->SMTPSecure = 'tls'; // Normal bağlantı için boş bırakın veya tls yazın, güvenli bağlantı kullanmak için ssl yazın
$kullanicimail->Host = "furina.alastyr.com"; // Mail sunucusunun adresi (IP de olabilir)
$kullanicimail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$kullanicimail->IsHTML(true);
//$kullanicimail->SetLanguage("tr", "phpmailer/language");
$kullanicimail->CharSet  ="utf-8";
    //$git="http://www.gamzesirakaya.com/veterinerservis/aktifet.php?mailAdres=".$kullanicimail."&dogrulamakodu=".$dogrulamakodu."";
    $kullanicimail->Username = "gamze@gamzesirakaya.com"; // Gönderici adresiniz (e-posta adresiniz)
$kullanicimail->Password = "*****"; // Mail adresimizin sifresi
$kullanicimail->SetFrom("gamze@gamzesirakaya.com", "Gamze sırakaya"); // Mail atıldığında gorulecek isim ve email
$kullanicimail->AddAddress("sirakayagamze3@gmail.com"); // Mailin gönderileceği alıcı adres
$kullanicimail->Subject = "merhaba"; // Email konu başlığı
$kullanicimail->Body = "Merhaba Sayin".$kullaniciad."\n Sisteme giriş yapabilmeniz için onayınız gereklidir"; // Mailin içeriği
if(!$kullanicimail->Send()){
  echo "Email Gönderim Hatasi: ".$kullanicimail->ErrorInfo;
} else {
  echo "Email Gonderildi";
}
   
   

}









?>