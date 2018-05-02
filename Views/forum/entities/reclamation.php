<?php 
/**
* 
*/
class reclamation
{
    private $id;
	private $type;
	private $rec;
	private $img;
	
	
	

	function __construct($id, $type,$rec,$img)
	{
		$this->id=$id;
		$this->type=$type;
		$this->rec=$rec;
		$this->img=$img;
	}


	function getid()
	{
          return $this->id;
	}
	function setid($id)
	{
      $this->id=$id;
	}
	function gettype()
	{
          return $this->type;
	}
	function settype($type)
	{
      $this->type=$type;
	}
	function getrec()
	{
          return $this->rec;
	}
	function setrec($rec)
	{
      $this->rec=$rec;
	}
	function getimg()
	{
          return $this->img;
	}
	function setimg($img)
	{
      $this->img=$img;
	}
	


	
}


 ?>