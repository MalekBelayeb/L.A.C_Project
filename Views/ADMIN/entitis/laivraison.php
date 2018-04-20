<?php


/**
* 
*/
class laivraison
{

	private $code_Livraison;
	private $nom;
	private $prenom;
	private $adresse_ligne_1;
	private $adresse_ligne_2;
	private $ville;
	private $mail;
	private $num_tel;
	private $code_livre;
	private $date_laivraison;
	private $affectation;
	private $livreur;

	
	function __construct($nom,$prenom,$adresse_ligne_1,$adresse_ligne_2,$ville,$mail,$num_tel, $code_livre,$date_laivraison,$affectation,$livreur)
	{
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse_ligne_1=$adresse_ligne_1;
		$this->adresse_ligne_2=$adresse_ligne_2;
		$this->ville=$ville;
		$this->mail=$mail;
		$this->num_tel=$num_tel;
		$this->code_livre=$code_livre;
		$this->date_laivraison=$date_laivraison;
		$this->affectation=$affectation;
		$this->livreur=$livreur;
	}

	function getcode_Livraison(){
		return $this->code_Livraison;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getadresse_ligne_1(){
		return $this->adresse_ligne_1;
	}
	function getadresse_ligne_2(){
		return $this->adresse_ligne_2;
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
	function getdate_laivraison(){
		return $this->date_laivraison;
	}
	function getaffectation(){
		return $this->affectation;
	}
		function getlivreur(){
		return $this->livreur;
	}
	










	function setcode_Livraison($code_Livraison){
		$this->code_Livraison=$code_Livraison;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setadresse_ligne_1($adresse_ligne_1){
		$this->adresse_ligne_1=$adresse_ligne_1;
	}
	function setadresse_ligne_2($adresse_ligne_2){
		$this->adresse_ligne_2=$adresse_ligne_2;
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

	function setdate_laivraison($date_laivraison){
		$this->date_laivraison=$date_laivraison;
	}
	function setaffectation($affectation){
		$this->affectation=$affectation;
	}
	function setlivreur($livreur){
		$this->livreur=$livreur;
	}



  





}

?>