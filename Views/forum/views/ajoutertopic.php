<?php


include_once "../core/topiccore.php";
include_once "../entities/stopic.php";
include_once "../entities/topic.php";

 if(isset($_POST['ajouter']))
  {
      $id = $_POST["id"];
    
  	 $nom = $_POST["nom"];
     $Date = $_POST["Date"];
    
     
     
  

  	if( isset($_POST['nom']) )
  	{
  		$core = new Topiccore();
      if(strlen($nom)>3){
  		$top = new topic($id,$nom,$Date);
  		$core->ajouterTopic($top);

    }
    else
    {

       echo '<script type="text/javascript">alert("le nom doit contenir au moins trois lettres");</script>';
    }

  		/*header("Location:afficheremploye.php");*/
  	}else
  	{
  		echo "verifier champ";
  	}

     
header("Location:forum.php");
      

   }
   if(isset($_POST['ajouterr']))
  {

     $nom = $_POST["nomm"];
    
     
     
     


    if(isset($_POST['nomm'])  and isset($_POST['forum']))



    {
      $coree = new Topiccore();
     $liste=$coree->recuperersTopic($_POST['forum']);

      foreach($liste as $row){
        $coree1 = new Topiccore();
    $id_categorie=$row['id'];
    echo $id_categorie;

    if(strlen($nom)>3){
     $topp = new stopic($id,$nom,$id_categorie);
      $coree1->ajoutersTopic($topp);
    }
    else
    {
       echo '<script type="text/javascript">alert("le nom doit contenir au moins trois lettres");</script>';
    }

     }
  
   

      
     
     
   }
    else
    {
      echo "verifier champ";
    }

     
header("Location:forum.php");
      

   }
?>