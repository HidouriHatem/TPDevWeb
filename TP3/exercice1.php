<?php
$tab[0]=25;
$tab[1]=-25;
$tab[2]=300;
$tab[3]=40;
$tab[4]=-8;
For ($i=0;$i<5;$i++)
	{if ($tab[$i]>0) 
		echo sqrt($tab[$i]).'<br>';
	elseif ($tab[$i]<0)
		echo sqrt(abs($tab[$i])).'<br>';
	else 	
		echo $tab[$i].'<br>';
	}

$nbre=10;
$s=0;
for ($j=1;$j<=$nbre;$j++)
	$s=$s+$j;

echo "La somme des entiers de 1 à ".$nbre." = ".$s."<br>";

function tri_tab($t)
{
sort($t);
$l=count($t);
For ($i=0; $i<$l; $i++)
	echo $t[$i]."<br>";		
} 
tri_tab($tab);
?>