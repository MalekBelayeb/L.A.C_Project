<?php




		include_once "C:/wamp64/www/AvenirCulturel/Entity/auteur.php";
		include_once "C:/wamp64/www/AvenirCulturel/Config.php";


/**
* 
*/
class Auteurcore 
{


	
	function __construct()
	{
		# code...
	}




	function afficher_auteur()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM auteur");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}



	function ajouter_auteur($bk)
	{
		$c = Connexion::getConnexion();

		try {

			$req = $c->prepare("INSERT INTO `auteur`(`NOM`, `IMAGE`, `text_auteur`, `PUBLISHER`) VALUES (:nom,:image,:text_auteur,:PUBLISHER)");

			$req->bindvalue(':nom',$bk->getNom());
			$req->bindvalue(':image',$bk->getImage());
			$req->bindvalue(':text_auteur',$bk->getText_auteur());
			$req->bindvalue(':PUBLISHER',$bk->getPUBLISHER());
			$req->execute();

			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

	}

	function delete_auteur($bk)
	{

		 $pdo = Connexion:: getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM auteur  WHERE ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($bk));
	}



	function Recupere_auteur_id ($auteur)
	{
		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM auteur WHERE ID = ".$auteur."");
					$donnes_auteur = $req1->fetch();

					return $donnes_auteur;


	}




	


	function Nbr_livre_id ($id_auteur)
	{

		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT  COUNT(*) as NbNews FROM book WHERE AUTHOR=".$id_auteur." ");
            $donnees = $req1->fetch();

            return $donnees;



	}



	function Afficher_auteur_id($id_auteur)
	{

				$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT  * FROM auteur WHERE ID=".$id_auteur." ");
            $donnees = $req1->fetch();

            return $donnees;
	}


	




}



















?>