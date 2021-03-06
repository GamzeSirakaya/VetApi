<?php
$Servername="localhost";
$username="gamzesi1_1301";
$sifre="130199Ga.";
$dbname="gamzesi1_1301";

$baglan=mysqli_connect($Servername,$username,$sifre,$dbname);

mysqli_set_charset($baglan,"UTF-8");
mysqli_query($baglan,"SET NAMES UTF8");





?>
