<?php
$base = mysql_connect('localhost','root');
mysql_select_db('cdaudio',$base);
$sql = 'INSERT INTO proprietaire VALUES (5,"Nouha",337965,"Zarroug Gafsa",21)';

$req = mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
if ($req)
	{
		echo "Insertion réussite !";
	}

mysql_close();
?>