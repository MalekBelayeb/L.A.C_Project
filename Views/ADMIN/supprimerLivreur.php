<?php

include "../../Core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["ciin"])){
	$livreurC->supprimerLivreur($_POST["ciin"]);
	header('Location: afficherLivreur.php');
}

?>