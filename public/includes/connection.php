<?php

$source = 'mysql:host=localhost;dbname=1802992039_verk5';
$user = 'user';	
$passw = 'password';	


try {
	$conn = new PDO($source, $user, $passw);  

 	$conn->exec('SET NAMES "utf8"');

} catch (PDOException $e) {
		echo 'Tenging mistókst: ' . $e->getMessage();
		exit();
}
