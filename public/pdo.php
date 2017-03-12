
<?php include 'includes/connection.php' ?>

<?php 
	require_once 'includes/connection.php';
	$conn = dbConnect('read', 'pdo');
	$sql = 'SELECT * FROM images';
	$result = $conn->query($sql);

	$errorInfo = $conn->errorInfo();
	if (isset($errorInfo[2])) {
	 	$error = $errorInfo[2];
	}

	 if (isset($errorInfo[2])) {
	 	$error = $errorInfo[2];
	} else {
	 	$numRows = $result->rowCount();
	} 

	?>
	
<!DOCTYPE html>

<html>

<head>

	<title>PDO</title>

</head>

<body>

	<?php
		if (isset($error)) {
		 	echo "<p>$error</p>";
		} else {
		 	echo "<p>A total of $numRows records were found.</p>";
		}
	?>

</body>

</html>