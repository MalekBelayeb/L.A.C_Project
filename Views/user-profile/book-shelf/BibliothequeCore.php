<?phpif(session_status()==PHP_SESSION_NONE){    session_start();}include '../../../Config.php';class BibliothequeCore{    protected $livre;    protected $compte;    protected $date;    protected $x;    function getX()    {        return $this->x;    }    function setX($v)    {        $this->x=$v;    }   public function getLivre()    {        return $this->livre;    }    public function getCompte()    {        return $this->compte;    }    public function setCompte($compte)    {        $this->compte = $compte;    }    public function setLivre($livre)    {        $this->livre = $livre;    }    public function getDate()    {        return $this->date;    }    public function setDate($date)    {        $this->date = $date;    }    public function getElement($elem,$livre)    {        $sql=Connexion::getConnexion()->prepare("select $elem from livre WHERE  ID='$livre'  ");        $sql->execute();        while($result=$sql->fetch(PDO::FETCH_ASSOC))        {            return  $result[$elem];        }    }    public function Existe(){    $c=Connexion::getConnexion();    $sql="select * from bibliotheque WHERE ID_LIVRE='$this->livre' and ID_COMPTE='$this->compte'";    try{        $liste=$c->query($sql);        if( $liste->rowCount()!=0)        {            return true;        }    }catch (PDOException $e)    {        die( "Echec de connexion".$e->getMessage());    }}public function ajouterLivre(){    $requete=Connexion::getConnexion()->prepare("INSERT INTO bibliotheque VALUES(:COMPTE,:LIVRE,:DTE)");    $requete->bindValue(':COMPTE',$this->compte,PDO::PARAM_STR);    $requete->bindValue(':LIVRE',$this->livre,PDO::PARAM_STR);    $requete->bindValue(':DTE',$this->date,PDO::PARAM_STR);    if($requete->execute())    {        header("Location: http://localhost/AvenirCulturel/Views/shop/Livres/index.php?Livre=" . $_GET['Livre']);    }}function afficher($l){    $c=Connexion::getConnexion();    $sql="select * from bibliotheque WHERE ID_COMPTE='$this->compte' ORDER BY DATE DESC LIMIT $l ";    try    {        $liste=$c->query($sql);        return $liste;    } catch (PDOException $e)    {        die( "Echec de connexion".$e->getMessage());    }}function supprimer(){    $requete=Connexion::getConnexion()->prepare("DELETE FROM bibliotheque WHERE ID_LIVRE=:LIVRE ");    $requete->bindValue(':LIVRE',$this->livre,PDO::PARAM_STR);    if($requete->execute())    {        header("Location: http://localhost/AvenirCulturel/Views/shop/Livres/index.php?Livre=" . $_GET['Livre']);    }}}$Bib=new BibliothequeCore();if(isset($_GET['Livre'])){    $Bib->setCompte($_SESSION['id']);    $Bib->setLivre($_GET['Livre']);    $Bib->setDate(date("Y/m/d"));    if(!$Bib->Existe())    {    $Bib->ajouterLivre();    }    else    {    $Bib->supprimer();    }}