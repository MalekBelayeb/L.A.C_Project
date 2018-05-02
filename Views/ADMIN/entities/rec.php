<?php 
/**
* 
*/
class rec
{
    private $notif;
	
	

	function __construct($notif )
	{
		$this->notif=$notif;
	
		
		
	}


	function getnotif()
	{
          return $this->notif;
	}
	function setnotif($notif)
	{
      $this->notif=$notif;
	}
	


	
}


 ?>