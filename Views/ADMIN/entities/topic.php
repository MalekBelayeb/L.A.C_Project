<?php 
/**
* 
*/
class topic
{
    private $id;
	private $nom;
	
	

	function __construct($id, $nom )
	{
		$this->id=$id;
		$this->nom=$nom;
		
		
	}


	function getid()
	{
          return $this->id;
	}
	function setid($id)
	{
      $this->id=$id;
	}
	function getnom()
	{
          return $this->nom;
	}
	function setnom($nom)
	{
      $this->nom=$nom;
	}


	
}


 ?>