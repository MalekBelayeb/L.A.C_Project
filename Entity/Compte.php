<?php
class Compte {

    protected $username;
    protected  $email;
    protected  $password;
    protected $codeVerif;

    public function __construc()
    {

    }

    /**
     * @return mixed
     */
    public function getCodeVerif()
    {
        return $this->codeVerif;
    }
    public function getmdp()
    {
        return $this->password;
    }
    /**
     * @param mixed $codeVerif
     */
    public function setCodeVerif($codeVerif)
    {
        $this->codeVerif = $codeVerif;
    }
public function getuser()
{
    return $this->username;
}

    public function setUsername($username)
    {
        $this->username=$username;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }

}

?>