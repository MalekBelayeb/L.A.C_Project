<?php
include "config.php";


/**
* 
*/
class laivraisonC
{

	


	
	function ajouterLaivraison($laivraison){
		$sql="INSERT INTO laivraison (nom,prenom,adresse_ligne_1,adresse_ligne_2,ville,mail,num_tel,code_livre,date_laivraison,affectation,livreur) values ( :nom,:prenom,:adresse_ligne_1,:adresse_ligne_2,:ville,:mail,:num_tel,:code_livre,:date_laivraison,:affectation,:livreur)";
		//$sql="INSERT INTO `employe`(`cin`, `nom`, `prenon`, `nbHeurs`, `tarifHeur`) VALUES (:c,:nom,:prenon,:nbHeurs,:tarifHeur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $nom=$laivraison->getnom();
        $prenom=$laivraison->getprenom();
        $adresse_ligne_1=$laivraison->getadresse_ligne_1();
        $adresse_ligne_2=$laivraison->getadresse_ligne_2();

        $ville=$laivraison->getville();
        $mail=$laivraison->getmail();
        $num_tel=$laivraison->getnum_tel();
        $code_livre=$laivraison->getcode_livre();
         $date_laivraison=$laivraison->getdate_laivraison();
          $affectation=$laivraison->getaffectation();
          $livreur=$laivraison->getlivreur();





		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse_ligne_1',$adresse_ligne_1);
		$req->bindValue(':adresse_ligne_2',$adresse_ligne_2);

		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':code_livre',$code_livre);

		$req->bindValue(':date_laivraison',$date_laivraison);
		$req->bindValue(':affectation',$affectation);
		$req->bindValue(':livreur',$livreur);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}










	function afficherLaivraison(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From laivraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function afficherLaivraisonforone($rre){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		//$sql="SElECT * From laivraison where prenom=$rre ";
		$sql="SELECT * from laivraison where nom='$rre'";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	


       



	}


	function supprimerLaivraison($code_Livraison){
		$sql="DELETE FROM laivraison where code_Livraison= :code_Livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_Livraison',$code_Livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierLaivraison($laivraison,$code_Livraison){
		$sql="UPDATE laivraison SET code_Livraison=:code_Livraisonn, nom=:nom,prenom=:prenom,adresse_ligne_1=:adresse_ligne_1,adresse_ligne_2=:adresse_ligne_2,ville=:ville,mail=:mail,num_tel=:num_tel,code_livre=:code_livre,date_laivraison=:date_laivraison,affectation=:affectation ,livreur=:livreur WHERE code_Livraison=:code_Livraison";
		//$sql="INSERT INTO employe (cin,nom,prenon,nbHeurs,tarifHeur) values (:cin, :nom,:prenom,:nbH,:tarifH)";
		//$sql="INSERT INTO laivraison (code_Livraison,nom,prenom,adresse_ligne_1,adresse_ligne_2,ville,mail,num_tel,code_livre) values (:code_Livraison, :nom,:prenom,:adresse_ligne_1,:adresse_ligne_2,:ville,:mail,:num_tel,:code_livre)";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		

        $code_Livraisonn=$laivraison->getcode_Livraison();
        $nom=$laivraison->getnom();
        $prenom=$laivraison->getprenom();
        $adresse_ligne_1=$laivraison->getadresse_ligne_1();
        $adresse_ligne_2=$laivraison->getadresse_ligne_2();

        $ville=$laivraison->getville();
        $mail=$laivraison->getmail();
        $num_tel=$laivraison->getnum_tel();
        $code_livre=$laivraison->getcode_livre();

        $date_laivraison=$laivraison->getdate_laivraison();
        $affectation=$laivraison->getaffectation();
        $livreur=$laivraison->getlivreur();
        





		$datas = array(':code_Livraisonn'=>$code_Livraisonn, ':code_Livraison'=>$code_Livraison, ':nom'=>$nom,':prenom'=>$prenom,':adresse_ligne_1'=>$adresse_ligne_1,':adresse_ligne_2'=>$adresse_ligne_2,':ville'=>$ville,':mail'=>$mail,':num_tel'=>$num_tel,':code_livre'=>$code_livre,':date_laivraison'=>$date_laivraison,':affectation'=>$affectation ,':livreur'=>$livreur);

		$req->bindValue(':code_Livraisonn',$code_Livraisonn);
		$req->bindValue(':code_Livraison',$code_Livraison);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse_ligne_1',$adresse_ligne_1);
		$req->bindValue(':adresse_ligne_2',$adresse_ligne_2);

		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':code_livre',$code_livre);

		$req->bindValue(':date_laivraison',$date_laivraison);
		$req->bindValue(':affectation',$affectation);
		$req->bindValue(':livreur',$livreur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}




	function recupererLaivraison($code_Livraison){
		$sql="SELECT * from laivraison where code_Livraison=$code_Livraison";
		$db = config::getConnexion();
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