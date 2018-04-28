<?php
class Panier
{


    /**
     * Panier constructor.
     */
    public function __construct()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(!isset($_SESSION['panier']))
        {
            $_SESSION['panier']=array();
        }
    }

    public function update($quantite,$id)
    {
        $pdo = Connexion::getConnexion();
        $sql = "SELECT * FROM book where ID=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('id',$id);
        $product = $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_OBJ);
        if($product->QUANTITE>=$quantite)
        {
            $_SESSION['panier'][$id]=$quantite;
        }
        else
        {
            $_SESSION['panier'][$id]=$product->QUANTITE;
        }
    }

    public function total_produit($id)
    {
        $total=0;
        $pdo = Connexion::getConnexion();
        $sql = "SELECT * FROM book where ID=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('id',$id);
        $product = $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_OBJ);
        $total+=$_SESSION['panier'][$product->ID]*$product->PRIX;
        return $total;

    }

    public function total()
    {
        $total=0;
        $id = array_keys($_SESSION['panier']);
        $pdo = Connexion::getConnexion();
        $sql = 'SELECT * FROM book where ID IN (' . implode(',', $id) . ')';
        $stmt = $pdo->prepare($sql);
        $product = $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($product as $livre)
        {
            $total+=$_SESSION['panier'][$livre->ID]*$livre->PRIX;
        }
        if(isset($_SESSION['coupon']))
        {
            $total=$total-(($total*$_SESSION['coupon'])/100);
        }
        return $total;
    }

    public function totalewithoutcoupon()
    {
        $total=0;
        $id = array_keys($_SESSION['panier']);
        $pdo = Connexion::getConnexion();
        $sql = 'SELECT * FROM book where ID IN (' . implode(',', $id) . ')';
        $stmt = $pdo->prepare($sql);
        $product = $stmt->execute();
        $product = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($product as $livre)
        {
            $total+=$_SESSION['panier'][$livre->ID]*$livre->PRIX;
        }

        return $total;
    }

    public function add($livre)
    {
        if(isset($_SESSION['panier'][$livre->ID]))
        {
            $_SESSION['panier'][$livre->ID]++;
        }
        else
        $_SESSION['panier'][$livre->ID]=1;
    }

    public function del($id)
    {
        unset($_SESSION['panier'][$id]);
    }
}