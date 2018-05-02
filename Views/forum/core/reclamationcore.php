<?php

include_once "config.php";
//include_once "../views/forum.php";
$db=Config::getConnexion();



class Reclamationcore
{
	
	

function ajouterrec($r)
		{
			$sql="INSERT INTO `reclamation`(`type`,`rec`,`img`) VALUES 
			(:t,:re,:im) ";


			$db=Config::getConnexion();

			try
				{

					$req=$db->prepare($sql);

		
       


					$req->bindValue(":t",$r->gettype());
					$req->bindValue(":re",$r->getrec());
					$req->bindValue(":im",$r->getimg());
					
					

					$req->execute();

				}catch(Exception $r)
					{
						die ('Erreur : '.$r->getMessage());
					}


		}}
