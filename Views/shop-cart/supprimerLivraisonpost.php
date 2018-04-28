<?php

include "../../Core/laivraison_postC.php";
$employeC=new laivraison_posteC();
if (isset($_POST["cin"])){
	$employeC->supprimerLaivraison($_POST["cin"]);
	header('Location: afficherLaivraisonpost.php');
}

?>