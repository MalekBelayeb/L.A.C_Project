<?php


class Evenement
{
		private $id_ev;
		private $nom_ev;
		private $invite_ev;
		private $date_ev;
		private $sujet_ev;
		private $sujet_res_ev;
		private $image_ev;
		private $image_ev1;
		private $image_ev2;
		private $image_ev3;

               
       
       
      


		function __construct($nom_ev,$invite_ev,$date_ev,$sujet_ev,$sujet_res_ev,$image_ev,$image_ev1,$image_ev2,$image_ev3)
	{
		$this->nom_ev=$nom_ev;
		$this->invite_ev=$invite_ev;
        $this->date_ev=$date_ev;
		$this->sujet_ev=$sujet_ev;
		$this->sujet_res_ev=$sujet_res_ev;
        $this->image_ev=$image_ev;
		$this->image_ev1=$image_ev1;
		$this->image_ev2=$image_ev2;
		$this->image_ev3=$image_ev3;
	}





	function afficher()
	{
		echo $this->id_ev." ".$this->invite_ev."".$this->nom_ev." ".$this->date_ev." ".$this->sujet_ev." ".$this->sujet_res_ev."  ".$this->image_ev." ".$this->image_ev1." ".$this->image_ev2." ".$this->image_ev3;

	}



	function getId_ev(){return $this->id_ev;}
	function getNom_ev(){return $this->nom_ev;}
	function getinvite_ev(){return $this->invite_ev;}
	function getdate_ev(){return $this->date_ev;}
	function getsujet_ev(){return $this->sujet_ev;}
	function getsujet_res_ev(){return $this->sujet_res_ev;}

	function getImage_ev(){return $this->image_ev;}
	function getImage_ev1(){return $this->image_ev1;}
	function getImage_ev2(){return $this->image_ev2;}
    function getImage_ev3(){return $this->image_ev3;}
	

	public function setId_ev($id_ev) { $this->id_ev=$id_ev; } 


}


?>