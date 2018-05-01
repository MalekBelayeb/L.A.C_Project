<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 05/04/2018
 * Time: 09:31
 */
include_once "C:/wamp64/www/AvenirCulturel/Entity/Coupon.php";
include_once "C:/wamp64/www/AvenirCulturel/Config.php";
class CouponCore extends Coupon
{


    /**
     * CouponCore constructor.
     */
    public function __construct()
    {
    }


    public function AjouterCoupon($bk)
    {

        $c = connexion::getConnexion();

        try {

            $req = $c->prepare('INSERT INTO `coupon`( `ID`, `VALEUR`) VALUES (:id,:valeur)');

            $req->bindvalue(':id',$bk->getid());
            $req->bindvalue(':valeur',$bk->getvaleur());
            
            



            $req->execute();
            
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

    }

function affichercoupon()
{
        $c = connexion::getConnexion();


                                                                                $sql='SELECT * FROM `coupon`';
                                                        $bks = $c->query($sql);
return $bks;


}


/*


    public function ModifierCoupon($id,$valeur)
    {
        $pdo=Config::getConnexion();
        $sql='UPDATE `coupon` SET `VALEUR`=:valeur WHERE `ID`=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':valeur',$valeur);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
        return $stmt;
    }
*//*
    public function SupprimerCoupon($id)
    {
        $pdo=Config::getConnexion();
        $sql='DELETE FROM `coupon` WHERE ID=:id';
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $stmt->execute();
        }
    }
*/


    public function SupprimerCoupon($bk)
    {


         $pdo = connexion::getConnexion();

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$sql = "DELETE FROM coupn  WHERE id_ev = ?";
         $sql='DELETE FROM `coupon` WHERE ID= ?';

        $q = $pdo->prepare($sql);
        $q->execute(array($bk));
    }
/**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/
/**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/
/**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/

    public function verif($id)
    {
        $pdo=connexion::getConnexion();
        $sql="select * from coupon  where ID=:id";
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $row=$stmt->rowCount();
        }
        if($row==1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function getval($id)
    {
        $pdo= connexion::getConnexion();
        $sql="select VALEUR from coupon  where ID=:id";
        if($stmt=$pdo->prepare($sql))
        {
            $stmt->bindParam(':id',$id);
            $row=$stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_OBJ);
            return $row->VALEUR;
        }
    }

    /**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/
/**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/
/**-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------**/




}