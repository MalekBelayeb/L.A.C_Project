<?php

include "../../Core/laivraisonC.php";
$employeC=new laivraisonC();
if (isset($_POST["cin"])){
	$employeC->supprimerLaivraison($_POST["cin"]);
	header('Location: afficherLaivraison.php');
}

?>