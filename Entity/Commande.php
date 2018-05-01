<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 22/03/2018
 * Time: 01:03
 */

class Commande
{
    protected $id;
    protected $user;
    protected $totale;
    protected $mp;
    protected $etat;

    /**
     * Commande constructor.
     * @param $id
     * @param $user
     * @param $totale
     * @param $mp
     */
    public function __construct($id,$user, $totale, $mp,$etat)
    {
        $this->id=$id;
        $this->user = $user;
        $this->totale = $totale;
        $this->mp = $mp;
        $this->etat=$etat;
    }

    public function AjouterCommande()
    {
        $pdo=Connexion::getConnexion();
        $sql='INSERT INTO `commande`( `user`, `totale`, `MP`,`ETAT`) VALUES (:user,:totale,:mp,:etat)';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$this->user);
            $stmt->bindParam(':totale',$this->totale);
            $stmt->bindParam(':mp',$this->mp);
            $stmt->bindParam(':etat',$this->etat);
            $stmt->execute();
        }
    }

    public function lastid()
    {
        $pdo=Connexion::getConnexion();
        $totale=0;
        $sql='SELECT ID FROM `commande` WHERE (USER=:user AND totale=:totale)';
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(':user',$_SESSION['id']);
        $stmt->bindParam(':totale',$totale);
        $stmt->execute();
        $idc=$stmt->fetch();
        var_dump($idc);
        return $idc['ID'];
    }

    public function ModifierCommande()
    {
        $pdo=Connexion::getConnexion();
        $sql='UPDATE `commande` SET `user`=:user,`totale`=:totale,`MP`=:mp, `ETAT`=:etat WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':user',$this->user);
            $stmt->bindParam(':totale',$this->totale);
            $stmt->bindParam(':mp',$this->mp);
            $stmt->bindParam(':etat',$this->etat);
            $stmt->bindParam(':id',$this->id);
            $stmt->execute();
        }

    }


}