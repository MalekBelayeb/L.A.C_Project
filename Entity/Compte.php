<?php
class Compte {

    protected $username;
    protected  $email;
    protected  $password;
    protected $codeVerif;
    protected $nom;
    protected $prenom;
    protected $tel;
    protected $adresse;
    protected $datenaiss;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * @param mixed $datenaiss
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }

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