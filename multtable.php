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
$height = (($maxCand - $minCand) + 2);
$width = (($maxPlier - $minPlier) + 2);

// Error checking: is minimum greater than maximum.
if($maxCand < $minCand){
	echo "Minimum multiplicand larger than maximum! <br>";
}
else if($maxPlier < $minPlier){
	echo "Minimum multiplier larger than maximum! <br>";
}

// Error checking: Are integers provided.
if(is_numeric($maxCand) == false){
	echo "max-multiplicand must be an integer! <br>";
}
else if(is_numeric($minCand) == false){
	echo "min-multiplicand must be an integer! <br>";
}
else if(is_numeric($maxPlier) == false){
	echo "max-multiplier must be an integer! <br>";
}
else if(is_numeric($minPlier) == false){
	echo "min-multiplier must be an integer! <br>";
}

// Error checking: are any of the variables null.
if(is_null($maxCand) == true){
	echo "Missing parameter max-multiplicand! <br>";
}
else if(is_null($minCand) == true){
	echo "Missing parameter min-multiplicand! <br>";
}
else if(is_null($maxPlier) == true){
	echo "Missing parameter max-multiplier! <br>";
}
else if(is_null($minPlier) == true){
	echo "Missing parameter min-multiplier! <br>";
} 

echo '<table border=1>';
echo '<tr>';
echo '<th>';

for($i = 0; $i < ($width-1); $i++){
	echo '<th>'. ($minPlier + $i). '<br>';
}

for($i = 0; $i < ($height - 1); $i++){
echo '<tr>';
	for($j = 0;$j < $width; $j++){
		if($j == 0){
			echo '<td>'. ($minCand + $i). '<br>';
		}
		else{
			echo '<td>'. (($minCand + $i) * ($minPlier + ($j-1)). '<br>');
		}
	}
}

echo '</table>'

?>


