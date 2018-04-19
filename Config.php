<?php
class Connexion
{
    public static $connexion;
    static public function getConnexion()
    {
        try
        {
            if(!isset(self::$connexion))
            {
     self::$connexion=new PDO("mysql:host=localhost;dbname=MALEK;charset=utf8",'root','');
     self::$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
        }
        catch (PDOException $e)
        {
            die( "Echec de connexion".$e->getMessage());
        }
        return self::$connexion;
    }
}
//Connexion::getConnexion();
?>
