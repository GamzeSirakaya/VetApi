<?php
include('ayar.php');
$mus_id=30;
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
   // while($bilgi=mysqli_fetch_assoc($sorgu))
}else{
    
}

?>