<?php

include_once "../config.php";
//include_once "../views/forum.php";
$db=Config::getConnexion();
$categories = $db->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $db->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');
$subcatt = $db->prepare('SELECT * FROM f_souscategories  ORDER BY nom');


class Topiccore
{
	
	

function ajouterTopic($t)
		{
			$sql="INSERT INTO `f_categories`(`nom`) VALUES 
			(:n) ";


			$db=Config::getConnexion();

			try
				{

					$req=$db->prepare($sql);

		
       


					//$req->bindValue(":i",$t->getid());
					$req->bindValue(":n",$t->getnom());
					
					

					$req->execute();

				}catch(Exception $t)
					{
						die ('Erreur : '.$t->getMessage());
					}


		}


function modifierTopic($topic,$id){
		$sql="UPDATE f_categories SET id=:idd, nom=:nom WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$topic->getid();
        $nom=$topic->getnom();
        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $t){
            echo " Erreur ! ".$t->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererTopic($id){
		$sql="SELECT * from f_categories where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}


	function supprimerTopic($id){
		$sql="DELETE FROM f_categories where id= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		//$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}

	function ajoutersTopic($t)
		{
			$sql="INSERT INTO `f_souscategories`(`id_categorie`,`nom`) VALUES 
			(:idc,:n) ";


			$db=Config::getConnexion();

			try
				{

					$req=$db->prepare($sql);

					$req->bindValue(":idc",$t->getid_categorie());
					$req->bindValue(":n",$t->getnom());
					

					$req->execute();

				}catch(Exception $t)
					{
						die ('Erreur : '.$t->getMessage());
					}


		}


   function recuperersTopic($nom){
		$sql="SELECT * from f_categories where nom='$nom'";
		$db = config::getConnexion();
	 
		$liste=$db->query($sql);
		return $liste;
	
	}



  function modifiersTopic($stopic,$id){
		$sql="UPDATE f_souscategories SET id=:idd, nom=:nom WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$stopic->getid();
        $nom=$stopic->getnom();
        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		
		
		
            $v=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $t){
            echo " Erreur ! ".$t->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperersTopics($id){
		$sql="SELECT * from f_souscategories where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}

	function recuperer($id){
		$sql="SELECT * from f_souscategories where id_categorie='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}

	function supprimersTopic($id){
		$sql="DELETE FROM f_souscategories where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}
	function recherche($nom){
		$sql="SELECT * from f_categories WHERE nom LIKE'%$nom%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherche2($id){
		$sql="SELECT * from f_categories WHERE id like '%$id%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherDate()
	{
		$sql="SElECT * From f_categories";
		$db = config::getConnexion();
		
		$liste=$db->query($sql);
		return $liste;
	
       	
		
	}

	function count($id)
	{
		$serv="localhost";
		$use="root";
		$pass="";
		$dbname="malek";
		$con=mysqli_connect($serv,$use,$pass,$dbname);
		$sql="SELECT COUNT(id) AS total FROM `f_souscategories` WHERE id_categorie= '$id'";
		//$sql="SELECT COUNT(id) AS total FROM `f_souscategories` WHERE id_categorie=:id";
   		//$db = config::getConnexion();
   		 
   		$result=mysqli_query($con,$sql);
   		$values=mysqli_fetch_assoc($result);
   		$num=$values['total'];
   		echo $num;

	}
	function recherche1($id){
		$sql="SELECT * from f_souscategories WHERE id Like '%$id%'";
		$db = config::getConnexion();
		
		$liste=$db->query($sql);
		return $liste;
		

	
}
 function afficher_rec()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM reclamation';
 	return $db->query($sql);
 }

 		function today()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM `f_souscategories` WHERE DATE(Date)=Date(now()) ';

 	return $db->query($sql);
 }
 	function todayC()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM `f_categories` WHERE DATE(Date)=Date(now()) ';

 	return $db->query($sql);
 }
 function todaycon()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM `contenir` WHERE DATE(Date)=Date(now()) ';

 	return $db->query($sql);
 }







}





  ?>