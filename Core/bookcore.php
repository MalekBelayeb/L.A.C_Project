<?php




		include_once "C:/wamp64/www/AvenirCulturel/Entity/book.php";
		include_once "C:/wamp64/www/AvenirCulturel/Config.php";


/**
* 
*/
class Bookcore 
{


	
	function __construct()
	{
		# code...
	}



	function Mellieur_vente ()
	{

			$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM `book` ORDER by NBR_VENTE DESC LIMIT 5");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}

	function Mellieur_note ()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM `book` GROUP by ID ORDER by RATING DESC LIMIT 5");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}

	}

	function afficher_book_reduction()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM book  WHERE REDUCTION!=0 order by  REDUCTION desc  ");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}



	function modifier_MAJ_category($cat,$id)
	{
		$pdo = Connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `book` SET `GNERE`=? WHERE ID=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($cat,$id));
	}



	function get_category ()
	{

		$c = Connexion::getConnexion();
		$array = array();

		
			$liste=$c->query("SELECT * FROM book_category group by CATEGORY  ORDER BY `CATEGORY` ASC");
					while ($row = $liste->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['CATEGORY']);
					}
					



				
			return $array;




	}

	function get_category_nbr ()
	{

		$c = Connexion::getConnexion();
		$array = array();

		
			$liste=$c->query("SELECT count(*) as nbr FROM book_category group by CATEGORY  ORDER BY `CATEGORY` ASC");
					while ($row = $liste->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['nbr']);
					}
					



				
			return $array;




	}



	function get_category_livre ($id)
	{
		
		$c = Connexion::getConnexion();
			$liste=$c->query("SELECT * FROM `book_category` WHERE ID_LIVRE = $id");
			return $liste;

	}

	function delete_category ($id)
	{


		 $pdo = Connexion:: getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM `book_category` WHERE ID_LIVRE=?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
	}

	function insert_category ($id,$category)
	{
		$pdo = Connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `book_category`(`ID_LIVRE`, `CATEGORY`) VALUES (?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($id,$category));

	}

	function get_last_livre ()
	{
				$c = Connexion::getConnexion();

				$donnes = $c->query("SELECT * FROM `book` ORDER BY `book`.`ID` DESC limit 1");
				$id = $donnes->fetch();
				return $id;

	}



	function afficher_book()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM book");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}

	function afficher_book_nom()
	{
		$c = Connexion::getConnexion();
		$array = array();

		
			$liste=$c->query("SELECT ID,IMAGE,NOM FROM book");
					while ($row = $liste->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['NOM']);
					}
					



				
			return $array;
		



	}
		

		function afficher_book_img()
	{
		$c = Connexion::getConnexion();
		$array = array();

		
			$liste=$c->query("SELECT ID,IMAGE,NOM FROM book");
					while ($row = $liste->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['IMAGE']);
					}
					



				
			return $array;
		
	}

	function afficher_book_id()
	{
		$c = Connexion::getConnexion();
		$array = array();

		
			$liste=$c->query("SELECT ID,IMAGE,NOM FROM book");
					while ($row = $liste->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['ID']);
					}
					



				
			return $array;
		
	}





	function ajouter_book($bk)
	{
		$c = Connexion::getConnexion();

		try {

			$req = $c->prepare("INSERT INTO `book`(`NOM`, `PRIX`, `GNERE`, `IMAGE`, `DATE`, `REDUCTION`, `AUTHOR`, `OVERVIEW`, `ORIGINALITE`, `HARDCOVER`, `LANGUAGE`, `ISBN`, `DIMENSION` ,`couleur`) VALUES (:nom,:prix,:genre,:image,:datee,:reduction,:author,:overview,:ori,:hard,:lang,:isbn,:dim,:couleur)");

			$req->bindvalue(':nom',$bk->getNom());
			$req->bindvalue(':prix',$bk->getPrix());
			$req->bindvalue(':genre',$bk->getGenre());
			$req->bindvalue(':image',$bk->getImage());
			$req->bindvalue(':datee',$bk->getDate());
			$req->bindvalue(':reduction',$bk->getReduction());
			$req->bindvalue(':author',$bk->getAuthor());

			$req->bindvalue(':overview',$bk->getOverview());
			$req->bindvalue(':ori',$bk->getOriginalite());
			$req->bindvalue(':hard',$bk->getHARDCOVER());
			$req->bindvalue(':lang',$bk->getLangue());
			$req->bindvalue(':isbn',$bk->getISBN());
			$req->bindvalue(':dim',$bk->getDimension());
			$req->bindvalue(':couleur',$bk->getCouleur());



			$req->execute();
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

	}


	function Update_Livre ($nom,$prix,$genre,$image,$date,$reduction,$auteur,$overview,$Originalite,$hardcover,$language,$ISBN,$dimension,$id)
	{
		$pdo = Connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `book` SET `NOM`=?,`prix`=?,`GNERE`=?,`IMAGE`=?,`DATE`=?,`REDUCTION`=?,`AUTHOR`=?,`OVERVIEW`=?,`ORIGINALITE`=?,`HARDCOVER`=?,`LANGUAGE`=?,`ISBN`=?,`DIMENSION`=? WHERE ID=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$prix,$genre,$image,$date,$reduction,$auteur,$overview,$Originalite,$hardcover,$language,$ISBN,$dimension,$id));
	}




	function delete_book($bk)
	{


		 $pdo = Connexion:: getConnexion();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM book  WHERE ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($bk));
	}




	function Maj_Rating()
	{
		$c = Connexion::getConnexion();


				$rating = $c->query("SELECT `ID_LIVRE`,avg(`rate`) AS rating FROM `rating` GROUP BY ID_LIVRE");
							while ($rating_value = $rating->fetch(PDO::FETCH_ASSOC)) :
								$add_rating = $c->prepare("UPDATE `book` SET `RATING`=? WHERE ID=?");
								$add_rating->execute(array($rating_value['rating'],$rating_value['ID_LIVRE']));
							endwhile;	
			
	}


	function Nbr_Livre ($product_cat,$test,$minPrice,$maxPrice,$search_barre)
	{
		$c = Connexion::getConnexion();

				$req = $c->query("SELECT count(*) as NbNews FROM book where NOM LIKE  '%$search_barre%' && GNERE LIKE '%".$product_cat."%' && RATING IN (".$test.") && CASE WHEN REDUCTION=0 THEN PRIX BETWEEN ".$minPrice." AND ".$maxPrice." ELSE REDUCTION BETWEEN ".$minPrice." AND ".$maxPrice." END ");
           		      	$rows = $req->fetch();
           		      	return $rows;


	}

	function Get_Livre_Recherche ($product_cat,$test,$minPrice,$maxPrice,$search_barre,$limit,$sort)
	{
		$c = Connexion::getConnexion();


           		      	$sql = "SELECT * FROM book where NOM LIKE  '%$search_barre%' && GNERE LIKE '%".$product_cat."%' && RATING IN (".$test.") && CASE WHEN REDUCTION=0 THEN PRIX BETWEEN ".$minPrice." AND ".$maxPrice." ELSE REDUCTION BETWEEN ".$minPrice." AND ".$maxPrice." END $sort $limit  ";
           		      		$bks = $c->query($sql);
           		      		return $bks;



	}


	function Sort_Livre ($orderby)
	{
						if ($orderby=="menu_order")
           		      		$sort = "order by rand()";
           		      	else if ($orderby=="price")
           		      		$sort = "ORDER BY CASE WHEN REDUCTION=0 THEN PRIX ELSE REDUCTION END ";
           		      	else if ($orderby=="PRIX")
           		      		$sort = "ORDER BY CASE WHEN REDUCTION=0 THEN PRIX ELSE REDUCTION END DESC ";
           		      	else
           		      		$sort = "ORDER BY ".$orderby." DESC";

           	return $sort;

	}




	function Get_Livre_idAuteur ($id_auteur)
	{

		$c = Connexion::getConnexion();

			
			$sql = "SELECT * FROM book where AUTHOR = ".$id_auteur."";
			$bks = $c->query($sql);
	

			return $bks;



	}

	function Afficher_sort()
	{

			$c = Connexion::getConnexion();

			
			$sql = "SELECT * FROM book ORDER BY DATE DESC";
			$bks = $c->query($sql);
	

			return $bks;

	}

	function Afficher_sort_id ()
	{
		$c = Connexion::getConnexion();

			
			$sql = "SELECT * FROM book ORDER BY ID DESC";
			$bks = $c->query($sql);
	

			return $bks;
	}

	function Get_Livre_id ($id_livre) 
	{

		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM book where ID = $id_livre");
			$donnees = $req1->fetch();

		return $donnees;
	}
function get_nbr_rating ($rat)
{

	$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT count(*) as nbr FROM `book` WHERE rating=$rat");
			$donnees = $req1->fetch();
			return $donnees['nbr'];

}






function afficher_book_quantite()
	{

		$c = Connexion::getConnexion();


		try {
			$liste=$c->query("SELECT * FROM `book` WHERE quantite=0");
			return $liste;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}
	}




	function changer_quantite ($id,$quan)
	{

			$pdo = Connexion:: getConnexion();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `book` SET `QUANTITE`=? WHERE ID=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($quan,$id));

	}



	function update_nbr_visist ($id)
	{


		

		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM `book` WHERE ID = $id");
			$donnes = $req1->fetch();

            $sql = "UPDATE `book` SET `NBR_VISIT`=? WHERE ID=?";
            $q = $c->prepare($sql);
            $q->execute(array(($donnes['NBR_VISIT']+1),$id));



	}

	function get_livre_nom_nbr_visit ()
	{


		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM `book` ORDER BY NBR_VISIT DESC LIMIT 5");
			$array = array();

			while ($row = $req1->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['NOM']);
					}
					



				
			return $array;

			
	}



	function get_livre_nbr_visit ()
	{


		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM `book` ORDER BY NBR_VISIT DESC LIMIT 5");
			$array = array();

			while ($row = $req1->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['NBR_VISIT']);
					}
					



				
			return $array;

			
	}

	function get_livre_vente_nbr_visit ()
	{


		$c = Connexion::getConnexion();

			$req1 = $c->query("SELECT * FROM `book` ORDER BY NBR_VISIT DESC LIMIT 5");
			$array = array();

			while ($row = $req1->fetch(PDO::FETCH_ASSOC))
					{
						array_push($array, $row['NBR_VENTE']);
					}
			return $array;
	}



    function MeilleurVentesDeLaSemaine()
    {
        $c=Connexion::getConnexion();
        $sql="SELECT * FROM vente where DATEDIFF( NOW(), DATE )>0 and DATEDIFF( NOW(), DATE )<7  GROUP by ID_LIVRE ORDER BY count(ID_LIVRE) DESC";
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