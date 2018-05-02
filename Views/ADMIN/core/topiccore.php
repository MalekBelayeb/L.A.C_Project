<?php

include_once "config.php";

$db=Config::getConnexion();
$categories = $db->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $db->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');
$type = $db->query('SELECT * FROM reclamation ORDER BY date  DESC');



class Topiccore
{
	
	public function afficher_rec() 
   		{
   			$c = config::getconnexion();
    		$sql = 'SELECT * FROM f_categories';
    		return $c->query($sql);
    	}

    	function recherche1($id){
		$sql="SELECT * from reclamation WHERE id Like '$id%'";
		$db = config::getConnexion();
		
		$liste=$db->query($sql);
		return $liste;
		

	
}
 function afficher_rec1()
 {
 	$db = config::getConnexion();
 	$sql = 'SELECT * FROM reclamation';
 	return $db->query($sql);
 }

}








  ?>