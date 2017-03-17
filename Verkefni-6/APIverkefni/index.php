<?php 

	$url = "http://apis.is/petrol";

	$json = file_get_contents($url);

	$json_array = json_decode($json, true);

	$bensin = $json_array["results"];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../stilsida.css">
	<title>API verkefni</title>
</head>
	<body>
		<table>
		     <tr>
		        <th>Fyrirtæki</th>
		        <th>Bensin 95</th>
		        <th>Bensin 95 afsláttur</th>
		        <th>Diesel</th>
		        <th>Diesel Afsláttur</th>
		        <th>Staðsetning</th>
		      </tr>
		      <?php
		         foreach ($bensin as $value) {
		          echo    "<tr>",
		                      "<td>", 
		                          $value["company"],  
		                      "</td>",
		                       "<td>", 
		                          $value["bensin95"],
		                      "</td>",
		                      "<td>", 
		                          $value["bensin95_discount"],
		                      "</td>",
		                      "<td>", 
		                          $value["diesel"],
		                      "</td>",  
		                      "<td>", 
		                          $value["diesel_discount"],
		                      "</td>",  
		                      "<td>", 
		                          $value["name"],
		                      "</td>",        
		                  "</tr>";
		        }           
		      ?>
		</table>
	</body>
</html>