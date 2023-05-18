<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>erstes Formular</title>

	</head>
	<ul>
	<li><a href="Home.html">Home</a></li>
	<li><a href="About.html">About</a></li>
	<li><a href="Blog.html">Blog</a></li>
	<li><a href="Reisetipps.html">Tipps</a></li>
	<li><a href="Reiseziele.html">Ziele</a></li>
	<li><a href="formular 1.php">Form</a></li>
	<li><a href="CatPhotoApp.html">Cat Photos</a></li>
</ul><br>
	 
	<body>
		<h1>ein Formular</h1>
		<form action = "formular 1.php" method = "GET">
			<p>Anrede<br>
			<!-- RadioButton werden über ihren gemeinsamen Namen gruppiert -->
			<input type = "radio" name = "anrede" value = "Frau"> Frau<br>
			<input type = "radio" name = "anrede" value = "Herr"> Herr<br>
			<input type = "radio" name = "anrede" value = ""> leer
			</p>
			<p>Vorname: <br>
			<input type = "text" name = "vorname" placeholder = "hier Ihr Vorname bitte"></p>
			<p>Nachname:<br>
			<input type = "text" name = "nachname" placeholder = "hier Ihr Nachname bitte"></p>
			<p>Benutzer-Kennung:<br>
			<input type = "text" name = "userid" placeholder = "Ihre UserID"></p>
			<p>Passwort:<br>
			<input type = "password" name = "passwort"></p>
			<p><input type = "submit" value = "absenden"></p>
		</form>
		<hr>
		<!-- Auswertung des Formulars -->
		<?php
			$vname = $_GET["vorname"];
			echo "Herzlich willkommen " . $_GET["anrede"] . " " . $_GET["vorname"] . " " . $_GET["nachname"];
		?>
		<hr>
		<?php
			echo "Hallo Welt";
			// Arbeiten mit Variablen - es wird dem Variablennamen ein $ vorangestellt
			$text1 = "variablen-Text";
		?>
		<br>
		<?php
			echo "Text aus der ersten Variablen: " . $text1;
		?>
		<br>
		<h3>Rechnen</h3>
		<?php
			$a = 6;
			$b = 3;
			echo "Die Addition von " . $a . " und " . $b . " ist " . $a + $b;
			$c = "4";
			echo "<br>Die Addition von " . $a . " und " . $c . " ist " . $a + $c;
			
		?>
	</body>
</html>
