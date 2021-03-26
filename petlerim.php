<?php
include('ayar.php');
$mus_id=$_POST["mus_id"];
$sorgu=mysqli_query($baglan,"select * from veteriner_pet_listesi where mus_id=$mus_id");
$count=mysqli_num_rows($sorgu);
class petClass{
  public $petid ;
  public $petisim;
  public $petresim;
  public $pettur;
  public $petcins;
  public $tf;
}
$pet=new petClass();
$sayac = 0;

if($count>0){
    echo("[");
    while($bilgi=mysqli_fetch_assoc($sorgu)){
        $sayac=$sayac+1;
       $pet->petid=$bilgi["id"];
        $pet->petisim=$bilgi["pet_isim"];
        $pet->petresim=$bilgi["pet_resim"];
        $pet->pettur=$bilgi["pet_tur"];
        $pet-> petcins=$bilgi["pet_cins"];
        $tf=true;
            echo(json_encode($pet));
            if($count>$sayac){
                echo(",");
            }
    }
    echo("]");
}else{
     echo("[");
   
      
       $pet->petid=null;
        $pet->petisim=null;
        $pet->petresim=null;
        $pet->pettur=null;
        $pet-> petcins=null;
        $tf=false;
        echo(json_encode($pet));
         
            
    
    echo("]");
    
}

?>