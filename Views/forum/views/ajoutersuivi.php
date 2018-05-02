<?php


include_once "../core/suivicore.php";
include_once "../entities/suivi.php";

 if(isset($_POST['ajouter']))
  {


  	 $id = $_POST["id"];
     $id_user = $_POST["id_user"];
     $id_topic = $_POST["id_topic"];
     


  	if(isset($_POST['id']) and isset($_POST['id_user']) and isset($_POST['id_topic']) )
  	{
  		$core = new Suivicore();
  		$sui = new Suivi($id,$id_user,$id_topic);
  		$core->ajouterSuivi($sui);

  		/*header("Location:afficheremploye.php");*/
  	}else
  	{
  		echo "verifier champ";
  	}

     

      

   }
?>