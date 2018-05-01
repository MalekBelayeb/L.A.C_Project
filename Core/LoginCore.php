<?php
session_start();
include_once 'C:/wamp64/www/AvenirCulturel/Config.php';
include 'C:/wamp64/www/AvenirCulturel/Entity/Login.php';

class LoginCore extends Login
{
    function __construct()
    {
        Connexion::getConnexion();
    }
    public function trueLogin()
{
    $sql=Connexion::getConnexion()->prepare('select LOGIN from compte');
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        if (($result['LOGIN']==$this->input_login))
        {
            return true;
        }
    }
}
    public function trueMDP()
    {
        $sql=Connexion::getConnexion()->prepare("select MDP from compte where LOGIN='$this->input_login'");
        $sql->execute();
        while($result=$sql->fetch(PDO::FETCH_ASSOC))
        {
            if (($result['MDP']==$this->input_mdp))
            {
                return true;
            }
        }
    }


    public function success_login ()
    {
        if($this->trueLogin() AND $this->trueMDP()) {
            header('Location: http://localhost/AvenirCulturel/Views/index.php?id='.$_POST['login_user']);
            return true;
        }
        else
        {
            header('Location: http://localhost/AvenirCulturel/Views/index.php?Error=CompteIntrouvable');
            return false;
        }
    }
}

$reg=new LoginCore();

$_SESSION['Error_login']=0;

if(isset($_POST['login_user']) AND isset($_POST['pass_user']))
{


      $db = Connexion::getConnexion();
      
      $username = $_POST['login_user'];
     $password = $_POST['pass_user'];


      $sqle="SELECT * from compte where LOGIN='$username'";
        
        try{
        $liste=$db->query($sqle);
        
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

         foreach($liste as $row){
        $id=$row['LOGIN'];
        $EMAIL=$row['EMAIL'];
        $password=$row['password'];
        $NOM=$row['NOM'];
        $PRENOM=$row['PRENOM'];
        $DATE_NAISS=$row['DATE_NAISS'];
        $ADRESSE=$row['ADRESSE'];
        $TYPE=$row['TYPE'];
        $PT_FIDEL=$row['PT_FIDEL'];
        $VENTE=$row['VENTE'];
        }


    $reg->setLogin($_POST['login_user']);
    $reg->setMDP($_POST['pass_user']);

    if ($reg->success_login()) {
        $_SESSION['id'] = $_POST['login_user'];
        $_SESSION['pass'] = $_POST['pass_user'];
         $_SESSION['NOM'] =$NOM;
         $_SESSION['PRENOM'] = $PRENOM;
         $_SESSION['EMAIL'] = $EMAIL;   
                                }
                                else
                                {
                                    $_SESSION['Error_login']=1;
                                }



}

?>