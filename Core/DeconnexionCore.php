<?php
class DeconnexionCore
{
   static function Deconnexion()
    {


        setcookie('user',"", time() - (86400 * 30), "/");
        session_start();
        session_destroy();



        header("Location: http://localhost/AvenirCulturel/Views/index.php");
    }
}
DeconnexionCore::Deconnexion();

?>