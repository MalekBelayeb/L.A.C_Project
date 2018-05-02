<?php 
/**
* 
*/
class stopic
{
    private $id;
	private $nom;
	private $id_categorie;
	private $Date;
	
	

	function __construct($id, $nom ,$id_categorie,$Date )
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->id_categorie=$id_categorie;
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
	function getid_categorie()
	{
          return $this->id_categorie;
	}
	function setid_categorie($id_categorie)
	{
      $this->id_categorie=$id_categorie;
	}
	function getDate()
	{
          return $this->Date;
	}
	function setDate($Date)
	{
      $this->Date=$Date;
	}


	
}


 ?>