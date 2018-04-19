<?php
class DeconnexionCore
{
   static function Deconnexion()
    {
        session_start();
        session_destroy();
        header("Location: http://localhost/AvenirCulturel/Views/index.php");
    }
}
DeconnexionCore::Deconnexion();

?>