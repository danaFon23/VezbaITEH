
<?php
$strana = $_GET["strana"];
switch($strana){
		case "pocetna":
			echo "Dobrodošli na naš sajt!";
		break;
		case "o-nama":
			echo "Laboratorija za elektronsko poslovanje kao osnovni cilj poslovanja ima unapređenje poslovnog, naučno-istraživačkog i obrazovnog rada u oblasti primene informaciono komunikacionih tehnologija u poslovanju, kao i projektovanja informacionih sistema u Internet okruženju. Rad laboratorije zasniva se na primeni savremenih tehnologija i na permanantnim inovacijama.";
		break;
		case "kontakt":
			echo "ELAB se nalazi na Fakultetu organizacionih nauka u Beogradu. Adresa je Jove Ilića 154, kabinet 304.";
		break;
		default:
			echo "Greška 404: Stranica nije pronađena!";
		break;
	
	}

    ?>