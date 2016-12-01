<?php
echo "<strong>Ceci est la ligne 1</strong>"; 
echo '<br>';
echo "<strong>Ceci est la ligne 2</strong>";
echo '<br>';
echo '<a href="http://www.mes.tn" > www.mes.tn </a><br>';
$date=date("m/d/Y");
$temps=date("H:i:s"); 
echo "Hello PHP, nous somme le $date, il est $temps<br>";
echo "Hello PHP, nous somme le ".date("m/d/Y")."<br>";
echo "Il est ".date("H:i:s");
?>

