
<?php
$cor["id"]="1";
$cor["nom"]="nicole";
$cor["pr�nom"]="dupont";
$cor["adresse"]="rue xxx Gafsa";
$cor["age"]="24";
/* Fonction permettant l'affichage du contenu du tableau associatif
pass� en param�tre */
function affich_tab($tab_a_afficher)
{
	foreach($tab_a_afficher as $i => $e)
	{	
		echo "<b>".$i."</b> : ".$e."<br>";
	}
}
// Appelle � la fonction
affich_tab($cor);
/* Fonction permettant l'affichage du contenu du tableau associatif
pass� en param�tre sous form d'un tableau html*/
function affich_tab_html($tab_a_afficher)
{
	echo "<br><i>affichage sous format tableau</i><br> <table border='2'>";
foreach($tab_a_afficher as $i => $e)
	{
echo "<tr>"	;	
		echo "<td><b>".$i."</b></td><td>".$e."</td></tr>";
	}
	echo "</table>";
}
affich_tab_html($cor);
?>
