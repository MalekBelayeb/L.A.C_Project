<?php








class Book
{
		private $id;
		private $nom;
		private $prix;
		private $genre;
		private $author;
		private $image;
		private $date;
		private $reduction;
		
		private $Overview;
		private $Originalite;
		private $HARDCOVER;
		private $langue;
		private $ISBN;
		private $Dimension;
		private $couleur;



               
       
       
      


		function __construct($nom,$prix,$genre,$author,$image,$date,$reduction,$Overview,$Originalite,$HARDCOVER,$langue,$ISBN,$Dimension,$couleur)
	{
		$this->nom=$nom;
		$this->prix=$prix;
		$this->genre=$genre;
		$this->author=$author;
		$this->image=$image;
		$this->date=$date;
		$this->reduction=$reduction;
		$this->Overview=$Overview;
		$this->Originalite=$Originalite;
		$this->HARDCOVER=$HARDCOVER;
		$this->langue=$langue;
		$this->ISBN=$ISBN;
		$this->Dimension=$Dimension;
		$this->couleur=$couleur;

	}





	function afficher()
	{
		echo $this->id." ".$this->nom." ".$this->prix." ".$this->genre." ".$this->author." ".$this->image;
	}



	function getId(){return $this->id;}
	function getNom(){return $this->nom;}
	function getPrix(){return $this->prix;}
	function getGenre(){return $this->genre;}
	function getAuthor(){return $this->author;}
	function getImage(){return $this->image;}
	function getDate(){return $this->date;}
	function getReduction(){return $this->reduction;}

	function getOverview(){return $this->Overview;}
	function getOriginalite(){return $this->Originalite;}
	function getHARDCOVER(){return $this->HARDCOVER;}
	function getLangue(){return $this->langue;}
	function getISBN(){return $this->ISBN;}
	function getDimension(){return $this->Dimension;}
	function getCouleur(){return $this->couleur;}

}















?>