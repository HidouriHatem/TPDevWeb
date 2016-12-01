<?php
$base = mysql_connect('localhost','root');
mysql_select_db('cdaudio',$base);

$sql = 'SELECT auteur_CD FROM disque WHERE title_CD = "Discovery"';
$req = mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$t = mysql_fetch_array($req);
$titre = $t['auteur_CD'];

mysql_free_result($req); mysql_close();

echo "L'auteur est :<br>$titre";
?>