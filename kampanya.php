<?php
include("ayar.php");
class Kampanya
{
        public $id;
        public $baslik;
        public $text;
        public $resim;
        public $tf;
}

$kampanya = new Kampanya();
$sorgu = mysqli_query($baglan,"select*from veteriner_kampanyalar");
$count = mysqli_num_rows($sorgu);

$sayac = 0;

if ($count>0)
{
    echo("[");
    while($kayit = mysqli_fetch_assoc($sorgu))
    {
        $sayac = $sayac+1;
        $kampanya->id = $kayit["id"];
        $kampanya->baslik = $kayit ["baslik"];
        $kampanya->text = $kayit ["text"];
        $kampanya->resim = $kayit ["resim"];
        $kampanya->tf = true;

        echo(json_encode($kampanya));
        
        if($count>$sayac)
        {
            echo(",");
        }
    }
    echo("]");
}
else
{
    echo("[");
        $kampanya->id = null;
        $kampanya->baslik = null;
        $kampanya->text = null;
        $kampanya->resim = null;
        $kampanya->tf = true;
        
        echo(json_encode($kampanya));
    echo("]");
}
?>