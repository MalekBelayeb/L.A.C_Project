<?php
if(session_status()==PHP_SESSION_NONE)
{session_start();}
include_once '../Config.php';
include '../Entity/Compte.php';
class CompteCore extends Compte
{
    function __construct()
    {
        Connexion::getConnexion();
    }

    public function verif_username()
    {
        $sql=Connexion::getConnexion()->prepare('select LOGIN from compte');
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            if (($result['LOGIN']==$this->username))
            {
                return true;
            }
        }
    }
    function getUsername($code)
    {
        $sql=Connexion::getConnexion()->prepare("select ID_COMPTE from codeverification WHERE CODE=".$code);
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
                return $result['ID_COMPTE'];
        }
    }
    function getLOGIN($id)
    {
        $sql=Connexion::getConnexion()->prepare("select ID_COMPTE from codeverification WHERE CODE=".$id);
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            return $result['ID_COMPTE'];
        }
    }
    function getEMAIL($id)
    {
        $sql=Connexion::getConnexion()->prepare("select EMAIL from codeverification WHERE CODE=".$id);
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            return $result['EMAIL'];
        }
    }
    function afficherCompte()
    {
        $c=Connexion::getConnexion();
        $sql="select * from compte ";
        try
        {
            $liste=$c->query($sql);
            return $liste;
        } catch (PDOException $e)
        {
            die( "Echec de connexion".$e->getMessage());
        }
    }

    function getPASSWORD($id)
    {
        $sql=Connexion::getConnexion()->prepare("select MDP from codeverification WHERE CODE=".$id);
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            return $result['MDP'];
        }
    }
    function ajouterTEMP()
    {
        $requete=Connexion::getConnexion()->prepare("INSERT INTO codeverification(ID_COMPTE,MDP,EMAIL,CODE) VALUES(:COMPTE,:MDP,:MAIL,:CODE)");
        $requete->bindValue(':COMPTE',$this->username,PDO::PARAM_STR);
        $requete->bindValue(':MAIL',$this->email,PDO::PARAM_STR);
        $requete->bindValue(':MDP',$this->password,PDO::PARAM_STR);
        $requete->bindValue(':CODE',$this->codeVerif,PDO::PARAM_STR);
        if($requete->execute())
        {

        }
    }

    public function ajouter_compte()
    {
        $requete=Connexion::getConnexion()->prepare("INSERT INTO compte(LOGIN,EMAIL,MDP) VALUES(:LOGIN,:EMAIL,:MDP)");
        $requete->bindValue(':LOGIN',$this->username,PDO::PARAM_STR);
        $requete->bindValue(':EMAIL',$this->email,PDO::PARAM_STR);
        $requete->bindValue(':MDP',$this->password,PDO::PARAM_STR);
        if($requete->execute())
        {
            header("Location: http://localhost/AvenirCulturel/Views/index.php?Inscription=".$this->username);
        }
    }
function generateurDeCode()
{
    $r1=rand(0,1000);
    $r2=rand(0,1000);
    $r3=rand(0,1000);
    $r4=rand(0,1000);
    $r5=$r1+$r2+$r3+$r4;
    return $r5;
}
function envoiMail()
{
    $Destinataire='malek.belayeb@esprit.tn';
    $sujet='Confirmation par mail de vote compte';
    $Code=$this->codeVerif;
    $message='http://localhost/AvenirCulturel/Core/CompteCore.php?Code='.$Code;
    $entete='From Librairie Avenir Culturel';
    if(mail($Destinataire,$sujet,$message,$entete)==true)
    {
    $this->ajouterTEMP();
    //header("Location: http://localhost/AvenirCulturel/Views/index.php?Mail=true");
    }
}

function VerifCompte($code)
{
    $sql=Connexion::getConnexion()->prepare("select CODE from codeverification ");
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        if (($result['CODE']==$code))
        {
            return true;
        }
    }
}
    function supprimerCompte()
    {
        $requete=Connexion::getConnexion()->prepare("DELETE FROM compte WHERE LOGIN=:LOGIN");
        $requete->bindValue(':LOGIN',$this->username,PDO::PARAM_STR);

        if($requete->execute())
        {
            header("Location: http://localhost/AvenirCulturel/Views/index.php");
        }
    }
    function supprimerEtrangere($table,$columnId)
    {
        $requete=Connexion::getConnexion()->prepare("DELETE FROM $table WHERE $columnId=:LOGIN");
        $requete->bindValue(':LOGIN',$this->username,PDO::PARAM_STR);

        if($requete->execute())
        {
        }
    }
}
$inscri = new CompteCore();

if(isset($_POST['register_user']) AND isset($_POST['mot_de_passe']) AND isset($_POST['register_email']) )
{
    $inscri->setUsername($_POST['register_user']);
    $inscri->setPassword($_POST['mot_de_passe']);
    $inscri->setEmail($_POST['register_email']);

    if($inscri->verif_username())
    {
     $_SESSION['CompteExiste']=TRUE;
    }
    else{
            $inscri->setCodeVerif($inscri->generateurDeCode());
            $inscri->envoiMail();
    }
}

if(isset($_GET['Code']) )
{
    echo 'code';
    $inscri->setUsername($inscri->getLOGIN($_GET['Code']));
    $inscri->setPassword($inscri->getPASSWORD($_GET['Code']));
    $inscri->setEmail($inscri->getEMAIL($_GET['Code']));
    if($inscri->VerifCompte($_GET['Code']))
    {
        echo 'code true';
        $inscri->ajouter_compte();
    }
}


if(  isset($_GET['supprimer']) and isset($_SESSION['id']))
{
echo "ssss";
    $inscri->setUsername($_SESSION['id']);
    $inscri->supprimerEtrangere("abonnement","ID_COMPTE");
    $inscri->supprimerEtrangere("vente","ID_COMPTE");
    $inscri->supprimerCompte();
    include 'DeconnexionCore.php';
}
?>