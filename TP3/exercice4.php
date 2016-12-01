<?php
$c="Le langage php";
echo strtoupper($c)."<br>";
$co="php";
$cn="html";
echo str_replace($co,$cn,$c)."<br>";
echo strlen($c)."<br>";
echo strrev($c)."<br>";
$tab=str_split($c);
sort($tab);
for ($i=0; $i<count($tab) ;$i++)
{
	echo "tab[".$i."] = ".$tab[$i]."<br>";
}

?>