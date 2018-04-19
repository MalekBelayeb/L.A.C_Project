<?php
class Login{

    protected $input_login;
    protected $input_mdp;

    function __construct()
    {

    }

    public function setLogin($input_login)
    {
        return	$this->input_login=$input_login;
    }

    public function setMDP($input_mdp)
    {
        return $this->input_mdp=$input_mdp;
    }

}

?>