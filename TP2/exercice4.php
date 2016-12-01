
<?php
echo '<H1>Calcule sur les variable</H1>';
$TVA = 0.206;
$prix = 150;
$Nombre = 10;
echo "Le type de TVA est ".gettype ($TVA )."<br>";
echo "Le type de Prix est ".gettype ($prix )."<br>";
echo "Le type de Nombre est ".gettype ($Nombre )."<br>";
$HT=$prix*$Nombre;
$TTC=$HT+($HT*$TVA);
echo "Le prix HT = ".$HT."<br>";
echo "Le prix TTC = ".$TTC;
?>
