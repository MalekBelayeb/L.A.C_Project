<?phpinclude "../../../Entity/Compte.php";include '../../../Config.php';if(session_status()==PHP_SESSION_NONE){    session_start();}class CompteConfig extends Compte{    function getEMAIL($id)    {        $sql=Connexion::getConnexion()->prepare("select EMAIL from compte WHERE LOGIN='$id'");        $sql->execute();        while($result=$sql->fetch(PDO::FETCH_ASSOC))        {            return $result['EMAIL'];        }    }    function getPASSWORD($id)    {        $sql=Connexion::getConnexion()->prepare("select MDP from compte WHERE LOGIN='$id'");        $sql->execute();        while($result=$sql->fetch(PDO::FETCH_ASSOC))        {            return $result['MDP'];        }    }    function mettreAjour()    {        $requete=Connexion::getConnexion()->prepare("UPDATE compte SET LOGIN=:ID_C,MDP=:MDP,EMAIL=:MAIL WHERE LOGIN=:ID_C");        $requete->bindValue(':ID_C',$this->username,PDO::PARAM_STR);        $requete->bindValue(':MDP',$this->password,PDO::PARAM_STR);        $requete->bindValue(':MAIL',$this->email,PDO::PARAM_STR);        if($requete->execute())        {            return true;        }    }    function mettreAjourMotDepasse()    {        $requete=Connexion::getConnexion()->prepare("UPDATE compte SET MDP=:MDP WHERE LOGIN=:ID_C");        $requete->bindValue(':ID_C',$this->username,PDO::PARAM_STR);        $requete->bindValue(':MDP',$this->password,PDO::PARAM_STR);        if($requete->execute())        {            return true;        }    }    function VerifCle($cle)    {        $c=Connexion::getConnexion();        $sql="select * from token WHERE token='$cle' ";        try{            $liste=$c->query($sql);            if( $liste->rowCount()!=0)            {                return true;            }        }catch (PDOException $e)        {            die( "Echec de connexion".$e->getMessage());        }    }       function SupprimerCle($cle)       {           $requete=Connexion::getConnexion()->prepare("DELETE FROM token WHERE token= '$cle' ");           if($requete->execute())           {               return true;           }       }}$param=new CompteConfig();?>