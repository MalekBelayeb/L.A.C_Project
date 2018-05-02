<?php

session_start();
include "../../Entity/laivraison.php";
include "../../Core/laivraisonC.php";

$employeC = new laivraisonC();
    $result=$employeC->recupererprix($_POST['ville']);
    foreach($result as $row){
        $region=$row['region'];
        $prix=$row['prix'];
        }



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


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse_ligne_1']) and isset($_POST['adresse_ligne_2'])  and isset($_POST['ville'])and isset($_POST['mail'])and isset($_POST['num_tel'])and isset($_POST['code_livre'])){
$laivraison1=new laivraison($_POST['nom'],$_POST['prenom'],$_POST['adresse_ligne_1'],$_POST['adresse_ligne_2'],$_POST['ville'],$_POST['mail'],$_POST['num_tel'],$_POST['code_livre'],date("Y-m-d"),"0",0,$_POST['prix']);

$_SESSION['livraisonPrix'] = $_POST['prix'];
$_SESSION['livraison_nom'] = $_POST['nom'];
$_SESSION['livraison_prenom'] = $_POST['prenom'];
$_SESSION['livraison_adresse_ligne_1'] = $_POST['adresse_ligne_1'];
$_SESSION['livraison_adresse_ligne_2'] = $_POST['adresse_ligne_2'];
$_SESSION['livraison_ville'] = $_POST['ville'];
$_SESSION['livraison_mail'] = $_POST['mail'];
$_SESSION['livraison_num_tel'] = $_POST['num_tel'];
$_SESSION['livraison_date'] = date("Y-m-d");
$_SESSION['livraison_affectation'] = "0";
$_SESSION['livraison_livreur'] = 0;




//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$laivraison1C=new laivraisonC();
$laivraison1C->ajouterLaivraison($laivraison1);

$last = $laivraison1C->get_last_code();

$_SESSION['code_livre_livraison'] = $last['code_Livraison'];

header('Location: afficherLaivraison.php');
	
}else{
	echo "vérifier les champs";
}



?>