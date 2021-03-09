<?php
include("ayar.php");
$login_mail=$_POST["mail"];
$password=$_POST["password"];

$control=mysqli_query($baglan,"select * from veteriner_kullanicilar where mailAdres='$login_mail' and parola='$password'");
$count=mysqli_num_rows($control);

class UserLogin{
    public $id;
    public $kadi;
    public $mailAdres;
    public $parola;
    public $tf;
    public $text;
}
$user=new UserLogin();

if($count>0){
    
    $parse=mysqli_fetch_assoc($control);
    $durum=$parse["durum"];
    $id=$parse["id"];
    $kadi=$parse["kadi"];
    $parola=$parse["parola"];
    $mailAdres=$parse["mailAdres"];

    
    
   if($durum==1){
         $user->tf=true;
    $user->text="Sistemde giriş başarılı bir şekilde gerçekleştirilmiştir";
    $user->id=$id;
    $user->kadi=$kadi;
    $user->mailAdres=$mailAdres;
    $user->parola=$parola;
        echo(json_encode($user));
       
   }else{
        $user->tf=false;
    $user->text="Sistemde giriş yapabilmeniz için mail adresinizi onaylamanız gerekmektedir.";
    $user->id=null;
    $user->kadi=null;
    $user->mailAdres=null;
    $user->parola=null;
        echo(json_encode($user));
   
   } 
}else{
    $user->tf=false;
    $user->text="Sistemde Girmiş olduğunuz bilgilere göre kullanıcı bulunmamaktadır.";
    $user->id=null;
    $user->kadi=null;
    $user->mailAdres=null;
    $user->parola=null;
    echo(json_encode($user));
    
}



?>