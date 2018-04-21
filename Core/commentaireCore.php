<?php

		include_once "C:/wamp64/www/AvenirCulturel/Entity/commentaire.php";
		include_once "C:/wamp64/www/AvenirCulturel/Config.php";








/**
*  
*/
class CommentaireCore 
{




	
	function __construct()
	{
		# code...
	}


	function Nbr_Commentaire($id_book)
	{
		$c = connexion::getConnexion();

			$count = $c->query("SELECT count(*) as NbNews FROM commentaire where ID_LIVRE = ".$id_book." ");
			$nbr_comm = $count->fetch();

		return $nbr_comm;

	}


	function Afficher_commentaire_id ($id_book)
	{

		$c = connexion::getConnexion();


		$rating_user = $c->query ("SELECT * FROM commentaire where ID_LIVRE = ".$id_book." ");

		return $rating_user;


	}


	function Ajouter_commentaire ($id_live,$commentaire,$id_compre)
	{
		$c = connexion::getConnexion();


		$add_comm = $c->prepare("INSERT INTO `commentaire`(`ID_LIVRE`, `COMMENTAIRE`,`ID_COMPTE`) VALUES (?,?,?)");
            $add_comm->execute(array($id_live,$commentaire,$id_compre));
	

            

	}

	function get_nbr_commentaire_id_livre_compte ($id_live,$id_compre)
	{

		$c = connexion::getConnexion();


		$rating_user = $c->query ("SELECT count(*) as Nbr FROM `commentaire` WHERE ID_LIVRE=".$id_live." && ID_COMPTE=".$id_compre."");
		$nbr_comm = $rating_user->fetch();

		return $nbr_comm['Nbr'];



	}





}







?>