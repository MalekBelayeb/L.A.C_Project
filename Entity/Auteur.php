<?phpclass Auteur{protected $Mail;protected $Login;protected $Mdp;protected $Livre;protected $Path_img;    /**     * @return mixed     */    public function getMail()    {        return $this->Mail;    }    /**     * @param mixed $Mail     */    public function setMail($Mail)    {        $this->Mail = $Mail;    }    /**     * @return mixed     */    public function getLogin()    {        return $this->Login;    }    /**     * @param mixed $Login     */    public function setLogin($Login)    {        $this->Login = $Login;    }    /**     * @return mixed     */    public function getMdp()    {        return $this->Mdp;    }    /**     * @param mixed $Mdp     */    public function setMdp($Mdp)    {        $this->Mdp = $Mdp;    }    /**     * @return mixed     */    public function getLivre()    {        return $this->Livre;    }    /**     * @param mixed $Livre     */    public function setLivre($Livre)    {        $this->Livre = $Livre;    }    /**     * @return mixed     */    public function getPathImg()    {        return $this->Path_img;    }    /**     * @param mixed $Path_img     */    public function setPathImg($Path_img)    {        $this->Path_img = $Path_img;    }}