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

	function modifier_auteur($nom,$image,$text_auteur,$Publisher,$id)
	{
		 $pdo = connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE auteur SET NOM=?,IMAGE=?,text_auteur=?,PUBLISHER=? WHERE ID=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$image,$text_auteur,$Publisher,$id));
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




	function afficher_order_id()
	{
		$pdo = connexion:: getConnexion();
        $sql = 'SELECT * FROM auteur ORDER BY ID DESC';

        $x=$pdo->query($sql);

        return $x;
	}

    function AfficherMesAbonnments($compte)
    {
        $c=Connexion::getConnexion();
        $sql="SELECT * From book inner join abonnement  on book.AUTHOR=abonnement.ID_AUT and abonnement.ID_COMPTE='$compte' ";
        try
        {
            $liste=$c->query($sql);
            return $liste;
        } catch (PDOException $e)
        {
            die( "Echec de connexion".$e->getMessage());
        }
    }

    function afficherAuteur($id)
    {
        $c=Connexion::getConnexion();
        $sql="SELECT * From auteur inner join abonnement  on auteur.ID=abonnement.ID_AUT and abonnement.ID_COMPTE='$id' ";
        try
        {
            $liste=$c->query($sql);
            return $liste;
        } catch (PDOException $e)
        {
            die( "Echec de connexion".$e->getMessage());
        }

    }




}



















?>