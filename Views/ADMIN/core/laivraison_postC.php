<?php
include "config.php";


/**
* 
*/
class laivraison_posteC
{
	
	function ajouterLaivraison_post($laivraison){
		$sql="INSERT INTO laivraison_p(nom,prenom,code_postale,ville,mail,num_tel,code_livre,date_laivraison_p) values ( :nom,:prenom,:code_postale,:ville,:mail,:num_tel,:code_livre,:date_laivraison_p)";
		//$sql="INSERT INTO `employe`(`cin`, `nom`, `prenon`, `nbHeurs`, `tarifHeur`) VALUES (:c,:nom,:prenon,:nbHeurs,:tarifHeur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       
		
       
        $nom=$laivraison->getnom();
        $prenom=$laivraison->getprenom();
        $code_postale=$laivraison->getcode_postale();
        

        $ville=$laivraison->getville();
        $mail=$laivraison->getmail();
        $num_tel=$laivraison->getnum_tel();
        $code_livre=$laivraison->getcode_livre();
         $date_laivraison_p=$laivraison->getdate_laivraison_p();
       





		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':code_postale',$code_postale);
		

		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':code_livre',$code_livre);

		$req->bindValue(':date_laivraison_p',$date_laivraison_p);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		function afficherLaivraison_p(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From laivraison_p ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function supprimerLaivraison($code_Livraison_p){
		$sql="DELETE FROM laivraison_p where code_Livraison_p= :code_Livraison_p";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_Livraison_p',$code_Livraison_p);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierLaivraison($laivraison,$code_Livraison_p){
		$sql="UPDATE laivraison_p SET code_Livraison_p=:code_Livraison_pn, nom=:nom,prenom=:prenom,code_postale=:code_postale,ville=:ville,mail=:mail,num_tel=:num_tel,code_livre=:code_livre,date_laivraison_p=:date_laivraison_p WHERE code_Livraison_p=:code_Livraison_p";
		//$sql="INSERT INTO employe (cin,nom,prenon,nbHeurs,tarifHeur) values (:cin, :nom,:prenom,:nbH,:tarifH)";
		//$sql="INSERT INTO laivraison (code_Livraison_p,nom,prenom,code_postale,adresse_ligne_2,ville,mail,num_tel,code_livre) values (:code_Livraison_p, :nom,:prenom,:code_postale,:adresse_ligne_2,:ville,:mail,:num_tel,:code_livre)";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		

        $code_Livraison_pn=$laivraison->getcode_Livraison_p();
        $nom=$laivraison->getnom();
        $prenom=$laivraison->getprenom();
        $code_postale=$laivraison->getcode_postale();
        

        $ville=$laivraison->getville();
        $mail=$laivraison->getmail();
        $num_tel=$laivraison->getnum_tel();
        $code_livre=$laivraison->getcode_livre();

         $date_laivraison_p=$laivraison->getdate_laivraison_p();
        





		$datas = array(':code_Livraison_pn'=>$code_Livraison_pn, ':code_Livraison_p'=>$code_Livraison_p, ':nom'=>$nom,':prenom'=>$prenom,':code_postale'=>$code_postale,':ville'=>$ville,':mail'=>$mail,':num_tel'=>$num_tel,':code_livre'=>$code_livre,':date_laivraison_p'=>$date_laivraison_p);

		$req->bindValue(':code_Livraison_pn',$code_Livraison_pn);
		$req->bindValue(':code_Livraison_p',$code_Livraison_p);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':code_postale',$code_postale);
		
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':code_livre',$code_livre);

		$req->bindValue(':date_laivraison_p',$date_laivraison_p);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function recupererLaivraison($code_Livraison_p){
		$sql="SELECT * from laivraison_p where code_Livraison_p=$code_Livraison_p";
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