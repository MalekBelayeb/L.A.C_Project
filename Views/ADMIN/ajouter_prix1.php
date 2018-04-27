<?php


include "../../Entity/prix.php";
include "../../Core/prixC.php";









if ( isset($_POST['region']) and isset($_POST['prix'])){
$laivreur1=new prix($_POST['region'],$_POST['prix']) ;
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1C= new prixC();
$livreur1C->ajouterPrix($laivreur1);
header('Location: afficher_prix.php');
	
}else{
	echo "vérifier les champs";
}




?>
