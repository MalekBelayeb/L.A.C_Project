<?php
include_once "C:/xampp/htdocs/AvenirCulturel/Config.php";


/**
* 
*/
class prixC
{


	
	function ajouterPrix($laivraison){
		$sql="INSERT INTO prix(region,prix) values ( :region,:prix)";
		//$sql="INSERT INTO `employe`(`cin`, `nom`, `prenon`, `nbHeurs`, `tarifHeur`) VALUES (:c,:nom,:prenon,:nbHeurs,:tarifHeur)";
		$db = Connexion::getConnexion();
		try{
        $req=$db->prepare($sql);
       
		
       
        $region=$laivraison->getregion();
        $prix=$laivraison->getprix();
        





		
		$req->bindValue(':region',$region);
		$req->bindValue(':prix',$prix);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		function afficherprix(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From prix ";
		$db = Connexion::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function supprimerprix($region){
		$sql="DELETE FROM prix where region= :region";
		$db = Connexion::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':region',$region);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierprix($employe,$region){
			$sql="UPDATE prix  SET  region=:region,prix=:prix  WHERE region=:region";
		//$sql="INSERT INTO employe (cin,nom,prenon,nbHeurs,tarifHeur) values (:cin, :nom,:prenom,:nbH,:tarifH)";
		
		$db = Connexion::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $region=$employe->getregion();
        $prix=$employe->getprix();
        

		$datas = array(':region'=>$region,':prix'=>$prix);
		
		$req->bindValue(':region',$region);
		$req->bindValue(':prix',$prix);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function recupererprix($region){
		
		$sql="SELECT * FROM prix WHERE `region`='".$region."'";
		$db = Connexion::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	










}





?>