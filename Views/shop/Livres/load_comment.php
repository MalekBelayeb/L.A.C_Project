<?php



	include_once "../../../config.php";
	include_once "../../../core/commentaireCore.php";





	$req_comm =  $commentaire->Afficher_commentaire_id ($_GET['Livre'],$_POST['commentNewCount']);    














?>