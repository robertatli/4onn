<?php
	$json = '{
			"myndaUpplysingar":[
			{
				"myndaVefsloðir": "images/Giraffes.jpg",
				"myndaHeiti": "Giraffes"
			},
			{
				"myndaVefsloðir": "images/ljon.jpg",
				"myndaHeiti": "lion"
			},
			{
				"myndaVefsloðir": "images/panda.jpg",
				"myndaHeiti": "panda"
			}
		]
	}';

	$json_array = json_decode($json, true);

	$upplysingar = $json_array["myndaUpplysingar"];
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stilsida.css">
	<title>JSON Form</title>
</head>
	<body>	
		<table>
		     <tr>
		        <th>Name</th>
		        <th>Link</th>
		      </tr>
		      <?php
		      // vinnum með gögnin úr fylkinu $currencies 
		         // fyrir hvert og eitt fylki (key/value) í $currencies; usd, eur osfrv. 
		         foreach ($upplysingar as $value) {
		          // $value er sætisnúmer fyrir hvert og eitt fylki
		          // $value["shortName"] er vísun í key, sem skilar gildi.
		          echo    "<tr>",
		                      "<td>", 
		                          $value["myndaHeiti"],  
		                      "</td>",
		                       "<td>", 
		                          $value["myndaVefsloðir"],
		                      "</td>",      
		                  "</tr>";
		        }           
		      ?>
		</table>
	</body>
<script src="myndir.js"></script>
</html>