<?php 
/**
* 
*/
class Suivi 
{
    private $id;
	private $id_user;
	private $id_topic;
	

	function __construct($id, $id_user , $id_topic )
	{
		$this->id=$id;
		$this->id_user=$id_user;
		$this->id_topic=$id_topic;
		
	}


	function getid()
	{
          return $this->id;
	}
	function setid($id)
	{
      $this->id=$id;
	}
	function getid_user()
	{
          return $this->id_user;
	}
	function setid_user($id_user)
	{
      $this->id_user=$id_user;
	}

	function getid_topic()
	{
          return $this->id_topic;
	}
	function setid_topic($id_topic)
	{
      $this->id_topic=$id_topic;
	}
	
}


 ?>