<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>multtable.php</title>
</head>
<?php

$minCand = $_GET["min-multiplicand"];
$maxCand = $_GET["max-multiplicand"];
$minPlier = $_GET["min-multiplier"];
$maxPlier = $_GET["max-multiplier"];

if($maxCand < $minCand){
	echo "Minimum multiplicand larger than maximum";
}
else if($maxPlier < $minPlier){
	echo "Minimum multiplier larger than maximum";
}

if(is_int($maxCand) == false){
	echo "max-multiplicand must be an integer";
}
else if(is_int($minCand) == false){
	echo "min-multiplicand must be an integer";
}
else if(is_int($maxPlier) == false){
	echo "max-multiplier must be an integer";
}
else if(is_int($minPlier) == false){
	echo "min-multiplier must be an integer";
}

if(is_null($maxCand) == true){
	echo "Missing parameter max-multiplicand";
}
else if(is_null($minCand) == true){
	echo "Missing parameter min-multiplicand";
}
else if(is_null($maxPlier) == true){
	echo "Missing parameter max-multiplier";
}
else if(is_null($minPlier) == true){
	echo "Missing parameter min-multiplier";
}

?>