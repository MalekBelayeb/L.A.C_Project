<?php








class Auteur
{
		private $id;
		private $nom;
		private $image;
		private $text_auteur;
		private $PUBLISHER;
		
		function __construct($nom,$image,$text_auteur,$PUBLISHER)
	{
		$this->nom=$nom;
		$this->image=$image;
		$this->text_auteur=$text_auteur;
		$this->PUBLISHER=$PUBLISHER;
	}




	function afficher()
	{
		echo $this->id." ".$this->nom." ".$this->image;
	}



	function getId(){return $this->id;}
	function getNom(){return $this->nom;}
	function getImage(){return $this->image;}
	function getText_auteur(){return $this->text_auteur;}
	function getPUBLISHER(){return $this->PUBLISHER;}

}















?>