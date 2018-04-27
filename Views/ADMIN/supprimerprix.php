<?php

include "../../Core/prixC.php";
$livreurC=new prixC();
if (isset($_POST["ciin"])){
	$livreurC->supprimerprix($_POST["ciin"]);
	header('Location: afficher_prix.php');
}

?>