<?php


/**
* 
*/
class laivraisonposte
{
private $code_Livraison_p;
	private $nom;
	private $prenom;
	private $code_postale;
	private $ville;
	private $mail;
	private $num_tel;
	private $code_livre;
	private $date_laivraison_p;


	
	function __construct($nom,$prenom,$code_postale,$ville,$mail,$num_tel, $code_livre,$date_laivraison_p)
	{
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->code_postale=$code_postale;
		$this->ville=$ville;
		$this->mail=$mail;
		$this->num_tel=$num_tel;
		$this->code_livre=$code_livre;
		$this->date_laivraison_p=$date_laivraison_p;
		
	}

	function getcode_Livraison_p(){
		return $this->code_Livraison_p;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getcode_postale(){
		return $this->code_postale;
	}
	

	function getville(){
		return $this->ville;
	}
	function getmail(){
		return $this->mail;
	}
	function getnum_tel(){
		return $this->num_tel;
	}
	function getcode_livre(){
		return $this->code_livre;
	}
	function getdate_laivraison_p(){
		return $this->date_laivraison_p;
	}











	function setcode_Livraison_p($code_Livraison_p){
		$this->code_Livraison_p=$code_Livraison_p;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setcode_postale($code_postale){
		$this->code_postale=$code_postale;
	}
	
	function setville($ville){
		$this->ville=$ville;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setnum_tel($num_tel){
		$this->num_tel=$num_tel;
	}
	function setcode_livre($code_livre){
		$this->code_livre=$code_livre;
	}

	function setdate_laivraison_d($date_laivraison_p){
		$this->date_laivraison_p=$date_laivraison_p;
	}
	


  



}

	





?>