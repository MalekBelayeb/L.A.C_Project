<?php





	include_once "C:/wamp64/www/AvenirCulturel\Entity/ev.php";
		include_once "C:/wamp64/www/AvenirCulturel/Config.php";

/**
* 
*/
class evenementcore 
{


	
	function __construct()
	{
		# cosxq..	
	}




	function afficher_evenement()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM evenement ORDER BY id_ev DESC ");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}

        private $id_ev;
		private $nom_ev;
		private $invite_ev;
		private $date_ev;
		private $sujet_ev;
		private $sujet_res_ev;
		private $image_ev;
		private $image_ev1;
		private $image_ev2;
		private $image_ev3;

               

	function ajouter_evenement($bk)
	{
		$c = Connexion::getConnexion();

		try {

			$req = $c->prepare("INSERT INTO `evenement`(`nom_ev`,`invite_ev`, `date_ev`, `sujet_ev`, `sujet_res_ev`, `image_ev`, `image_ev1`, `image_ev2`, `image_ev3`) VALUES (:nom_ev,:invite_ev,:date_ev,:sujet_ev,:sujet_res_ev,:image_ev,:image_ev1,:image_ev2,:image_ev3)");

			$req->bindvalue(':nom_ev',$bk->getNom_ev());
			$req->bindvalue(':invite_ev',$bk->getinvite_ev());
			$req->bindvalue(':date_ev',$bk->getdate_ev());
			$req->bindvalue(':sujet_ev',$bk->getsujet_ev());
			$req->bindvalue(':sujet_res_ev',$bk->getsujet_res_ev());
			$req->bindvalue(':image_ev',$bk->getImage_ev());
			$req->bindvalue(':image_ev1',$bk->getImage_ev1());
			$req->bindvalue(':image_ev2',$bk->getImage_ev2());
			$req->bindvalue(':image_ev3',$bk->getImage_ev3());
			



			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

	}




	function delete_evenement($bk)
	{


		$pdo = Connexion::getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM evenement  WHERE id_ev = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($bk));
	}



	function update_evenement($bk)
	{

		$pdo= Connexion::getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE evenement  set nom_ev = ?, invite_ev = ?, date_ev =? ,sujet_ev=?,sujet_res_ev=?,  image_ev=?, image_ev1=? ,image_ev2=? ,image_ev3=? WHERE id_ev = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($bk->getNom_ev(),$bk->getinvite_ev(),$bk->getdate_ev(),$bk->getsujet_ev(),$bk->getsujet_res_ev(),$bk->getImage_ev(),$bk->getImage_ev1(),$bk->getImage_ev2(),$bk->getImage_ev3(),$bk->getid_ev()));
            //Database::disconnect();



	}

function afficherrev($limit)
{
		$c = Connexion::getConnexion();


                                $sql = "SELECT * FROM evenement $limit";
                                                        $bks = $c->query($sql);
return $bks;

}

	function recherche_evenement($nom_ev,$limit)
	{
		$c = Connexion::getConnexion();
                           
                            $sql = "SELECT * FROM evenement WHERE nom_ev like '%$nom_ev%'";


                        $bks = $c->query($sql);
return $bks;
	}



	function recherche_evenement_par_date($date_ev,$limit)
	{
		$c = Connexion::getConnexion();
                           
                            $sql = "SELECT * FROM evenement WHERE date_ev ='$date_ev' ";


                        $bks = $c->query($sql);
return $bks;
	}




function nbrpage()
{
		$c = Connexion::getConnexion();

	    $req = $c->query("SELECT count(*) as NbNews FROM evenement ");
                        $rows = $req->fetch();

                        return $rows;
}

function nbrpagerechercher($nom_ev)
	{	$c = Connexion::getConnexion();

	          $req = $c->query("SELECT count(*) as NbNews FROM evenement WHERE nom_ev = '".$nom_ev."'  ");/*page to page RECHERCHE*/
                        $rows = $req->fetch();
                        return $rows;

}

function nbrpagerechercherpardate($date_ev)
	{	$c = Connexion::getConnexion();

	          $req = $c->query("SELECT count(*) as NbNews FROM evenement WHERE date_ev = '".$date_ev."'  ");/*page to page RECHERCHE*/
                        $rows = $req->fetch();
                        return $rows;

}


function trievenement()
{
		$c = Connexion::getConnexion();

	$sql = "SELECT * FROM evenement ORDER by date_ev";
$evs = $c->query($sql);
return $evs;

}


function afficherdapresid($id_ev)
{
		$c = Connexion::getConnexion();
$sql = "SELECT * FROM evenement WHERE id_ev = ".$id_ev."";
$req = $c->query($sql);
return $req;
}




}
















?>
