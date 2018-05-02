<?php 
/**
* 
*/
class contenir
{
    private $id;
	private $nom;
	private $id_souscategorie;
	private $Date;
	
	

	function __construct($id, $nom ,$id_souscategorie,$Date )
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->id_souscategorie=$id_souscategorie;
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
	function getid_souscategorie()
	{
          return $this->id_souscategorie;
	}
	function setid_categorie($id_souscategorie)
	{
      $this->id_souscategorie=$id_souscategorie;
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