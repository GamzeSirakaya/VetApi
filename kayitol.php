<?php


include ('ayar.php');
require("class.phpmailer.php");

$kullaniciad=$_POST["kadi"];
$kullanicimail=$_POST["mailAdres"];
$kullaniciparola=$_POST["parola"];
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
    $user->text ="Girmis oldugunuz bilgilere ait kullanici bulunmaktadir.Lutfen Bilgileri degistirin";
    $user->tf=false;
    echo(json_encode($user));
    
}else{
    
    $adduser=mysqli_query($baglan,"INSERT INTO veteriner_kullanicilar(kadi,mailAdres,parola,dogrulamakodu,durum) VALUES ('$kullaniciad','$kullanicimail','$kullaniciparola','$dogrulamakodu','$durum')");
    
    
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'tls'; // Normal bağlantı için boş bırakın veya tls yazın, güvenli bağlantı kullanmak için ssl yazın
$mail->Host = "furina.alastyr.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
//$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "gamze@gamzesirakaya.com"; // Gönderici adresiniz (e-posta adresiniz)
$mail->Password = "*****"; // Mail adresimizin sifresi
$mail->SetFrom("gamze@gamzesirakaya.com", "Dost Veteriner Kliniği"); // Mail atıldığında gorulecek isim ve email
$mail->AddAddress($kullanicimail); 
$mail->Subject="Kullanıcı Hesabı Aktifleştirme";
 $git="http://www.gamzesirakaya.com/veterinerservis/aktifet.php?mailAdres=".$kullanicimail."&dogrulamakodu=".$dogrulamakodu."";

$mail->Body = "Merhaba Sayin\n".$kullaniciad."\n Sisteme giriş yapabilmeniz için onayınız gereklidir.<a href='".$git."'>\nOnayla</a>"; // Mailin içeriği
    $user->text ="Hesabiniz kaydedildi,ancak mail adresinizi doğrulamanız gerekiyor.";
    $user->tf=true;
    echo(json_encode($user));
    $mail->Send();

   
   

}









?>