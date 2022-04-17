<html>
<head>
</head>
<body>
<h1>Moj sajt</h1>
<ul>
<li><a href="get-dinamicki-link.php?strana=pocetna">Početna</a></li>
<li><a href="get-dinamicki-link.php?strana=o-nama">O nama</a></li>
<li><a href="get-dinamicki-link.php?strana=kontakt">Kontakt</a></li>
</ul>
<?php
if (isset($_GET["strana"])){
	$strana = $_GET["strana"];
} else {
	$strana = "pocetna";
}

?>
</body>
</html>
