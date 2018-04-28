<?php
session_start();

include "../../Entity/laivraison_post.php";
include "../../Core/laivraison_postC.php";




$employeC = new laivraison_posteC();
    $result=$employeC->recupererprix_p($_POST['ville']);
    foreach($result as $row){
        $region=$row['region'];
        $prix=$row['prix'];
        }

        $prix=$prix-1;



if ($_POST['ville']=='tunis') {
	$_POST['prix']=$prix;
	
}

if ($_POST['ville']=='bizert') {
	$_POST['prix']=$prix;
}

if ($_POST['ville']=='kef') {
    $_POST['prix']=$prix;
}

if ($_POST['ville']=='sous') {
	$_POST['prix']=$prix;
}

if ($_POST['ville']=='mounestir') {
	$_POST['prix']=$prix;
}

if ($_POST['ville']=='jendouba') {
	$_POST['prix']=$prix;
}
if ($_POST['ville']=='gafssa') {
	$_POST['prix']=$prix;
}



if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['code_postale'])  and isset($_POST['ville'])and isset($_POST['mail'])and isset($_POST['num_tel'])and isset($_POST['code_livre'])){

$laivraison1=new laivraisonposte($_POST['nom'],$_POST['prenom'],$_POST['code_postale'],$_POST['ville'],$_POST['mail'],$_POST['num_tel'],$_POST['code_livre'],date("Y-m-d"),$_POST['prix']);

$_SESSION['livraisonPrix'] = $_POST['prix'];
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3




$laivraison1C=new laivraison_posteC();
$laivraison1C->ajouterLaivraison_post($laivraison1);
header('Location: afficherLaivraisonpost.php');


	
}else{
	echo "vérifier les champs";
}



?>