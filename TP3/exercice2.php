<?php
$tab[0]=25;
$tab[1]=-25;
$tab[2]=300;
$tab[3]=40;
$s=0;
For ($i=0; $i<4; $i++)
	$s=$s+$tab[$i];
echo "Somme des entiers = ".$s."<br>";

function somme ($t) {
	$s=0;
For ($i=0; $i<4; $i++)
	$s=$s+$t[$i];
echo "Somme des entiers = ".$s."<br>";
}
somme($tab);

include 'fonction.php';
calcule($tab);
?>