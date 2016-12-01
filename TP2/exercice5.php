<?php
$prix_table=150;
$prix_armoire=50;
$Nombre=10;
$x;
$y;
$x=$prix_table*$Nombre;
$y=$prix_armoire*$Nombre;
if ($x==$y) 
	echo $x." = ".$y."<br>";
elseif ($x>$y)
	echo $x." > ".$y."<br>";
else
	echo $x." < ".$y."<br>";
echo "<br>";
echo "Le prix le plus élevé est ".max($x,$y);

$min= 1;
$max= 50;
$c= rand($min, $max);
echo "<br>";
echo $c."<br>";

if (($c%2) == 0)
	echo $c." est pair! ";
else
	echo $c." est impair! ";
?>