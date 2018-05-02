<?php

include_once "../config.php";

/**
* 
*/
class Suivicore
{
	
	/*function afficheremploye($e)
	{
		
		$cin=$e->getcin();
		$nom=$e->getnom();
		$prenom=$e->getprenom();
		$nbheures=$e->getnbheures();
		$tarifhoraire=$e->gettarifhoraire();

        echo "cin :".$cin. "</br>";
		echo "Nom :".$nom. "</br>";
		echo "preNom :".$prenom. "</br>";
		
	}
	

	function afficheremployes()
	{
		$c=Config::getConnexion();
       
		$sql="SELECT * FROM `employe`";
			try{
					$liste=$c->query($sql);
					return $liste;

			    }catch(Exception $e)
			    {
			    	die('Erreur : '.$e->getMessage());

			    }
	}*/

function ajouterSuivi($s)
		{
			$sql="INSERT INTO `f_suivis`(`id`, `id_user`, `id_topic`) VALUES 
			(:i,:idu,:idt) ";


			$db=Config::getConnexion();

			try
				{

					$req=$db->prepare($sql);

					$req->bindValue(":i",$s->getid());
					$req->bindValue(":idu",$s->getid_user());
					$req->bindValue(":idt",$s->getid_topic());
					

					$req->execute();

				}catch(Exception $s)
					{
						die ('Erreur : '.$s->getMessage());
					}


		}



}








  ?>