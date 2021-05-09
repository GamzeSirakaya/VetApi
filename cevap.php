<?php
include("ayar.php");
$mus_id=$_POST["mus_id"];

$sor =mysqli_query($baglan,"SELECT a.id as soruid,a.soru,b.cevap,b.id as cevapid,b.soru_id FROM veteriner_sorular a INNER JOIN veteriner_cevaplar b ON a.id=b.soru_id WHERE a.durum='1' AND a.mus_id='$mus_id'");
$count=mysqli_num_rows($sor);

class soruClass{

public $soru;
public $soruid;
public $cevap;
public $cevapid;
public $tf;

}
$yanıt=new soruClass();
$sayac = 0;

if($count>0){
    echo("[");
    while($bilgi=mysqli_fetch_assoc($sor)){
        $sayac=$sayac+1;
       $yanıt->soru=$bilgi["soru"];
        $yanıt->soruid=$bilgi["soruid"];
        $yanıt->cevap=$bilgi["cevap"];
        $yanıt->cevapid=$bilgi["cevapid"];
        $yanıt->tf=true;
    
            echo(json_encode($yanıt));
            if($count>$sayac){
                echo(",");
            }
    }
    echo("]");
}else{
     echo("[");
   
      
       $yanıt->soru=null;
        $yanıt->soruid=null;
        $yanıt->cevap=null;
        $yanıt->cevapid=null;
       $yanıt-> tf=false;
        echo(json_encode($yanıt));
         
            
    
    echo("]");
    
}
?>