<?php 
/**
* 
*/
class topic
{
    private $id;
	private $nom;
	private $Date;
	
	
	

	function __construct($id, $nom,$Date)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->Date=$Date;
		
		
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
	function getDate()
	{
          return $this->Date;
	}
	function setnomDate($Date)
	{
      $this->Date=$Date;
	}
	


	
}


 ?>