<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>login.php</title>
</head>
<body>
<?php
 
if(isset($_POST['action']) && $_POST['action'] == 'end'){
	$_SESSION= array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	die();
}  

if(session_status() == PHP_SESSION_ACTIVE){
	if(isset($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
	}
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}
	
	$_SESSION['visits']++;
	
}

echo "Hello ". $_SESSION['username']. " you have visited this site ". $_SESSION['visits']. " times.";

echo '<form action="http://web.engr.oregonstate.edu/~afzals/content1.php" method="Post">';
echo '<button type="submit" name="action" value="end">Logout</button>';
echo '</form>';
?>
</body>
</html>
