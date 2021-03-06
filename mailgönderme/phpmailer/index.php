<?php
require("class.phpmailer.php");
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
$mail->Password = "Gamze1234."; // Mail adresimizin sifresi
$mail->SetFrom("gamze@gamzesirakaya.com", "Gamze sırakaya"); // Mail atıldığında gorulecek isim ve email
$mail->AddAddress("sirakayagamze3@gmail.com"); // Mailin gönderileceği alıcı adres
$mail->Subject = "merhaba"; // Email konu başlığı
$mail->Body = "Mesaj icerigi ve metni"; // Mailin içeriği
if(!$mail->Send()){
  echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
  echo "Email Gonderildi";
}
?>