<?php
// pocetna stranica
session_start();
$_SESSION["ukupaniznos"] = 1;
print "<a href='druga.php' '. SID . '> Prelaskom na sledecu stranicu povecavate iznos za 5 dinara</a>";

?>

