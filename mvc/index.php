<?php include "inc/header.php"; ?>

<?php  
	
	// Inclusion classe Main
	include_once "system/libs/Main_class.php"; 
	include_once "system/libs/Dcontroller_class.php"; 

	$url = $_GET['url'];
	$url = rtrim($url, '/');
	$url = explode( '/', $url);

	include 'App/Controllers/' . $url[0] . '_controller.php';
	
	echo '<pre>';
	var_dump($url);
	echo '</pre>';

	$ctrl = new $url[0](); // OK
	$ctrl->eleanore($url[2]); // OK
	echo "<br>"; 
	$url[1]; // OK
	$ctrl->$url[1]($url[2]); // ERROR FATAL !!

	?>

<?php include 'inc/footer.php' ?>