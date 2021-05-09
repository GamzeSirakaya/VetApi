<?php
include("ayar.php");
$cevapid=$_POST["cevap"];
$soruid=$_POST["soru"];
$sil=mysqli_query($baglan,"delete from veteriner_cevaplar where id='$cevapid' and soru_id='$soruid'");
$sil2=mysqli_query($baglan,"delete from veteriner_sorular where id='$cevapid'");

class deleteRecord{
    
    public $text;
    public $tf;
    
}

$del= new deleteRecord();

if($sil && $sil2){
    $del->text="Silme işlemi başarıyla gerçeklemiştir.";
    $del-> tf=true;
    echo(json_encode($del));
}
    else{
        $del->text="Silme işlemi basarısız.";
        $del->tf=false;
        echo(json_encode($del));
    }


