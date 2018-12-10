<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<?php
		$t=date("H");
		$_ime=$_POST['ime'];
		$pre=$_POST['pre'];
		if(($t >= "8" and $t <= "11") and ($_ime != "" or $pre != "")){
			print"<p> Dobro jutro ".$_ime." ".$pre."</p>";}
		if(($t >= "12" and $t <= "18") and ($_ime != "" or $pre != "")){
			print"<p> Dobar dan ".$_ime." ".$pre."</p>";}
		if(($t >= "19" and $t <= "7") and ($_ime != "" or $pre != "")){
			print"<p> Dobro večer ".$_ime." ".$pre."</p>";}
		if($_ime == "" or $pre == ""){
			print"<p> Upišite ime i prezime!</p>";}
		print '<a href="index.html">Natrag</a>';
	?>
</body>
</html>

	