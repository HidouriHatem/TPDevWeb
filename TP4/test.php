<?php
$base = mysql_connect('localhost','root');
mysql_select_db('cdaudio',$base);

$sql = 'SELECT telephone FROM proprietaire WHERE proprietaire.nom = "Houda"';
$req = mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$date = mysql_fetch_array($req);
$numero_telephone = $date['telephone'];

mysql_free_result($req); mysql_close();

echo "Le num�ro de t�l�phone de foulen est :<br>$numero_telephone";
?>