<?php

include("ayar.php");
$baslik = $_POST["baslik"];
$text = $_POST["text"];
$resim = $_POST["resim"];
class Result
{
    public $sonuc;
    public $tf;
    
}
$result = new Result();
$isim = rand (0,100000).rand(0,100000).rand(0,100000);

$yol = "image/$isim.jpg";

$resimpath = "http://gamzesirakaya.com/veterinerservis/image/$isim.jpg";

$add = mysqli_query($baglan,"insert into veteriner_kampanyalar(text, resim, baslik) values ('$text','$resimpath','$baslik')");

    if($add){
        
        file_put_contents($yol,base64_decode($resim));
        $result->sonuc = "Kampanya eklendi.";
        $result->tf = true;
        echo(json_encode($result));
    }
    else{
    $result->sonuc = "Kampanya eklenmedi.";
        $result->tf = false;
        echo(json_encode($result));
    
    }






?>