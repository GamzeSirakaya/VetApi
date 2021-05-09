<?php
include("ayar.php");
$mus_id=$_POST["mus_id"];
$soru = $_POST["soru"];
$ekle =mysqli_query($baglan,"insert into veteriner_sorular(mus_id,soru,durum) values ('$mus_id','$soru','0')");

class ekleme {
    public $text;
    public $tf;
}
$ekle=new ekleme();


if($ekle){
    
    $ekle->text="Sorunuz ilgili veterinere ulaşmıştır . Cevabını bir zaman sonra cevaplar butonundan görebilirsiniz.";
    $ekle-> tf=true;
    echo(json_encode($ekle));
    
}else{
    $ekle->text="Sorunuz gönderilirken bir hata meydana geld,i. Lütfen daha sonra tekrar deneyin";
    $ekle-> tf=false;
   echo(json_encode($ekle));
}

?>