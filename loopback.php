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
<body>
<?php

$array = array();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$array['Type'] = "POST";
	
	foreach($_POST as $key => $value){
		$i = 0;
		if(is_null($key || $value) == true){
			$array["parameters"] = "Null";
		}
		else
			$array["parameters"] .= $key. ": ". $value. ", ";
	}
}
else{
	$array['Type'] = "GET";
	foreach($_GET as $key => $value){
		if(is_null($key || $value) == true){
			$array["parameters"] = "Null";
		}
		else
			$array["parameters"] .= $key. ": ". $value. ", ";
	}
}

echo json_encode($array);
?>
</body>
</html>