<?php
include("ayar.php");
$mus_id="30";
$soru = "asi fiyati öğrenebilirmiyim ?";
$ekle =mysqli_query($baglan,"insert into veteriner_sorular(mus_id,soru,durum) values ('$mus_id','$soru','0')");

class ekleme {
    public $text;
    public $tf;
}
$ekle=new ekleme();


if($ekle){
    
    $ekle->text="Sorunuz ilgili veterinere ulaşmıştır . Cevabını bir zaman sonra cevaplar butonundan görebilirsiniz.";
    $ekle-> tf=true;
    echo(json-encode($ekle));
    
}else{
    $ekle->text="Sorunuz gönderilirken bir hata meydana geld,i. Lütfen daha sonra tekrar deneyin";
    $ekle-> tf=false;
   echo(json-encode($ekle));
}

?>