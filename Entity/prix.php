<?php


/**
* 
*/
class prix
{

	private $region;
	private $prix;


	
	function __construct($region,$prix)
	{
		
		$this->region=$region;
		$this->prix=$prix;
	
	}

	function getregion(){
		return $this->region;
	}
	function getprix(){
		return $this->prix;
	}
	
	





	function setregion($region){
		$this->region=$region;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	


  





}

?>