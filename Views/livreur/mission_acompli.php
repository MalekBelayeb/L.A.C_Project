<?php

include "../../Core/laivraisonC.php";
$employeC=new laivraisonC();
if (isset($_POST["cin"])){
	$employeC->modifierLaivraison_livreur($_POST["cin"]);
	


	

    $result=$employeC->recupererLaivraison($_POST["cin"]);
    foreach($result as $row){
        $code_Livraison=$row['code_Livraison'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $adresse_ligne_1=$row['adresse_ligne_1'];
        $adresse_ligne_2=$row['adresse_ligne_2'];
        $ville=$row['ville'];
        $mail=$row['mail'];
        $num_tel=$row['num_tel'];
        $code_livre=$row['code_livre'];
        $date_laivraison=$row['date_laivraison'];
        $affectation=$row['affectation'];
        $livreur=$row['livreur'];
        $prix=$row['prix'];}

        

	

	include "../../Entity/livreur.php";

include "../../Core/livreurC.php";



    $employeC2 = new livreurC();
    $result=$employeC2->recupererLivreur('7');
    foreach($result as $row){
        $cin=$row['cin'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        
        $mail=$row['mail'];
        $num_tel=$row['num_tel'];
       
        $ville_actuelle=$row['ville_actuelle'];
        $situation=$row['situation']-1;
      $lat=$row['lat'];
    $lng=$row['lng'];}

        $employe2=new livreur($nom,$prenom,$mail,$num_tel,$ville_actuelle,$situation,$lat,$lng);
        $employe2->setcin($cin);
    $employeC2 = new livreurC(); 
    $employeC2->modifierLivreur($employe2,$cin);
    

header('Location: etatLivraison_livreur.php');





}

?>