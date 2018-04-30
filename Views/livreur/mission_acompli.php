<?php

include "../../Core/laivraisonC.php";
$employeC=new laivraisonC();
if (isset($_POST["cin"])){
	$employeC->modifierLaivraison_livreur($_POST["cin"]);
	header('Location: etatLivraison_livreur.php');
}

?>