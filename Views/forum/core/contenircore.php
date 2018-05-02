<?php

include_once "../config.php";
//include_once "../views/forum.php";
$db=Config::getConnexion();
$subcatt = $db->prepare('SELECT * FROM f_souscategories  ORDER BY nom');


class Contenircore
{
	
	

function ajouter($t)
		{
			$sql="INSERT INTO `contenir`(`nom`,`id_souscategorie`) VALUES 
			(:n,:idc) ";


			$db=Config::getConnexion();

			try
				{

					$req=$db->prepare($sql);
					$req->bindValue(":n",$t->getnom());
					$req->bindValue(":idc",$t->getid_souscategorie());
					
					

					$req->execute();

				}catch(Exception $t)
					{
						die ('Erreur : '.$t->getMessage());
					}


		}


function modifier($topic,$id){
		$sql="UPDATE contenir SET id=:idd, nom=:nom WHERE id=:id";
		
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
	function recuperer($id){
		$sql="SELECT * from contenir where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}
	function recuperers($nom){
		$sql="SELECT * from f_souscategories where nom='$nom'";
		$db = config::getConnexion();
	 
		$liste=$db->query($sql);
		return $liste;
	
	}
	function recupere($id){
		$sql="SELECT * from contenir where id_souscategorie='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }
	}


	function supprimer($id){
		$sql="DELETE FROM contenir where id= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		//$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $t){
            die('Erreur: '.$t->getMessage());
        }}


        function afficher()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM contenir';
 	return $db->query($sql);
 }
         function afficher1()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM f_souscategories';
 	return $db->query($sql);
 }
	
	} ?>