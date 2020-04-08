<!DOCTYPE html>
<html>
<head>
	<title>Zadatak 2</title>
</head>
<body>

<?php
 function ValidirajKreditnuKarticu($number, $mod5 = false) {
	$parity = strlen($number) % 2;
	$total = 0;

  	$digits = str_split($number);
  	foreach($digits as $key => $digit) { // Foreach digit
	

	  	if (($key % 2) == $parity) 
		  	$digit = ($digit * 2);


	  	if ($digit >= 10) {

		  	$digit_parts = str_split($digit);

		  	$digit = $digit_parts[0]+$digit_parts[1];
	  	}

		$total += $digit;
  	}
	return ($total % ($mod5 ? 5 : 10) == 0 ? true : false); //
}

var_dump(ValidirajKreditnuKarticu(4716797320001727));


$url = 'Zadatak2.json';
$data = file_get_contents($url);
$json = json_decode($data, true);


foreach ($json as $item) {

	echo $item;
	echo var_dump(ValidirajKreditnuKarticu($item));

}




?>



</body>
</html>