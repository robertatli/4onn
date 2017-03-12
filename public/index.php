<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stilsida.css">
	<title>Verkefni 3</title>
</head>
<body>

	 	<?php include 'includes/menu.php'; ?>

	<div class="site">

		<br><br>

	  <h2><strong>Svör Verkefni 3</strong></h2>

		  <?php include 'includes/strip.php' ?>

	  <p class="text"><strong>MVC</strong> - Eða Model View Controller er forritunar mynstur sem á að hraða á hlöðun síðunnar. Það skiptir forritinu í þrjá parta til að skipta upplýsingunum. Það fer svo í gengum þessa parta í röð eftir hvað notandinn er að biðja um. MVC forritunar mynstrið leyfir endurnotkun kóðanns á mun betri hátt en upprunalega hefði verið.
	  		<ul>
	  			<li style="width:45%;">
	  				<strong>Model</strong> - Modelið er aðal partur mynstisins, það sýnir hegðun forritsins eftir hluta vandamálsins. Fráséð notendaviðmótinu. Það sér um og fer yfir öll gögnin, rökfræðin og reglur forritsins.
	  			</li>
		  			<?php include 'includes/strip2.php'; ?>
	  			<li style="width:45%;">
	  				<strong>View</strong> - Viewið getur verið allar tegundir útfærslu af upplýsingum sem settar eru á vefinn. e.g.,  graf eða skýringarmyndir. Það er hægt að hafa fleiri en eina tegund af upplýsingum um gögnin og hægt er að hafa sömu gögn oftar en einu sinni. Einnig er hægt að hafa súlurit og gögn í töflu fyrir endurskoðenur.
	  			</li>
		  			<?php include 'includes/strip2.php'; ?>
	  			<li style="width:45%;">
	  				<strong>Controller</strong> - Controllerinn tekur við beðnum frá inputum og breytir þeim í skipanir fyrir modelið og viewið. e.g., til að breyta texta í documenti eða breytir viewinu þegar þú ert að scrolla.
	  			</li>
	  		</ul>
	  </p>

		  <?php include 'includes/strip.php' ?>

	  <p class="text"><strong>Routing</strong> - Routing er ferli sem velur leið fyrir umferð á netkerfi, eða milli margra netkerfa. Routing er notað fyrir mikið af mismunandi netkerfum e.g., Það er notað fyrir PSTN sem stendur fyrir Publicly switched telephone network sem lætur fólk getað talað saman þegar þau eru sett á sama routeið, Tölvunetkerfi, eins og internetið og líka einka netkerfi.<br>Í PHP er routing notað til að vísa í file sem er á öðrum stað til að nota þann texta á staðnum sem þú vilt nota hann. Þetta leyfir þér að nota sama kóða á mörgum stöðum á sömu síðunni. þetta mun gera kóðann mun hreinni þar sem þú skiptir út kannski hundruðum af línum fyrir eina einfalda slóð sem leiðir að þeim kóða sem þú vilt nota. 
	  </p>

		  <?php include 'includes/strip.php' ?>
	  <p class="text"><strong>Composer</strong> - Composer er forrit sem stjórnar pökkum sem eru sentir á milli staða með PHP forritunar tungumálinu, Það veitir einfalt snið til að stjórna ósjálfstæðum í php tungumálinu og þurfðum gagnasöfnum.</p>

		  <?php include 'includes/strip.php' ?>

	   - Róbert Atli Svavarsson

		   <br><br><br><br>

	   <h2><strong>Svör Verkefni 4</strong></h2>

		   <?php include 'includes/strip.php' ?>

	   <p class="text"><strong>MySQLi vs PDO</strong> - PDO leyfir notkun á mun fleiri database drivers, og gerir breitingu á milli databasea mun auðveldara heldur en MySQLi. Þeir nota báðir OOP sem API en MySQLi býður einnig uppá notkun á procedural API sem gerir MySQLi léttara að læra á. PDO er aðeins hægari í vinnslu heldur en MySQLi, en munurinn er aðeins 2% - 6%. Báðir kostir eru jafn öruggir, ef þeir eru notaðir á þann hátt sem þeir voru hannaðir.</p>

		   <?php include 'includes/strip.php' ?>

	   <p class="text"><strong>Færubreytur</strong> - Þær eru til þess að senda með username og passwordið að gagnagrunninum. Annars myndi gagnagrunnurinn ekki leyfa þér að fá gögnin.</p>

		   <?php include 'includes/strip.php' ?>

	   <p class="text"><strong>Exec</strong> - Þegar exec(); er notað, þá keyrir það SQL yfirlýsinguna í einu kalli, returnar hversu mörgum röðum hún hefur áhrif á.</p>

		   <?php include 'includes/strip.php' ?>

	   <p class="text"><strong>Query</strong> - Þegar Query(); er notað, þákeyrir það SQL yfirlýsinguna í einu kalli, returnar útkomunni (ef það er einhver) úr statementinu sem PDOStatement objecti.</p>

		   <?php include 'includes/strip.php' ?>

	   <p class="text"><strong>PODStatement</strong> - </p>

		   <br><br><br><br><br>
	</div>
	
</html>