<!DOCTYPE html>
<html>
<head>
	<title>Zadatak 1</title>
</head>
<body>

<?php

function faktorijel($n) {
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "Faktorijel broja $n = $x"."\n" . "<br>";
}


$url = 'Zadatak1.json';
$data = file_get_contents($url);
$json = json_decode($data, true);


foreach($json as $item) {

	faktorijel($item['n']) . "<br>";}

?>




</body>
</html>