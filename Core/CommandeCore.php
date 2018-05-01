<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:58
 */


include '../entities/Commande.php';
class CommandeCore extends Commande
{


    /**
     * CommandeCore constructor.
     */
    public function __construct()
    {
    }

    public function AjouterCommandeC($c)
    {
        $pdo=Config::getConnexion();
        $sql='INSERT INTO `commande`( `user`, `totale`, `MP`) VALUES (:user,:totale,:mp)';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$c->user);
            $stmt->bindParam(':totale',$c->totale);
            $stmt->bindParam(':mp',$c->mp);
            $stmt->execute();
        }
    }

    public function SupprimerCommande($id)
    {
        $pdo=Config::getConnexion();
        $sql='DELETE FROM `commande` WHERE ID=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
    }

    public function ModifierCommandeC($c)
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `commande` SET `user`=:user,`totale`=:totale,`MP`=:mp WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$c->user);
            $stmt->bindParam(':totale',$c->totale);
            $stmt->bindParam(':mp',$c->mp);
            $stmt->bindParam(':id',$c->id);
            $stmt->execute();
        }

    }

    public function Valider($id)
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `commande` SET `ETAT`=:etat WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $etat=1;
            $stmt->bindParam(':etat',$etat);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
    }


}